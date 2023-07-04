@extends('layouts.app')

@section('contents')
    <h1>Message Thread</h1>

    <div>
        <h3>{{ $thread->sender->name }} to {{ $thread->recipient->name }}</h3>
        <p>{{ $thread->message }}</p>
    </div>
@endsection
