@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('admin.gallery.store') }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="gallery_name" required><br><br>

    <label>URL:</label>
    <input type="url" name="gallery_url" required><br><br>

    <button type="submit">Add Gallery</button>
</form>