
<h2>Edit Configuration</h2>
<form method="POST" action="{{ route('admin.configuration.update', $configuration->config_id) }}">
    @csrf
    @method('PUT')
    <input name="configuration_name" value="{{ $configuration->configuration_name }}">
    <input name="configuration_price" value="{{ $configuration->configuration_price }}" type="number">
    <button type="submit">Update</button>
</form>

