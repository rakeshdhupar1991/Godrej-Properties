<h2>Project Highlights</h2>

<a href="{{ route('admin.project_highlights.create') }}">Add New</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Highlight Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($highlights as $index => $highlight)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $highlight->name }}</td>
            <td>
                <a href="{{ route('admin.project_highlights.edit', $highlight->id) }}">Edit</a>

                <form action="{{ route('admin.project_highlights.destroy', $highlight->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No highlights found.</td>
        </tr>
    @endforelse
    </tbody>
</table>
