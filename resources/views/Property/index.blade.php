@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach(range(1, 6) as $property)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Property Image">
                <div class="card-body">
                    <h5 class="card-title">3 BHK Builder Floor for Sale</h5>
                    <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                    <p class="card-text">$300,000</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
