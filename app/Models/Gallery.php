<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //protected $table = 'gallery'; // if your table is singular
    use HasFactory;
    protected $table = 'gallery'; // Match your table name
    protected $primaryKey = 'gallery_id'; // Custom PK
    protected $fillable = ['gallery_name', 'gallery_url'];
}
