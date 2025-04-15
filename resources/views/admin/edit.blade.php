
<div class="container container-narrow">
    <div class="form-section">
        <h2>Edit Property: {{ $property->project_name }}</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.update', $property->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Project Name</label>
                <input name="project_name" value="{{ old('project_name', $property->project_name) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input name="price" value="{{ old('price', $property->price) }}" type="number" class="form-control">
            </div>

            <div class="form-group">
                <label>Area (sqft)</label>
                <input name="area" value="{{ old('area', $property->area) }}" type="number" class="form-control">
            </div>

            <div class="form-group">
                <label>City</label>
                <input name="city" value="{{ old('city', $property->city) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ old('description', $property->description) }}</textarea>
            </div>

            <div class="form-group">
                <label>Possession</label>
                <select name="possession" class="form-select">
                    @foreach (['New Launch', 'Under Construction', 'Ready to Move'] as $option)
                        <option value="{{ $option }}" @if($property->possession === $option) selected @endif>{{ $option }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Add other fields: config, amenities, gallery, etc. if needed --}}

            <button type="submit" class="btn btn-primary mt-3">Update Property</button>
        </form>
    </div>
</div>

