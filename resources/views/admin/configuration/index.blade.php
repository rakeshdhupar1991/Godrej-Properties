
<h2>Configuration List</h2>
<a href="{{ route('admin.configuration.create') }}">Add New</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($configurations as $config)
        <tr>
            <td>{{ $config->config_id }}</td>
            <td>{{ $config->configuration_name }}</td>
            <td>{{ $config->configuration_price }}</td>
            <td>
                <a href="{{ route('admin.configuration.edit', $config->config_id) }}">Edit</a> |
                <form action="{{ route('admin.configuration.destroy', $config->config_id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

