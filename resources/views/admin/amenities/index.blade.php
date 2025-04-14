<h2>Amenities</h2>

<a href="{{ route('admin.amenities.create') }}">Add New Amenity</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Amenity Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($amenities as $amenity)
        <tr>
            <td>{{ $amenity->amenity_id }}</td>
            <td>{{ $amenity->amenities_name }}</td>
            <td>
                <a href="{{ route('admin.amenities.edit', $amenity->amenity_id) }}">Edit</a> |
                <form action="{{ route('admin.amenities.destroy', $amenity->amenity_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this amenity?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
