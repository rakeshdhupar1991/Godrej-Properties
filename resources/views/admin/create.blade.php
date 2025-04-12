<!DOCTYPE html>
<html>
<head>
    <title>Add New Property</title>
    <meta charset="utf-8">
</head>
<body>
    <h2>Create New Property</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <label>Project Name:</label>
        <input type="text" name="project_name" required><br><br>

        <label>Configuration:</label>
        <select name="configuration" required>
            <option value="">Select Configuration</option>
            @foreach ($configurations as $config)
                <option value="{{ $config->config_id }}">{{ $config->name }}</option>
            @endforeach
        </select><br><br>


        <label>Property Type:</label>
        <input type="text" name="property_type_old"><br><br>

        <label>Amenities:</label>
        <select name="amenities" required>
            <option value="">Select Amenity</option>
            @foreach ($amenities as $amenity)
                <option value="{{ $amenity->amenity_id }}">{{ $amenity->name }}</option>
            @endforeach
        </select><br><br>

        <label>Gallery:</label>
        <select name="gallery" required>
            <option value="">Select Gallery</option>
            @foreach ($galleries as $gallery)
                <option value="{{ $gallery->gallery_id }}">{{ $gallery->title }}</option>
            @endforeach
        </select><br><br>

        <label>Project Highlights:</label>
        <select name="project_highlights" required>
            @foreach ($projectHighlights as $highlight)
                <option value="{{ $highlight->id }}">ID: {{ $highlight->id }}</option>
            @endforeach
        </select><br><br>

        <label>Location Advantages:</label>
        <select name="location_advantages" required>
            @foreach ($locationAdvantages as $loc)
                <option value="{{ $loc->location_advantages_id }}">{{ $loc->location_advantages_name }}</option>
            @endforeach
        </select><br><br>

        <label>FAQs:</label>
        <select name="faqs" required>
            @foreach ($faqs as $faq)
                <option value="{{ $faq->faqs_id }}">{{ $faq->faqs_name }}</option>
            @endforeach
        </select><br><br>

        <label>Price:</label>
        <input type="number" name="price"><br><br>

        <label>Area (sq ft):</label>
        <input type="number" name="area" required><br><br>

        <label>Address:</label>
        <input type="text" name="address" required><br><br>

        <label>City:</label>
        <input type="text" name="city"><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="5" cols="50"></textarea><br><br>

        <label>Possession:</label>
        <select name="possession" required>
            <option value="New Launch">New Launch</option>
            <option value="Under Construction">Under Construction</option>
            <option value="Ready to Move">Ready to Move</option>
        </select><br><br>

        <button type="submit">Add Property</button>
    </form>
</body>
</html>
