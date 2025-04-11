<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    protected $guarded = []; // allows all columns to be mass assigned
    //protected $fillable = ['title', 'city', 'price']; // optional, for mass assignment
    protected $fillable = [
        'image_url', 'property_type', 'price', 'name', 'address_1', 'address_2',
        'city', 'state', 'country', 'pincode', 'latitude', 'longitude',
        'description', 'sqft', 'rooms', 'washrooms', 'bhk', 'location', 'buy_or_sale'
    ];
    
}
