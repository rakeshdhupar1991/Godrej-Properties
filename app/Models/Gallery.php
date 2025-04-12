<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //protected $table = 'gallery'; // if your table is singular
    use HasFactory;
    protected $fillable = ['gallery_name']; // ✅ Add this line
}
