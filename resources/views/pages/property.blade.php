
@extends('layouts.app')

@section('title', 'Godrej Properties')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ route('property.image', $property->id) }}" class="img-fluid rounded-start" alt="Property Image">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h3 class="card-title">{{ $property->name }}</h3>
                        <p class="card-text text-muted">{{ $property->address_1 }}, {{ $property->city }}, {{ $property->state }} - {{ $property->pincode }}</p>
                        <hr>
                        <p><strong>Type:</strong> {{ $property->property_type }}</p>
                        <p><strong>Price:</strong> ${{ number_format($property->price, 2) }}</p>
                        <p><strong>Description:</strong> {{ $property->description }}</p>
                        <p><strong>Rooms:</strong> {{ $property->rooms }}</p>
                        <p><strong>Washrooms:</strong> {{ $property->washrooms }}</p>
                        <p><strong>BHK:</strong> {{ $property->bhk }}</p>
                        <p><strong>Square Feet:</strong> {{ $property->sqft }} sqft</p>
                        <p><strong>Latitude:</strong> {{ $property->latitude }}, <strong>Longitude:</strong> {{ $property->longitude }}</p>
                        <p><strong>Status:</strong> {{ $property->buy_or_sale }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
