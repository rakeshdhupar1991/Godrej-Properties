<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    protected $fillable = [
        'project_name', 'configuration', 'property_type_old', 'amenities', 'gallery',
        'project_highlights', 'location_advantages', 'faqs', 'price', 'area',
        'address', 'city', 'description', 'possession'
    ];

    public $timestamps = false;

    protected $table = 'properties';

    protected $guarded = []; // or specify fillable fields
    
}
