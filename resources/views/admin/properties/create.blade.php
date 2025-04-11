@extends('layouts.app')

@section('title', 'Add New Property')

@section('content')
<div class="container mt-5">
    <h2>Add New Property</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="address_1" placeholder="Address 1">
    <input type="text" name="address_2" placeholder="Address 2">
    <input type="text" name="city" placeholder="City">
    <input type="text" name="state" placeholder="State">
    <input type="text" name="country" placeholder="Country">
    <input type="text" name="pincode" placeholder="Pincode">
    <input type="number" step="any" name="latitude" placeholder="Latitude">
    <input type="number" step="any" name="longitude" placeholder="Longitude">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" name="sqft" placeholder="Square Feet">
    <input type="number" name="rooms" placeholder="Rooms">
    <input type="number" name="washrooms" placeholder="Washrooms">
    <input type="number" name="bhk" placeholder="BHK">
    <input type="text" name="location" placeholder="Location">

    <select name="property_type">
        <option value="Apartment">Apartment</option>
        <option value="Villa">Villa</option>
        <option value="Office">Office</option>
    </select>

    <select name="buy_or_sale">
        <option value="Buy">Buy</option>
        <option value="Sale">Sale</option>
    </select>

    <input type="number" step="0.01" name="price" placeholder="Price">

    <input type="file" name="image_url" accept="image/*" required>

    <button type="submit">Add Property</button>
</form>

</div>
@endsection
