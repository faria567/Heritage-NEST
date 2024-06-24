@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $property->title }}</h1>
    <div class="row">
        <div class="col-md-8">
            <img src="path/to/image" class="img-fluid" alt="{{ $property->title }}">
        </div>
        <div class="col-md-4">
            <h3>${{ $property->price }}</h3>
            <ul>
                <li>Bedrooms: {{ $property->bedrooms }}</li>
                <li>Bathrooms: {{ $property->bathrooms }}</li>
                <li>Balconies: {{ $property->balconies }}</li>
                <li>Furnished: {{ $property->furnished ? 'Yes' : 'No' }}</li>
                <li>Area: {{ $property->area }} sqft</li>
                <li>Floor: {{ $property->floor }} of {{ $property->total_floors }}</li>
                <li>Ready to move: {{ $property->ready_to_move ? 'Yes' : 'No' }}</li>
                <li>Facing: {{ $property->facing }}</li>
                <li>Age of Construction: {{ $property->age_of_construction }} years</li>
            </ul>
            <h4>Amenities</h4>
            <ul>
                @foreach(json_decode($property->amenities) as $amenity)
                    <li>{{ $amenity }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
