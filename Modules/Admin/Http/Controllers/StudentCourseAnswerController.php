<?php

namespace Modules\Admin\Http\Controllers;

use Datatables;
use App\Model\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Model\QuestionAnswer;
use App\Model\Exam;
use App\Model\UserMaster;
class StudentCourseAnswerController extends AdminController {

    //*** JSON Request
    public function datatables() {
        $datas = Exam::orderBy('id', 'desc')->get();
        //--- Integrating This Collection Into Datatables
        return Datatables::of($datas)
                        ->addIndexColumn()
                        ->editColumn('user_id', function ($model) {
                            $user=UserMaster::where('id',$model->user_id)->first();
                            return $user->full_name;
                        })
                        ->editColumn('course_id', function ($model) {
                            $course=Course::where('id',$model->course_id)->first();
                            return $course->name;
                        })
                        ->editColumn('status', function ($model) {
                            if ($model->status == '0') {
                                $status = '<span class="badge badge-warning"><i class="icofont-warning"></i>Fail</span>';
                            } else if ($model->status == '1') {
                                $status = '<span class="badge badge-success"><i class="icofont-check"></i>Pass</span>';
                            }
                            return $status;
                        })
                        ->addColumn('action', function ($model) {
                            return
                                    '<a href="' . Route("admin-student-exam-answer-edit", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-edit"></i> Edit</a>' .
                                    '<a href="' . Route("admin-student-exam-answer-view", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-eye"></i> Question & Answer</a>' ;
                        })
                        ->rawColumns(['status', 'action'])
                        ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index() {
        return view('admin::exam.list');
    }

    

    //*** GET Request
    public function view($id) {
        $model=Exam::where('id',$id)->first();
        return view('admin::exam.view', compact('id','model'));
    }
    public function get_edit($id) {
        $data['model'] = $model = Exam::where('id', '=', $id)->first();
        if (!$model) {
            return redirect()->back()->with('error_msg', 'Invalid Link!');
        }
        $data['id'] = $id;
        return view('admin::exam.edit', $data);
    }

    public function post_edit(Request $request, $id) {
        $validator = Validator::make($request->all(), [
                    
        ]);
        $validator->after(function ($validator) use ($request) {
            $checkExam = Exam::where('id', $request->input('id'))->first();
            if($checkExam->status=='0'){
                if($request->input('supply_exam_fees')==''){
                    $validator->errors()->add('supply_exam_fees', 'This feild is required!');
                }
            }else{
                if($request->input('theory')==''){
                    $validator->errors()->add('theory', 'This field is required!');
                }
                if($request->input('practical')==''){
                    $validator->errors()->add('practical', 'This field is required!');
                }
                if($request->input('viva')==''){
                    $validator->errors()->add('viva', 'This field is required!');
                }
            }
            
            
        });
        if ($validator->passes()) {
            $model = Exam::where('id', '=', $id)->first();
            $input = $request->all();
          	if($model->status=='1'){
          	    $input['admin_marks_submit']='1';
          	}
            $model->update($input);
          	if($model->status=='1'){
            //Send Mail
                $email_setting = $this->get_email_data('pass_exam', array('NAME' => $model->user->full_name, 'EMAIL' => $model->user->email, 'COURSENAME' => $model->course->name, 'THEORY' => $model->theory, 'PRACTICAL' => $model->practical, 'VIVA' => $model->viva));
                $email_data = [
                    'to' => $model->user->email,
                    'subject' => 'DI Technical '.$model->course->name.' Course Cleared',
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
               $this->SendMail($email_data);  
			//Admin send mail
              $admin_model = UserMaster::where('type_id', '1')->first();
              $email_setting = $this->get_email_data('admin_pass_exam', array('STUDENT_NAME' => $model->user->full_name, 'COURSENAME' => $model->course->name, 'THEORY' => $model->theory, 'PRACTICAL' => $model->practical, 'VIVA' => $model->viva));
                $email_data = [
                    'to' => $admin_model->email,
                    'subject' => 'DI Technical '.$model->course->name.' Course Cleared',
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
               $this->SendMail($email_data);
            }
            return redirect()->route('admin-student-exam-answer-index')->with('success_msg', 'Updated successfully.');
        } else {
            return redirect()->back()->withErrors($validator)->withInput()->with('error_msg', 'Something went wrong please check your input.');
        }
    }

}
