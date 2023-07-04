<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caretaker;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class CaretakerController extends Controller
{

    public function index()
{
    $caretakers = Caretaker::with('patient')->get();
    
    return view('caretakers.index', ['caretakers' => $caretakers]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $patients = Patient::all();
    return view('caretakers.create', ['patients' => $patients]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user
        $caretakerData = $request->all();
        $caretakerData['user_id'] = $user->id; // Associate the user_id with the authenticated user
    
        Caretaker::create($caretakerData);

        return redirect()->route('caretakers')->with('success', 'Caretaker added successfully');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $caretaker = Caretaker::findOrFail($id);

        return view('caretakers.show', compact('caretaker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $caretaker = caretaker::findOrFail($id);

        return view('caretakers.edit', compact('caretaker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $caretaker = caretaker::findOrFail($id);

        $caretaker->update($request->all());

        return redirect()->route('caretakers')->with('success', 'Caretaker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $caretaker = caretaker::findOrFail($id);

        $caretaker->delete();

        return redirect()->route('caretakers')->with('success', 'Caretaker deleted successfully');
    }
    public function api($id)
{
    // Find the patient by ID
    $caretaker = caretaker::find($id);

    // Check if the patient exists
    if (!$caretaker) {
        return response()->json(['message' => 'Caretaker not found'], 404);
    }

    return response()->json($caretaker);
}


}
