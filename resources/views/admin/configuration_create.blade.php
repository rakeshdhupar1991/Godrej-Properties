<!DOCTYPE html>
<html>
<head>
    <title>Add Configuration</title>
</head>
<body>

<h2>Add New Configuration</h2>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.configuration.store') }}">
    @csrf
    <label>Configuration Name:</label>
    <input type="text" name="configuration_name" required><br><br>

    <label>Configuration Price:</label>
    <input type="number" name="configuration_price" required><br><br>

    <button type="submit">Add Configuration</button>
</form>

</body>
</html>
