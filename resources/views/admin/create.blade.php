<!DOCTYPE html>
<html>
<head>
    <title>Add New Property</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        @csrf

        <h2>Property Details</h2>
        <input name="project_name" placeholder="Project Name" required><br>
        <input name="price" type="number" placeholder="Price"><br>
        <input name="area" type="number" placeholder="Area (sqft)"><br>
        <input name="address" placeholder="Address"><br>
        <input name="city" placeholder="City"><br>
        <textarea name="description" placeholder="Description"></textarea><br>

        <label>Possession:</label>
        <select name="possession" required>
            <option value="New Launch">New Launch</option>
            <option value="Under Construction">Under Construction</option>
            <option value="Ready to Move">Ready to Move</option>
        </select><br>

        <label>Property Types:</label><br>
        <input type="checkbox" name="property_type_old[]" value="Apartment"> Apartment
        <input type="checkbox" name="property_type_old[]" value="Villa"> Villa
        <input type="checkbox" name="property_type_old[]" value="Plot"> Plot
        <input type="checkbox" name="property_type_old[]" value="Penthouse"> Penthouse
        <br><br>

        <h3>Configurations</h3>
        @for($i = 0; $i < 3; $i++)
            <input name="configurations[{{ $i }}][name]" placeholder="Name">
            <input name="configurations[{{ $i }}][price]" type="number" placeholder="Price"><br>
        @endfor

        <h3>Amenities</h3>
        @for($i = 0; $i < 5; $i++)
            <input name="amenities_list[]" placeholder="Amenity Name"><br>
        @endfor

        <h3>Gallery Images</h3>
        <label>Upload up to 10 images</label><br>
        <input type="file" name="gallery_images[]" multiple accept="image/*"><br>

        <h3>Highlights</h3>
        @for($i = 0; $i < 3; $i++)
            <input name="project_highlights[]" placeholder="Highlight"><br>
        @endfor

        <h3>Location Advantage</h3>
        @for($i = 0; $i < 3; $i++)
            <input name="location_advantages_name[]" placeholder="Location Advantage"><br>
        @endfor

        <h3>FAQ</h3>
        @for($i = 0; $i < 3; $i++)
            <input name="faqs_name[]" placeholder="FAQ"><br>
        @endfor

        <br>
        <button type="submit">Submit All</button>
    </form>
</body>
</html>
