<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Firestore;
use App\Models\Chat;

class ChatController extends Controller
{
    protected $firestore;

    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'sender_id' => 'required',
            'receiver_id' => 'required',
            'message' => 'required',
        ]);

        // Create a new Chat model instance
        $chat = new Chat;
        $chat->sender_id = $validatedData['sender_id'];
        $chat->receiver_id = $validatedData['receiver_id'];
        $chat->message = $validatedData['message'];
        $chat->timestamp = now();

        // Save the chat message to Firestore
        $this->firestore->collection('chats')->add([
            'sender_id' => $chat->sender_id,
            'receiver_id' => $chat->receiver_id,
            'message' => $chat->message,
            'timestamp' => $chat->timestamp,
        ]);

        // Optionally, you can also save the chat message in the local database
        $chat->save();

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function show($senderId, $receiverId)
    {
        // Retrieve the chat history from Firestore
        $chats = $this->firestore
            ->collection('chats')
            ->where('sender_id', '=', $senderId)
            ->where('receiver_id', '=', $receiverId)
            ->orderBy('timestamp')
            ->get();

        // Transform the Firestore documents into a JSON response
        $chatHistory = $chats->map(function ($chat) {
            return [
                'sender_id' => $chat->get('sender_id'),
                'receiver_id' => $chat->get('receiver_id'),
                'message' => $chat->get('message'),
                'timestamp' => $chat->get('timestamp')->toDateTimeString(),
            ];
        });

        return response()->json($chatHistory);
    }
}
