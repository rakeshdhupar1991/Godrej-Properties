<!DOCTYPE html>
<html>
<head>
    <title>Add New Property</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-section {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 30px auto;
            border: 1px solid #dee2e6;
        }

        h2, h3 {
            color: #0d6efd;
            margin-top: 30px;
        }

        .form-check-input {
            border: 1px solid #6c757d;
        }

        .form-check-label {
            font-weight: 600;
            margin-left: 5px;
        }

        .form-group label {
            font-weight: 700;
        }

        select.form-select,
        input.form-control,
        textarea.form-control {
            border: 1px solid #6c757d;
        }

        footer {
            background: #0d6efd;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 40px;
        }

        header {
            background: #0d6efd;
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
        }

        .container-narrow {
            max-width: 800px;
            margin: auto;
        }
    </style>

<script>
    function addHighlight() {
        const wrapper = document.getElementById('highlight-wrapper');

        const div = document.createElement('div');
        div.classList.add('input-group', 'mb-2');
        div.innerHTML = `
            <input name="project_highlights[]" class="form-control" placeholder="Add Project Highlight">
            <button type="button" class="btn btn-danger" onclick="removeHighlight(this)">×</button>
        `;

        wrapper.appendChild(div);
    }

    function removeHighlight(button) {
        button.closest('.input-group').remove();
    }

     // Add Location Advantage
     function addAdvantages() {
        const wrapper = document.getElementById('advantages-wrapper');

        const div = document.createElement('div');
        div.classList.add('input-group', 'mb-2');
        div.innerHTML = `
            <input name="location_advantages_name[]" class="form-control" placeholder="Add Location Advantages">
            <button type="button" class="btn btn-danger" onclick="removeAdvantages(this)">×</button>
        `;
        wrapper.appendChild(div);
    }

    // Remove Location Advantage
    function removeAdvantages(button) {
        button.closest('.input-group').remove();
    }
</script>

</head>
<body>

<header>
    <div class="container text-center">
        <h1>Add New Property</h1>
    </div>
</header>

<div class="container container-narrow">
    <div class="form-section">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
            @csrf

            <h2>Property Details</h2>

            <div class="form-group">
                <label>Project Name</label>
                <input name="project_name" class="form-control" placeholder="Project Name" required>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="form-control" placeholder="Price">
            </div>

            <div class="form-group">
                <label>Area (sqft)</label>
                <input name="area" type="text" class="form-control" placeholder="Area (sqft) Ex: 250 - 500 sqft">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input name="address" class="form-control" placeholder="Address">
            </div>

            <div class="form-group">
                <label>City</label>
                <input name="city" class="form-control" placeholder="City">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>

            <div class="form-group">
                <label>Possession</label>
                <select name="possession" class="form-select" required>
                    <option value="New Launch">New Launch</option>
                    <option value="Under Construction">Under Construction</option>
                    <option value="Ready to Move">Ready to Move</option>
                </select>
            </div>

            <div class="form-group">
                <label>Property Types</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="property_type_old[]" value="Apartment">
                    <label class="form-check-label">Apartment</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="property_type_old[]" value="Villa">
                    <label class="form-check-label">Villa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="property_type_old[]" value="Plot">
                    <label class="form-check-label">Plot</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="property_type_old[]" value="Penthouse">
                    <label class="form-check-label">Penthouse</label>
                </div>
            </div>

            <h3>Configurations</h3>
            @php $configOptions = ['1 BHK', '2 BHK', '3 BHK', '4 BHK']; @endphp
            <div class="form-group">
                @foreach ($configOptions as $i => $option)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="configurations[{{ $i }}][name]" value="{{ $option }}">
                        <label class="form-check-label">{{ $option }}</label>
                    </div>
                @endforeach
            </div>

            <h3>Amenities</h3>
            @php
                $amenitiesOptions = ['Swimming pool', 'Parking', 'Gym', 'Clubhouse', 'Spa', '5-tier Security', 'Basketball Courts', 'Mini Theatre', 'Restaurant', 'Concierge services', 'Indoor Games', 'Outdoor Games', 'Jogging Track', 'Air Purification', 'Garden', 'Club House', 'Lift', 'Children Play Area'];
            @endphp
            <div class="form-group">
                <select name="amenities_list[]" class="form-select" multiple>
                    @foreach ($amenitiesOptions as $amenity)
                        <option value="{{ $amenity }}">{{ $amenity }}</option>
                    @endforeach
                </select>
            </div>

            <h3>Gallery Images</h3>
            <div class="form-group">
                <label>Upload up to 10 images</label>
                <input type="file" name="gallery_images[]" class="form-control" multiple accept="image/*">
            </div>

            <h3>Highlights</h3>
            <div id="highlight-wrapper">
                <div class="input-group mb-2">
                    <input name="project_highlights[]" class="form-control" placeholder="Add Project Highlight">
                    <button type="button" class="btn btn-danger" onclick="removeHighlight(this)">×</button>
                </div>
            </div>

            <button type="button" class="btn btn-sm btn-outline-primary mb-3" onclick="addHighlight()">+ Add More</button>   

            <h3>Location Advantages</h3>
            <div id="advantages-wrapper">
                <div class="input-group mb-2">
                    <input name="location_advantages_name[]" class="form-control" placeholder="Add Location Advantages">
                    <button type="button" class="btn btn-danger" onclick="removeAdvantages(this)">×</button>
                </div>
            </div>

            <button type="button" class="btn btn-sm btn-outline-primary mb-3" onclick="addAdvantages()">+ Add More</button>

            <h3>FAQ</h3>
            @for($i = 0; $i < 3; $i++)
                <div class="form-group">
                    <input name="faqs_name[]" class="form-control" placeholder="FAQ">
                </div>
            @endfor

            <button type="submit" class="btn btn-primary mt-4">Submit All</button>
        </form>
    </div>
</div>

<footer>
    <div class="container">
        &copy; {{ date('Y') }}, Designed & Developed by Dhupar Technologies.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
