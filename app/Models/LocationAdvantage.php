<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationAdvantage extends Model
{
    //protected $table = 'location_advantages'; // if your table is singular
    use HasFactory;
    protected $primaryKey = 'location_advantages_id';

    protected $fillable = [
        'location_advantages_name',
    ];
}
