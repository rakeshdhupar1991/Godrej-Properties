<h2>Add Amenity</h2>

<form method="POST" action="{{ route('admin.amenities.store') }}">
    @csrf
    <input type="text" name="amenities_name" placeholder="Amenity Name" required>
    <button type="submit">Submit</button>
</form>
