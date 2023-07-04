@extends('layouts.app')

@section('contents')

<div class="mb-1">
    <a href="{{ route('caretakers') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="fas fa-arrow-center">Caretaker Details</h1>
<hr>
    
</hr>

    <div class="row">
        <!-- Name -->
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $caretaker->name }}" readonly>
        </div>
        
        <div class="col mb-3">
            <label class="form-label">Relationship</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $caretaker->relationship }}" readonly>
        </div>
    </div>
    <div class="row">
        
        <div class="col mb-3">
            <label class="form-label">Contact</label>
            <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $caretaker->contact }}" readonly>
        </div>
        
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="medicalCondition" class="form-control" placeholder="Medical Condition" value="{{ $caretaker->email}}" readonly>
        </div>
    </div>
    <div class="row">
        
    <div class="row">
        <!-- Created At -->
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $caretaker->created_at }}" readonly>
        </div>
        <!-- Updated At -->
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $caretaker->updated_at }}" readonly>
        </div>
    </div>
@endsection
