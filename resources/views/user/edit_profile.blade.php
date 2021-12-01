@extends('layouts.main')
@section('css')
<style>
    .help-block{
        color:red;
    }
</style>
@endsection
@section('content')

<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>MY PROFILE</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>MY PROFILE</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->

<!--------------------------------Main content Start--------------------------->
<section class="main-content">
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                @include('partials.left')
                <div class="col-md-9 col-sm-9 tab_dsh_2">
                    <div class="dash-right-sec">
                        <div class="successfull">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="user-profile-details">
                                            <div class="account-info">
                                                <div class="header-area">
                                                    <h4 class="title">MY PROFILE</h4>
                                                </div>
                                                <div class="edit-info-area">
                                                    <div class="body">
                                                        <div class="edit-info-area">
                                                            <div class="body">
                                                                <div class="edit-info-area-form">
                                                                    <form method="post" class="form" action="{{route('post-myprofile')}}" id="customer-editprofile-form" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="upload-images">
                                                                                    <img id="blah" src="{{($model->image!='')? URL::asset('public/uploads/user').'/'.$model->image:URL::asset('public/frontend/images/profile.jpg') }}" alt="profile">
                                                                                </div>  
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <input name="full_name" type="text" class="input-field" placeholder="Full Name"  value="{{isset($model->full_name)?$model->full_name:''}}" readonly>
                                                                                <span class="help-block" id="err-full_name"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input class="input-field" name="image" type="file" onchange="readURL(this);" accept="image/png, image/jpeg, image/jpg">
                                                                                <span class="help-block" id="err-image"></span> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="input-field" placeholder="Gurdian Name" name="gurdian_name" value="{{isset($model->gurdian_name)?$model->gurdian_name:''}}"/>
                                                                                <span class="help-block" id="err-gurdian_name"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input type="date" class="input-field" placeholder="DOB" name="dob" value="{{isset($model->dob)?$model->dob:''}}"/>
                                                                                <span class="help-block" id="err-dob"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <select name="gender" class="input-field">
                                                                                    <option value="" class="option selected focus">Select Gender</option>
                                                                                    <option value="Male" class="option" {{ (old('gender')!="") ? ('Male'==old('gender'))?'selected':'' : 'Male'==$model->gender?'selected':''}}>Male</option>
                                                                                    <option value="Female" class="option" {{ (old('gender')!="") ? ('Female'==old('gender'))?'selected':'' : 'Female'==$model->gender?'selected':''}}>Female</option>
                                                                                    <option value="Others" class="option" {{ (old('gender')!="") ? ('Others'==old('gender'))?'selected':'' : 'Others'==$model->gender?'selected':''}}>Others</option>
                                                                                </select>
                                                                                <span class="help-block" id="err-gender"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <select name="category" class="input-field">
                                                                                    <option value="" class="option selected focus">Select Category</option>
                                                                                    <option value="General" class="option" {{ (old('gender')!="") ? ('General'==old('category'))?'selected':'' : 'General'==$model->category?'selected':''}}>General</option>
                                                                                    <option value="SC" class="option" {{ (old('gender')!="") ? ('SC'==old('category'))?'selected':'' : 'SC'==$model->category?'selected':''}}>SC</option>
                                                                                    <option value="ST" class="option" {{ (old('gender')!="") ? ('ST'==old('category'))?'selected':'' : 'ST'==$model->category?'selected':''}}>ST</option>
                                                                                    <option value="OBC" class="option" {{ (old('gender')!="") ? ('OBC'==old('category'))?'selected':'' : 'OBC'==$model->category?'selected':''}}>OBC</option>
                                                                                </select>
                                                                                <span class="help-block" id="err-category"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <input name="email" type="email" class="input-field" placeholder="Email Id" value="{{$model->email}}">
                                                                                <span class="help-block" id="err-email"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input name="phone" type="tel" class="input-field" placeholder="Phone Number" value="{{$model->phone}}">
                                                                                <span class="help-block" id="err-phone"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <textarea class="input-field" placeholder="Address" name="address" id="address" cols="1">{{ (old('address')!="") ? old('address') : $model->address }}</textarea>
                                                                                <span class="help-block" id="err-address"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="input-field" placeholder="Last Qualification" name="last_qualification" value="{{ (old('last_qualification')!="") ? old('last_qualification') : $model->last_qualification }}"/>
                                                                                <span class="help-block" id="err-last_qualification"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="input-field" placeholder="Specialization" name="specialization" value="{{ (old('specialization')!="") ? old('specialization') : $model->specialization }}"/>
                                                                                <span class="help-block" id="err-specialization"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input type="number" class="input-field" placeholder="Year of Passing" name="year_of_passing" value="{{ (old('year_of_passing')!="") ? old('year_of_passing') : $model->year_of_passing }}"/>
                                                                                <span class="help-block" id="err-year_of_passing"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="input-field" placeholder="School/college Name" name="school_college_name" value="{{ (old('school_college_name')!="") ? old('school_college_name') : $model->school_college_name }}"/>
                                                                                <span class="help-block" id="err-school_college_name"></span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="input-field" placeholder="Percentage of Marks" name="marks" value="{{ (old('marks')!="") ? old('marks') : $model->marks }}"/>
                                                                                <span class="help-block" id="err-marks"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-links">
                                                                            <button class="submit-btn" type="submit">Save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="header-area mt-4">
                                                            <h4 class="title">CHANGE PASSWORD</h4>
                                                        </div>

                                                        <div class="edit-info-area-form">
                                                            <form method="post" class="form" action="{{route('post-reset-password')}}" id="reset-password-frm">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <input name="old_password" type="password" class="input-field" placeholder="Old Password" >
                                                                        <span class="help-block" id="err-old_password"></span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <input name="password" type="password" class="input-field" placeholder="New Password"  >
                                                                        <span class="help-block" id="err-password"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <input name="retype_password" type="password" class="input-field" placeholder="Confirm Password"  >
                                                                        <span class="help-block" id="err-retype_password"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-links">
                                                                    <button class="submit-btn" type="submit">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</section>
<!----------------------------------Main content End--------------------------->

@stop
@section('js')

@endsection



