@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List patient</h1>
        <a href="{{ route('patients.create') }}" class="btn btn-primary">Add patient</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Medical Condition</th>
                <th>Caretaker Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->address }}</td>
                    <td class="align-middle">{{ $rs->gender }}</td>
                    <td class="align-middle">{{ $rs->medicalCondition }}</td>
                    <td class="align-middle">{{ $rs->caretakerName }}</td>
                    <td class="align-middle">{{ \Carbon\Carbon::parse($rs->DOB)->age }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('patients.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('patients.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('patients.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
