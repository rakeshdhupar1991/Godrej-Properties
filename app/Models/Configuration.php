<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    //protected $table = 'configuration'; // if your table is singular

    // If the table is named "configuration" (singular), define it explicitly
    protected $table = 'configuration';

    // Primary key is "config_id"
    protected $primaryKey = 'config_id';

    // Allow mass assignment
    protected $fillable = ['configuration_name', 'configuration_price'];

    public $timestamps = true;
    
}
