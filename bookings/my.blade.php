@extends('layout')

@section('content')
<h2>My Bookings</h2>

<table class="table">
<tr>
    <th>Room</th>
    <th>Check In</th>
    <th>Check Out</th>
</tr>

@foreach($bookings as $b)
<tr>
    <td>{{ $b->room_id }}</td>
    <td>{{ $b->check_in }}</td>
    <td>{{ $b->check_out }}</td>
</tr>
@endforeach
</table>
@endsection