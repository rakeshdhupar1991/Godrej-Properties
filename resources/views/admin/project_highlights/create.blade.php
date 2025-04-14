<h2>Add Project Highlight</h2>

<form method="POST" action="{{ route('admin.project_highlights.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Highlight Name" required>
    <button type="submit">Save</button>
</form>
