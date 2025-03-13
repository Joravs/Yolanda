<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','title', 'director', 'year','poster', 'synopsis'];
}
