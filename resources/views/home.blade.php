@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Dashboard</h1>
        <a href="{{ route('patients') }}" class="btn btn-primary">View Patients</a>
    </div>
    
    <hr />
    <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Monitored Patients</h5>
            </div>
            <div class="card-body">
                <p>Registered patients: <strong>{{ $patientsCount }}</strong></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Patients</h5>
            </div>
            <div class="card-body">
                @if ($patients->count() > 0)
                    <div class="row">
                        @foreach ($patients->take(3) as $patient)
                            <div class="col-md-4">
                                <p>{{ $patient->name }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No patients found.</p>
                @endif
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Messages</h5>
                </div>
                <div class="card-body">
                    @if ($messages->count() > 0)
                        <ul class="list-unstyled">
                            @foreach ($messages as $message)
                                <li>{{ $message->name }}: {{ $message->message }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No messages available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Upcoming Appointments</h5>
                </div>
                <div class="card-body">
                   
<p>No upcoming appointments.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Calendar</h5>
                </div>
                <div class="card-body">
                    <!-- Add your calendar implementation here -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
@endsection
