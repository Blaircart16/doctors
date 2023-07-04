@extends('layouts.app')

@section('contents')
<div class="mb-1">
    <a href="{{ route('home') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="fas fa-arrow-center">Message Threads</h1>
<hr>
    
</hr>


@foreach($threads as $thread)
    <div>
        <h3>{{ $thread->sender->name }} to {{ $thread->recipient->name }}</h3>
        <p>{{ $thread->message }}</p>
        <a href="{{ route('messages.show', $thread->id) }}">View Thread</a>
    </div>
@endforeach
@endsection