@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Properties</h1>
    <div class="row">
        @foreach($properties as $property)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="path/to/image" class="card-img-top" alt="{{ $property->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text">${{ $property->price }}</p>
                        <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
