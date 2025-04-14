<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    //protected $table = 'amenities'; // if your table is singular
    use HasFactory;
    protected $primaryKey = 'amenity_id';

    protected $fillable = ['amenities_name'];

    public $timestamps = true;
}
