<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        // Fetch all message threads of the authenticated user
        $threads = Message::where(function ($query) {
                $query->where('sender_id', Auth::id())
                    ->orWhere('recipient_id', Auth::id());
            })
            ->with('sender', 'recipient')
            ->orderBy('created_at', 'desc')
            ->get();
    
        return view('messages.index', compact('threads'));
    }
    

    public function create()
    {
        // Retrieve a list of caretakers to populate the recipient select field
        $caretakers = User::where('role', 'caretaker')->get();

        return view('messages.create', ['caretakers' => $caretakers]);
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);
    
        // Create a new message
        Message::create([
            'sender_id' => Auth::id(),
            'recipient_id' => request('recipient_id'),
            'message' => request('message'),
        ]);
    
        return redirect()->route('messages.index')->with('success', 'Message sent successfully.');
    }
    
    public function show($id)
    {
        // Fetch the message thread by ID
        $thread = Message::where('id', $id)
            ->with('sender', 'recipient')
            ->firstOrFail();

        return view('messages.show', ['thread' => $thread]);
    }
}
