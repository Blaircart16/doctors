<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();
        // Get the patients associated with the authenticated user
        $patients = $user->patients;
    
        // $patients = Patient::orderBy('created_at', 'DESC')->get(); 
        if (request()->wantsJson()) {
            return response()->json($patients);
        }
        $patients = Patient::with('caretaker')->get();

        return view('patients.index', ['patients' => $patients]);
     //   return view('patients.index', compact('patients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user
        $patientData = $request->all();
        $patientData['user_id'] = $user->id; // Associate the user_id with the authenticated user
    
        Patient::create($patientData);
    
        return redirect()->route('patients')->with('success', 'Patient added successfully');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update($request->all());

        return redirect()->route('patients')->with('success', 'Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->delete();

        return redirect()->route('patients')->with('success', 'Patient deleted successfully');
    }
    public function api($id)
{
    // Find the patient by ID
    $patient = Patient::find($id);

    // Check if the patient exists
    if (!$patient) {
        return response()->json(['message' => 'Patient not found'], 404);
    }

    return response()->json($patient);
}

}

?>
