<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    
    protected $table = 'configuration'; // 👈 Explicit table name
    
    protected $primaryKey = 'config_id';

    protected $fillable = [
        'configuration_name',
        'configuration_price',
    ];

    public $timestamps = true;
    
}


