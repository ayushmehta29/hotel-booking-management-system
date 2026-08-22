@extends('layout')

@section('content')
<h2>Admin Dashboard</h2>

<div class="row">
    <div class="col-md-6">
        <div class="card p-3">
            <h4>Total Rooms: {{ $rooms }}</h4>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-3">
            <h4>Total Bookings: {{ $bookings }}</h4>
        </div>
    </div>
</div>
@endsection