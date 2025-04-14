<h2>Edit Amenity</h2>

<form method="POST" action="{{ route('admin.amenities.update', $amenity->amenity_id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="amenities_name" value="{{ $amenity->amenities_name }}" required>
    <button type="submit">Update</button>
</form>
