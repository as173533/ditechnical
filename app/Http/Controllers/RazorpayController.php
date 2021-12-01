<?php

# Copy the code from below to that controller file located at app/Http/Controllers/RazorpayController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
//use Razorpay\Api\Api;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Model\UserMaster;
use App\Settings;
use App\Model\Order;
use App\Model\Course;
use App\Model\AssignCourse;
use DB;

class RazorpayController extends Controller {

    public function dopayment(Request $request) {
        //Input items of form
        $data_msg = [];
        $title = 'Ditechnical';
        $card = [];
        $input = $request->all();

        $input['pay_amount'] = $input['amount'] / 100;

        $input['order_number'] = $this->rand_string(8);
        $input['user_id'] = Auth::guard('frontend')->user()->id;
        
        $order = Order::create($input);
        $assign_course=[];
        $assign_course['enrollment_id'] = $this->rand_number(8);
        $assign_course['user_id']=Auth::guard('frontend')->user()->id;
        $assign_course['course_id']=$input['course_id'];
        $assign_course['amount_paid']=$order->pay_amount;
        $assign=AssignCourse::create($assign_course);
        
        $course=Course::where('id',$input['course_id'])->first();
        
        $model = UserMaster::findOrFail(Auth::guard('frontend')->user()->id);

        $email_setting = $this->get_email_data('purchase_course', array('NAME' => $model->full_name, 'TITLE' => $title,'COURSENAME' => $course->name));


        $email_data = [
            'to' => $model->email,
            'subject' => "Course purchase",
            'template' => 'signup',
            'data' => ['message' => $email_setting['body']]
        ];

        $this->SendMail($email_data);

        $admin_model = UserMaster::where('type_id', '1')->first();
        $email_setting = $this->get_email_data('purchase_course_admin', array('NAME' => $admin_model->name, 'TITLE' => $title,'COURSENAME' => $course->name));
        $emails = array("$admin_model->email", "");
        $email_data = [
            'to' => $admin_model->email,
            'subject' => "Course purchase",
            'template' => 'signup',
            'data' => ['message' => $email_setting['body']]
        ];
        $this->SendMail($email_data);
        $data_msg['msg'] = 'Your order has been placed successful.';
        $request->session()->flash('success', 'Your order has been placed successful.');
        
        return response()->json($data_msg);
        // Please check browser console.
    }

}
