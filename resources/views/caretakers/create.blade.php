@extends('layouts.app')

@section('scripts')
    <!-- Add any required scripts here -->
@endsection

@section('contents')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('caretakers') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
    <h1 class="mb-0">Add Caretaker</h1>
    <hr />

    <form action="{{ route('caretakers.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col">
                <label for="relationship">Email:</label>
                <input type="text" name="email" id="relationship" class="form-control" placeholder="Email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="contact">Contact:</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact" required>
            </div>
            <div class="col">
                <label for="email">Password:</label>
                <input type="text" name="password" id="email" class="form-control" placeholder="Password" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="patientID">Select Patient</label>
                <select name="patientID" class="form-control">
                    <option value="">Select a patient</option>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="email">Relationship:</label>
                <input type="text" name="relationship" id="email" class="form-control" placeholder="Relationship" required>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
