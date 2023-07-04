@extends('layouts.app')

@section('contents')
<div class="mb-1">
    <a href="{{ route('patients') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="fas fa-arrow-center">Patient Details</h1>
  <hr>  
</hr>

    <div class="row">
        <!-- Name -->
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $patient->name }}" readonly>
        </div>
        <!-- Address -->
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $patient->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <!-- Gender -->
        <div class="col mb-3">
            <label class="form-label">Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $patient->gender }}" readonly>
        </div>
        <!-- Medical Condition -->
        <div class="col mb-3">
            <label class="form-label">Medical Condition</label>
            <input type="text" name="medicalCondition" class="form-control" placeholder="Medical Condition" value="{{ $patient->medicalCondition }}" readonly>
        </div>
    </div>
    <div class="row">
        <!-- Caretaker Name -->
        <div class="col mb-3">
            <label class="form-label">Caretaker Name</label>
            <input type="text" name="caretakerName" class="form-control" placeholder="Caretaker Name" value="{{ $patient->caretakerName }}" readonly>
        </div>
        <!-- Age -->
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" placeholder="Age" value="{{ \Carbon\Carbon::parse($patient->DOB)->age }}" readonly>
        </div>
    </div>
    <div class="row">
        <!-- Created At -->
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $patient->created_at }}" readonly>
        </div>
        <!-- Updated At -->
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $patient->updated_at }}" readonly>
        </div>
    </div>
@endsection
