<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model {

    protected $table = 'enquiry';
    protected $fillable = ['name', 'email', 'phone', 'address', 'message', 'status'];

}
