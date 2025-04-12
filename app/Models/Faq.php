<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //protected $table = 'faqs'; // if your table is singular
    use HasFactory;
    protected $fillable = ['faqs_name']; // ✅ Add this line
}
