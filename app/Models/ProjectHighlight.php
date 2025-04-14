<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectHighlight extends Model
{
    //protected $table = 'project_highlights'; // if your table is singular
    use HasFactory;
    protected $table = 'project_highlights';

    protected $fillable = ['name'];

    public $timestamps = true;
}
