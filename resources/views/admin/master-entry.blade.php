<!DOCTYPE html>
<html>
<head>
    <title>Master Data Entry</title>
</head>
<body>

<h2>Admin: Add Master Data</h2>

@if(session('success'))
    <div style="color: green">{{ session('success') }}</div>
@endif

<form action="{{ route('admin.master-entry.store') }}" method="POST">
    @csrf

    <label>Configuration:</label>
    <input type="text" name="config_name" required><br><br>

    <label>Amenity:</label>
    <input type="text" name="amenity_name" required><br><br>

    <label>Gallery:</label>
    <input type="text" name="gallery_name" required><br><br>

    <label>Project Highlight:</label>
    <input type="text" name="highlight" required><br><br>

    <label>Location Advantage:</label>
    <input type="text" name="location_advantage" required><br><br>

    <button type="submit">Add All</button>
</form>

</body>
</html>
