@extends('admin::layouts.main')
@section('content')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{route('admin-dashboard')}}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{Route('students')}}">Student</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span class="active">Add Student</span>
    </li>
</ul>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Add Student</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form method="post" action="{{route('student-add')}}" class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group {{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Student Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Student Name" name="full_name" value="{{ (old('full_name')!="") ? old('full_name') : '' }}"/>
                                    @if ($errors->has('full_name'))
                                       <span class="help-block"> {{ $errors->first('full_name') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('gurdian_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Gurdian Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Gurdian Name" name="gurdian_name" value="{{ (old('gurdian_name')!="") ? old('gurdian_name') : '' }}"/>
                                    @if ($errors->has('gurdian_name'))
                                       <span class="help-block"> {{ $errors->first('gurdian_name') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('father_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Father Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Father Name" name="father_name" value="{{ (old('father_name')!="") ? old('father_name') : '' }}"/>
                                    @if ($errors->has('father_name'))
                                       <span class="help-block"> {{ $errors->first('father_name') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('mother_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Mother Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Mother Name" name="mother_name" value="{{ (old('mother_name')!="") ? old('mother_name') : '' }}"/>
                                    @if ($errors->has('mother_name'))
                                       <span class="help-block"> {{ $errors->first('mother_name') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">DOB</label>
                            <div class="col-md-10">
                                <input type="date" class="form-control" placeholder="DOB" name="dob" value="{{ (old('dob')!="") ? old('dob') : '' }}"/>
                                    @if ($errors->has('dob'))
                                       <span class="help-block"> {{ $errors->first('dob') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Gender</label>
                            <div class="col-md-10">
                                <select name="gender" class="form-control">
                                    <option value="" class="option selected focus">Select Gender</option>
                                    <option value="Male" class="option" {{ (old('gender')!="") ? ('Male'==old('gender'))?'selected':'' : ''}}>Male</option>
                                    <option value="Female" class="option" {{ (old('gender')!="") ? ('Female'==old('gender'))?'selected':'' : ''}}>Female</option>
                                    <option value="Others" class="option" {{ (old('gender')!="") ? ('Others'==old('gender'))?'selected':'' : ''}}>Others</option>
                                </select>
                                @if ($errors->has('gender'))
                                   <span class="help-block"> {{ $errors->first('gender') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Category</label>
                            <div class="col-md-10">
                                <select name="category" class="form-control">
                                    <option value="" class="option selected focus">Select Category</option>
                                    <option value="General" class="option" {{ (old('category')!="") ? ('General'==old('category'))?'selected':'' : ''}}>General</option>
                                    <option value="SC" class="option" {{ (old('category')!="") ? ('SC'==old('category'))?'selected':'' : ''}}>SC</option>
                                    <option value="ST" class="option" {{ (old('category')!="") ? ('ST'==old('category'))?'selected':'' : ''}}>ST</option>
                                    <option value="OBC" class="option" {{ (old('category')!="") ? ('OBC'==old('category'))?'selected':'' : ''}}>OBC</option>
                                </select>
                                @if ($errors->has('category'))
                                   <span class="help-block"> {{ $errors->first('category') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{ (old('email')!="") ? old('email') : '' }}"/>
                                    @if ($errors->has('email'))
                                       <span class="help-block"> {{ $errors->first('email') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Phone</label>
                            <div class="col-md-10">
                                <input type="tel" class="form-control" placeholder="phone" name="phone" value="{{ (old('phone')!="") ? old('phone') : '' }}"/>
                                    @if ($errors->has('phone'))
                                       <span class="help-block"> {{ $errors->first('phone') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Address</label>
                            <div class="col-md-10">
                                <textarea class="form-control" placeholder="Address" name="address" id="address">{{ (old('address')!="") ? old('address') : '' }}</textarea>
                                    @if ($errors->has('address'))
                                       <span class="help-block"> {{ $errors->first('address') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('last_qualification') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Last Qualification</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Last Qualification" name="last_qualification" value="{{ (old('last_qualification')!="") ? old('last_qualification') : '' }}"/>
                                    @if ($errors->has('last_qualification'))
                                       <span class="help-block"> {{ $errors->first('last_qualification') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('specialization') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Specialization</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Specialization" name="specialization" value="{{ (old('specialization')!="") ? old('specialization') : '' }}"/>
                                    @if ($errors->has('specialization'))
                                       <span class="help-block"> {{ $errors->first('specialization') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('year_of_passing') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Year of Passing</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" placeholder="Year of Passing" name="year_of_passing" value="{{ (old('year_of_passing')!="") ? old('year_of_passing') : '' }}"/>
                                    @if ($errors->has('year_of_passing'))
                                       <span class="help-block"> {{ $errors->first('year_of_passing') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('school_college_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">School/college Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="School/college Name" name="school_college_name" value="{{ (old('school_college_name')!="") ? old('school_college_name') : '' }}"/>
                                    @if ($errors->has('school_college_name'))
                                       <span class="help-block"> {{ $errors->first('school_college_name') }} </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('marks') ? ' has-error' : '' }}">
                            <label class="control-label col-md-2">Percentage of Marks</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Percentage of Marks" name="marks" value="{{ (old('marks')!="") ? old('marks') : '' }}"/>
                                    @if ($errors->has('marks'))
                                       <span class="help-block"> {{ $errors->first('marks') }} </span>
                                    @endif
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="offset-md-3 col-md-9">
                                <a href="{{Route('students')}}" class="btn btn-primary">Cancel</a>
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