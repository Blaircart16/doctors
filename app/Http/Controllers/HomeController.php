<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Patient;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch the messages
        $messages = Message::latest()->get();
        // Retrieve the total count of registered patients
    $patientsCount = Patient::count();

    // Retrieve the first three patients
    $patients = Patient::take(3)->get();
          // Pass the messages to the dashboard view
        return view('home', compact('messages','patientsCount', 'patients'));
    }
}
