<h2>Edit Location Advantage</h2>

<form method="POST" action="{{ route('admin.location_advantages.update', $advantage->location_advantages_id) }}">
    @csrf @method('PUT')
    <input type="text" name="location_advantages_name" value="{{ $advantage->location_advantages_name }}" required>
    <button type="submit">Update</button>
</form>
