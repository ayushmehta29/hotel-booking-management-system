@extends('layout')

@section('content')
<h2>Book Room {{ $room->room_number }}</h2>

<form method="POST" action="/book">
@csrf
<input type="hidden" name="room_id" value="{{ $room->id }}">

<label>Check In</label>
<input type="date" name="check_in" class="form-control">

<label>Check Out</label>
<input type="date" name="check_out" class="form-control">

<button class="btn btn-success mt-2">Confirm Booking</button>
</form>
@endsection