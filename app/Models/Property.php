<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    protected $guarded = []; // allows all columns to be mass assigned
    //protected $fillable = ['title', 'city', 'price']; // optional, for mass assignment
}
