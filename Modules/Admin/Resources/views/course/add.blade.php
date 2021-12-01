@extends('admin::layouts.main')
@section('content')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{route('admin-dashboard')}}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{Route('admin-course-index')}}">Course</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span class="active">Add </span>
    </li>
</ul>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Add Course</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form method="post" action="{{route('admin-course-store')}}" class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Name<span class="required">*</span></label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ (old('name')!="") ? old('name') : ''}}"/>
                                @if ($errors->has('name'))
                                <span class="help-block"> {{ $errors->first('name') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Time(Days)<span class="required">*</span></label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" placeholder="Time" name="time" value="{{ (old('time')!="") ? old('time') : ''}}"/>
                                @if ($errors->has('time'))
                                <span class="help-block"> {{ $errors->first('time') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <img id="blah" src="" style="max-width: 400;max-height: 200px">
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">{{ __('Current Featured Image') }}</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control"  name="image" onchange="readURL(this);">
                                @if ($errors->has('image'))
                                <span class="help-block"> {{ $errors->first('image') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('study_material') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">{{ __('Study material') }}</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control"  name="study_material">
                                @if ($errors->has('study_material'))
                                <span class="help-block"> {{ $errors->first('study_material') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Price<span class="required">*</span></label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" placeholder="Price" name="price" value="{{ (old('price')!="") ? old('price') : ''}}"/>
                                @if ($errors->has('price'))
                                <span class="help-block"> {{ $errors->first('price') }} </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Short Description<span class="required">*</span></label>
                            <div class="col-md-10">
                                <textarea class="form-control" placeholder="Short Description" name="short_description"  id="body">{{ (old('short_description')!="") ? old('short_description') : '' }}</textarea>
                                @if ($errors->has('short_description'))
                                <span class="help-block"> {{ $errors->first('short_description') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('long_description') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Long Description<span class="required">*</span></label>
                            <div class="col-md-10">
                                <textarea class="form-control ckeditor" placeholder="Long Description" name="long_description"  id="body">{{ (old('long_description')!="") ? old('long_description') : '' }}</textarea>
                                @if ($errors->has('long_description'))
                                <span class="help-block"> {{ $errors->first('long_description') }} </span>
                                @endif
                            </div>
                        </div>
                        



                        <div class="form-group {{ $errors->has('featured') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Featured <span class="required">*</span></label>
                            <div class="col-md-10">
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input type="radio" name="featured" value="1"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="featured" value="0"> No
                                    </label>
                                    @if ($errors->has('featured'))
                                    <div class="help-block">{{ $errors->first('featured') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3">Status <span class="required">*</span></label>
                            <div class="col-md-10">
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input type="radio" name="status" value="1"> Active
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="status" value="0"> Inactive
                                    </label>
                                    @if ($errors->has('status'))
                                    <div class="help-block">{{ $errors->first('status') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="offset-md-3 col-md-9">
                                <a href="{{Route('admin-course-index')}}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection