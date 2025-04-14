<h2>Location Advantages</h2>
<a href="{{ route('admin.location_advantages.create') }}">Add New</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>#</th>
            <th>Location Advantage</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($advantages as $index => $advantage)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $advantage->location_advantages_name }}</td>
            <td>
                <a href="{{ route('admin.location_advantages.edit', $advantage->location_advantages_id) }}">Edit</a>
                <form action="{{ route('admin.location_advantages.destroy', $advantage->location_advantages_id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="3">No records found.</td></tr>
    @endforelse
    </tbody>
</table>
