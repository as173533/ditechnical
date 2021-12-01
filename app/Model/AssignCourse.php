<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

//use Laravel\Cashier\Billable;

class AssignCourse extends Model {
	
    
    protected $table = 'assign_course';
    protected $fillable = [
        'enrollment_id','user_id','course_id','amount_paid','status'
    ];
    public function user() {
        return $this->belongsTo('App\Model\UserMaster', 'user_id', 'id');
    }
    public function course() {
        return $this->belongsTo('App\Model\Course', 'course_id', 'id');
    }
    

}
