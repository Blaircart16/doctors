@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Caretakers</h1>
        <a href="{{ route('caretakers.create') }}" class="btn btn-primary">Add Caretaker</a>
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
                <th>Relationship</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Patient Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($caretakers as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->relationship }}</td>
                    <td class="align-middle">{{ $rs->contact }}</td>
                    <td class="align-middle">{{ $rs->email }}</td>
                    <td class="align-middle">
    @if ($rs->patient)
        {{ $rs->patient->name }}
    @endif
</td>

                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('caretakers.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('caretakers.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('caretakers.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
