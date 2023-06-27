@extends('layouts.app')

@section('title', 'Edit Patient')

@section('contents')
    <h1 class="mb-0">Edit Patient</h1>
    <hr />
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $patient->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $patient->address }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-control">
                    <option value="M" {{ $patient->gender == 'M' ? 'selected' : '' }}>M</option>
                    <option value="F" {{ $patient->gender == 'F' ? 'selected' : '' }}>F</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Medical Condition</label>
                <input type="text" name="medicalCondition" class="form-control" placeholder="Medical Condition" value="{{ $patient->medicalCondition }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Caretaker Name</label>
                <input type="text" name="caretakerName" class="form-control" placeholder="Caretaker Name" value="{{ $patient->caretakerName }}" >
            </div>
            <div class="col">
                <label for="dob-input">Date of Birth:</label>
                <input type="date" name="DOB" id="dob-input" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
