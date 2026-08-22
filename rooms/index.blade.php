@extends('layout')

@section('content')
<h2>Available Rooms</h2>

<div class="row">
@foreach($rooms as $room)
<div class="col-md-4">
    <div class="card p-3">
        <h4>Room {{ $room->room_number }}</h4>
        <p>{{ $room->type }}</p>
        <p>₹{{ $room->price }}</p>
        <a href="/book/{{ $room->id }}" class="btn btn-primary">Book</a>
    </div>
</div>
@endforeach
</div>
@endsection