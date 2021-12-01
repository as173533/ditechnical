<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','image','price','short_description','long_description','time','featured','study_material','status'];
    protected $table = 'courses';
    // public $timestamps = false;

    

    
}
