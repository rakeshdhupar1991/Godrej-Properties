<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Properties</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            color: #0d6efd;
        }
        .table th, .table td {
            vertical-align: middle;
            font-size: 14px;
        }
        .truncate {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <h2 class="mb-4 text-center">All Properties</h2>

    @if($properties->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary text-center">
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Configuration</th>
                        <th>Property Type</th>
                        <th>Amenities</th>
                        <th>Gallery</th>
                        <th>Project Highlights</th>
                        <th>Location Advantages</th>
                        <th>FAQs</th>
                        <th>Price</th>
                        <th>Area (sqft)</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Description</th>
                        <th>Possession</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $index => $property)
                        <tr>
                            <td class="text-center">{{ $properties->firstItem() + $index }}</td>
                            <td>{{ $property->project_name }}</td>
                            <td class="truncate">{{ $property->configuration }}</td>
                            <td>{{ $property->property_type_old }}</td>
                            <td class="truncate">{{ $property->amenities }}</td>
                            <td class="truncate">{{ $property->gallery }}</td>
                            <td class="truncate">{{ $property->project_highlights }}</td>
                            <td class="truncate">{{ $property->location_advantages }}</td>
                            <td class="truncate">{{ $property->faqs }}</td>
                            <td>₹{{ number_format($property->price) }}</td>
                            <td>{{ $property->area }}</td>
                            <td>{{ $property->address }}</td>
                            <td>{{ $property->city }}</td>
                            <td class="truncate">{{ $property->description }}</td>
                            <td>{{ $property->possession }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.edit', $property->id) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                <form action="{{ route('admin.destroy', $property->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this property?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $properties->links() }}
        </div>
    @else
        <div class="alert alert-warning text-center">No properties found.</div>
    @endif
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
