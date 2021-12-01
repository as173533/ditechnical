<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number','user_id','course_id','full_name','email','phone','expiry_date','pay_amount','razorpay_payment_id','status'];
//    public $timestamps = false;
}
