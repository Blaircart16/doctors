@extends('layouts.app')

@section('contents')
<div class="mb-1">
    <a href="{{ route('caretakers') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="fas fa-arrow-center">Edit Caretaker</h1>
<hr>   
</hr>
    <form action="{{ route('caretakers.update', $caretaker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $caretaker->name }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Relationship</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $caretaker->relationship }}" readonly>
        </div>
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
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
