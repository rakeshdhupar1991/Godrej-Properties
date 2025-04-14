<h2>Add Location Advantage</h2>

<form method="POST" action="{{ route('admin.location_advantages.store') }}">
    @csrf
    <input type="text" name="location_advantages_name" placeholder="Enter Advantage Name" required>
    <button type="submit">Save</button>
</form>
