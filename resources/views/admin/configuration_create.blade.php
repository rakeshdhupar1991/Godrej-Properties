<form method="POST" action="{{ route('admin.configuration.store') }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="configuration_name" required><br><br>

    <label>Price:</label>
    <input type="number" name="configuration_price" required><br><br>

    <button type="submit">Add Configuration</button>
</form>
