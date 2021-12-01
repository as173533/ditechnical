@extends('admin::layouts.main')
@section('content')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{route('admin-dashboard')}}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li> <a href="{{Route('admin-student-exam-answer-index')}}">Exam</a>
        <i class="fa fa-circle"></i>
    </li>
    <li> <span class="active">Edit</span>
    </li>
</ul>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Update Exam Answers of student {{$model->user->full_name}} course {{$model->course->name}}</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form method="post" action="{{route('student-exam-answer-edit',['id'=>$id])}}" class="form-horizontal" enctype="multipart/form-data">
                    @method('PUT')
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{ $model->id }}">
                    <div class="form-body">
                        @if($model->status=='1')
                        <div class="form-group {{ $errors->has('theory') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Theory(70)</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Theory" name="theory" value="{{ (old('theory')!="") ? old('theory') : $model->theory}}"/>
                                @if ($errors->has('theory'))
                                <span class="help-block"> {{ $errors->first('theory') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('practical') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Practical(20)</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Theory" name="practical" value="{{ (old('practical')!="") ? old('practical') : $model->practical}}"/>
                                @if ($errors->has('practical'))
                                <span class="help-block"> {{ $errors->first('practical') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('viva') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Viva(10)</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Viva" name="viva" value="{{ (old('viva')!="") ? old('viva') : $model->viva}}"/>
                                @if ($errors->has('viva'))
                                <span class="help-block"> {{ $errors->first('viva') }} </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        @else
                        <div class="form-group {{ $errors->has('supply_exam_fees') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Supply Exam Fees <span class="required">*</span></label>
                            <div class="col-md-10">
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input type="radio" name="supply_exam_fees" value="1" {{ ($model->supply_exam_fees == '1') ? 'checked' : '' }}> Paid
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="supply_exam_fees" value="0" {{ ($model->supply_exam_fees == '0') ? 'checked' : '' }}> Not Paid
                                    </label>
                                    @if ($errors->has('supply_exam_fees'))
                                    <div class="help-block">{{ $errors->first('supply_exam_fees') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{Route('students')}}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn green"> Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection