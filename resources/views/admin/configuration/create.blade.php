


<h2>Add Configuration</h2>
<form method="POST" action="{{ route('admin.configuration.store') }}">
    @csrf
    <input name="configuration_name" placeholder="Name">
    <input name="configuration_price" placeholder="Price" type="number">
    <button type="submit">Submit</button>
</form>

