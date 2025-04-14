<h2>Edit Project Highlight</h2>
<form method="POST" action="{{ route('admin.project_highlights.update', $highlight->id) }}">
    @csrf
    @method('PUT')
    <button type="submit">Update</button>
</form>
