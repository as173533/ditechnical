<?php

namespace Modules\Admin\Http\Controllers;

use Datatables;
use App\Model\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use URL;
use App\Model\QuestionAnswer;
class CourseController extends AdminController {

    //*** JSON Request
    public function datatables() {
        $datas = Course::orderBy('id', 'desc')->get();
        //--- Integrating This Collection Into Datatables
        return Datatables::of($datas)
                        ->addIndexColumn()
                        ->editColumn('image', function(Course $data) {
                            $photo = isset($data->image)? URL::asset('public/uploads/course/' . $data->image) : URL::asset('public/backend/no-image.png');
                            return '<img src="' . $photo . '" alt="Image" height="60" width="60">';
                        })
                        ->editColumn('status', function ($model) {
                            if ($model->status == '0') {
                                $status = '<span class="badge badge-warning"><i class="icofont-warning"></i>Inactive</span>';
                            } else if ($model->status == '1') {
                                $status = '<span class="badge badge-success"><i class="icofont-check"></i>Active</span>';
                            } else if ($model->status == '3') {
                                $status = '<span class="badge badge-danger"><i class="icofont-close"></i>Delete</span>';
                            }
                            return $status;
                        })
                        ->editColumn('featured', function ($model) {
                            if ($model->featured == '0') {
                                $status = '<span class="badge badge-warning"><i class="icofont-warning"></i>No</span>';
                            } else if ($model->featured == '1') {
                                $status = '<span class="badge badge-success"><i class="icofont-check"></i>Yes</span>';
                            }
                            return $status;
                        })
                        ->addColumn('action', function ($model) {
                            return
                                    '<a href="' . Route("admin-course-edit", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-edit"></i> Edit</a>' .
                                    '<a href="javascript:;" onclick="deleteCourse(this);" data-href="' . Route("admin-course-delete", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-trash"></i> Delete</a>'.
                                    '<a href="' . Route("admin-course-question-answer", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-eye"></i> Question & Answer</a>' ;
                        })
                        ->rawColumns(['image','featured','status', 'action'])
                        ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index() {
        return view('admin::course.list');
    }

    //*** GET Request
    public function create() {
        return view('admin::course.add');
    }

    //*** POST Request
    public function store(Request $request) {
        //--- Validation Section
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'time' => 'required',
                    'image' => 'required|mimes:jpeg,jpg,png,svg',
                    'study_material' => 'required|mimes:zip,docx,pdf',
                    'price' => 'required|numeric',
                    'short_description' => 'required',
                    'long_description' => 'required',
                    'featured' => 'required',
                    'status' => 'required',
                        ]
        );
        $validator->after(function($validator) use($request) {
            
        });

        if ($validator->passes()) {
            $data = new Course();
            $input = $request->all();
            if ($file = $request->file('image')) {
                $name = time() . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/course');
                $file->move($destinationPath, $name);
                $input['image'] = $name;
            }
            if ($file = $request->file('study_material')) {
                $name = time() . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/course');
                $file->move($destinationPath, $name);
                $input['study_material'] = $name;
            }
            
            $data->fill($input)->save();

            return redirect()->route('admin-course-index')->with('success_msg', 'Course created successfully.');
        } else {
            return redirect()->back()->withErrors($validator)->withInput()->with('error_msg', 'Something went wrong please check your input.');
        }
    }

    //*** GET Request
    public function edit($id) {
        $data = Course::findOrFail($id);
        return view('admin::course.edit', compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id) {
        //--- Validation Section
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'time' => 'required',
                    'image' => 'nullable|mimes:jpeg,jpg,png,svg',
                    'study_material' => 'nullable|mimes:zip,docx,pdf| max:10000000000',
                    'price' => 'required|numeric',
                    'short_description' => 'required',
                    'long_description' => 'required',
                    'featured' => 'required',
                    'status' => 'required',
                        ]
        );
        $validator->after(function($validator) use($request) {
            
        });
        if ($validator->passes()) {
            //--- Logic Section
            $data = Course::findOrFail($id);
            $input = $request->all();
            if ($file = $request->file('image')) {
                $name = time() . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/course');
                $file->move($destinationPath, $name);
                $input['image'] = $name;
            }
            if ($file = $request->file('study_material')) {
                $name = time() . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/course');
                $file->move($destinationPath, $name);
                $input['study_material'] = $name;
            }

            $data->update($input);
            
            return redirect()->route('admin-course-index')->with('success_msg', 'Course updated successfully.');
        } else {
            return redirect()->back()->withErrors($validator)->withInput()->with('error_msg', 'Something went wrong please check your input.');
        }
        //--- Redirect Section Ends
    }

    //*** GET Request Status
    public function status($id1, $id2) {
        $data = Course::findOrFail($id1);
        $data->status = $id2;
        $data->update();
    }

    //*** GET Request Delete
    public function destroy($id) {
        $data = [];
        $model = Course::findOrFail($id);
        
        
        $model->delete();
        //--- Redirect Section
        $data['status'] = 200;
        $data['msg'] = 'Data Deleted Successfully.';
        return response()->json($data);
        //--- Redirect Section Ends
    }
    public function question_answer_datatables($id) {
        $datas = QuestionAnswer::where('course',$id)->orderBy('id', 'desc')->get();
        //--- Integrating This Collection Into Datatables
        return Datatables::of($datas)
                        ->addIndexColumn()
                        ->editColumn('question', function(QuestionAnswer $data) {
                            return strip_tags($data->question);
                        })
                        ->editColumn('status', function ($model) {
                            if ($model->status == '0') {
                                $status = '<span class="badge badge-warning"><i class="icofont-warning"></i>Inactive</span>';
                            } else if ($model->status == '1') {
                                $status = '<span class="badge badge-success"><i class="icofont-check"></i>Active</span>';
                            } else if ($model->status == '3') {
                                $status = '<span class="badge badge-danger"><i class="icofont-close"></i>Delete</span>';
                            }
                            return $status;
                        })
                        ->editColumn('course', function ($model) {
                            $course= Course::where('id',$model->course)->where('status','1')->first();
                            
                            
                            return !empty($course)?$course->name:'Not Available';
                        })
                        ->editColumn('created_at', function ($model) {
                                return (!empty($model->created_at)) ? \Carbon\Carbon::parse($model->created_at)->format('d-m-Y H:i A') : 'Not Found';
                        })
                        ->addColumn('action', function ($model) {
                            return
                                    '<a href="' . Route("admin-question-answer-edit", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-edit"></i> Edit</a>' .
                                    '<a href="javascript:;" onclick="deleteQuestionAnswer(this);" data-href="' . Route("admin-question-answer-delete", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-trash"></i> Delete</a>';
                        })
                        ->rawColumns(['photo', 'status', 'action'])
                        ->make(true); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function question_answer($id) {
        return view('admin::course.question_answer_list', compact('id'));
    }

}
