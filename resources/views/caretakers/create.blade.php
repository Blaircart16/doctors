@extends('layouts.app')
@section('scripts')
@endsection

@section('contents')
<div class="mb-3">
    <a href="{{ route('caretakers') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i></a>
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
                <label for="relationship">Relationship:</label>
                <input type="text" name="relationship" id="relationship" class="form-control" placeholder="relationship" required>
            </div>
        </div>
        
            <div class="col">
                <label for="contact">Contact:</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="contact" required>
            </div>
        </div>
        
        <div class="col">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
            </div>
        </div>  

        <div>
        <select name="patientID" class="form-control">
    <option value="">Select a patient</option>
    @foreach ($patients as $patient)
        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
    @endforeach
</select>
<div>
        
    
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
@endsection
