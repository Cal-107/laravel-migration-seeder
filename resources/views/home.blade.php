@extends('layouts.main')

@section('content')
    <h1>
        Journey Ideas
    </h1>
    @foreach ($journeys as $journey)
        <ul>
            <li>Destination:{{ $journey->destination }}</li>
            <li>Airport:{{ $journey->airport }}</li>
            <li>Fligth Hours:{{ $journey->flight_hours }}</li>
            <li>Departure Date:{{ $journey->departure_date }}</li>
            <li>Arrival Date:{{ $journey->arrival_date }}</li>
            <li>Comeback Departure Date:{{ $journey->comeback_departure_date }}</li>
            <li>Comeback Arrival Date:{{ $journey->comeback_arrival_date }}</li>
            <li>Shuttle Service:{{ $journey->shuttle_service }}</li>
            <li>Hotel:{{ $journey->hotel }}</li>
            <li>Price:{{ $journey->price }}$</li>
        </ul>
    @endforeach

@endsection
