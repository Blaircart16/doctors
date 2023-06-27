@extends('layouts.app')
@section('scripts')
@endsection

@section('contents')
    <h1 class="mb-0">Add Patient</h1>
    <hr />
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div class="col">
                <label for="medicalCondition">Medical Condition:</label>
                <input type="text" name="medicalCondition" id="medicalCondition" class="form-control" placeholder="Medical Condition" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="caretakerName">Caretaker Name:</label>
                <input type="text" name="caretakerName" id="caretakerName" class="form-control" placeholder="Caretaker Name" required>
            </div>
            <div class="col">
                <label for="dob-input">Date of Birth:</label>
                <input type="date" name="DOB" id="dob-input" class="form-control" required>
            </div>
        </div>
    
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
@endsection
