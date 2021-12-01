<?php

$PAYU_BASE_URL = $BASE_URL;
$action = '';
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted = array();
$posted = array(
    'key' => $MERCHANT_KEY,
    'txnid' => $txnid,
    'amount' => 100,
    'firstname' => 'Akash Sarkar',
    'email' => 'albert@yopmail.com',
    'productinfo' => 'Registration fee',
    'surl' => 'http://ditechnical.in',
    'furl' => 'http://ditechnical.in',
    'service_provider' => 'payu_paisa',
);

if (empty($posted['txnid'])) {
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted['txnid'];
}
$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
    foreach ($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
} elseif (!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}
?>
@extends('layouts.main') 
@section('css')
<style>
    .form-control {
        height: 42px;
    }
</style>
@endsection
@section('content')

<!--------------------------------Main content Start--------------------------->
<section class="main-content">
    <section class="login-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="login-box">
                        <div class="form-header">
                            <h4>Create An Account</h4>
                        </div> 
                        <form id="signup-form" action="{{ Route('signup') }}" method="POST" class="student-log-reg-form">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Full Name*" name="full_name" id="" >
                                        <span class="help-block" id="error-full_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Gurdian Name</label> 
                                        <input type="text" class="form-control" placeholder="Gurdian Name" name="gurdian_name" value=""/>
                                        <span class="help-block" id="error-gurdian_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Father Name</label> 
                                        <input type="text" class="form-control" placeholder="Father Name" name="father_name" value=""/>
                                        <span class="help-block" id="error-father_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Mother Name</label> 
                                        <input type="text" class="form-control" placeholder="Mother Name" name="mother_name" value=""/>
                                        <span class="help-block" id="error-mother_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Profile Picture</label>
                                        <input class="form-control" name="image" type="file" onchange="readURL(this);" accept="image/png, image/jpeg, image/jpg">
                                        <span class="help-block" id="error-image"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Date Of Birth</label> 
                                        <input type="date" class="form-control" placeholder="DOB" name="dob" value="{{ (old('dob')!="") ? old('dob') : '' }}"/>
                                        <span class="help-block" id="error-dob"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Category</label> 
                                        <select name="category" class="form-control">
                                            <option value="" class="option selected focus">Select Category</option>
                                            <option value="General" class="option" {{ (old('gender')!="") ? ('General'==old('category'))?'selected':'' : ''}}>General</option>
                                            <option value="SC" class="option" {{ (old('gender')!="") ? ('SC'==old('category'))?'selected':'' : ''}}>SC</option>
                                            <option value="ST" class="option" {{ (old('gender')!="") ? ('ST'==old('category'))?'selected':'' : ''}}>ST</option>
                                            <option value="OBC" class="option" {{ (old('gender')!="") ? ('OBC'==old('category'))?'selected':'' : ''}}>OBC</option>
                                        </select>
                                        <span class="help-block" id="error-category"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="" class="option selected focus">Select Gender</option>
                                            <option value="Male" class="option" {{ (old('gender')!="") ? ('Male'==old('gender'))?'selected':'' : ''}}>Male</option>
                                            <option value="Female" class="option" {{ (old('gender')!="") ? ('Female'==old('gender'))?'selected':'' : ''}}>Female</option>
                                            <option value="Others" class="option" {{ (old('gender')!="") ? ('Others'==old('gender'))?'selected':'' : ''}}>Others</option>
                                        </select>
                                        <span class="help-block" id="error-gender"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Email</label> 
                                        <input type="email" class="form-control" placeholder="Enter Your Email*" name="email" id="" >
                                        <span class="help-block" id="error-email"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Contact No.</label>
                                        <input type="tel" class="form-control" placeholder="Enter Your Contact No.*" name="phone" id="" >
                                        <span class="help-block" id="error-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Address</label> 
                                        <textarea class="form-control" placeholder="Address" name="address" id="address">{{ (old('address')!="") ? old('address') : '' }}</textarea>
                                        <span class="help-block" id="error-address"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">Last Qualification</label> 
                                        <input type="text" class="form-control" placeholder="Last Qualification" name="last_qualification" value="{{ (old('last_qualification')!="") ? old('last_qualification') : '' }}"/>
                                        <span class="help-block" id="error-last_qualification"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Specialization</label>
                                        <input type="text" class="form-control" placeholder="Specialization" name="specialization" value="{{ (old('specialization')!="") ? old('specialization') : '' }}"/>
                                        <span class="help-block" id="error-specialization"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Year Of Passing</label>
                                        <input type="number" class="form-control" placeholder="Year of Passing" name="year_of_passing" value="{{ (old('year_of_passing')!="") ? old('year_of_passing') : '' }}"/>
                                        <span class="help-block" id="error-year_of_passing"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="" class="signup-label">School/College Name</label> 
                                        <input type="text" class="form-control" placeholder="School/college Name" name="school_college_name" value="{{ (old('school_college_name')!="") ? old('school_college_name') : '' }}"/>
                                        <span class="help-block" id="error-school_college_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Percentage of Marks</label> 
                                        <input type="text" class="form-control" placeholder="Percentage of Marks" name="marks" value="{{ (old('marks')!="") ? old('marks') : '' }}"/>
                                        <span class="help-block" id="error-marks"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">New Password</label>
                                        <input type="password" class="form-control" placeholder="Enter New Password*" name="password" id="" >
                                        <span class="help-block" id="error-password"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <label for="" class="signup-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Confirm Password*" name="confirm_password" id="" >
                                        <span class="help-block" id="error-confirm_password"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center"> 
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="<?php echo $action; ?>" method="post" name="payuForm">
                            @csrf
                            <input type="hidden" name="key"  value="<?php echo $MERCHANT_KEY ?>" />
                            <input type="hidden" name="hash" id="hash" value="<?php echo $hash ?>"/>
                            <input type="hidden" name="txnid" id="txnid" value="<?php echo $txnid ?>" />
                            <input type="hidden" name="amount" value="100" /><br />
                            <input type="hidden" name="firstname" id="firstname" value="Akash Sarkar" />
                            <input type="hidden" name="email" id="email" value="albert@yopmail.com" />
                            <input type="hidden" name="phone" id="phone" value=""/>
                            <input type="hidden" name="productinfo" value="Registration fee">
                            <input type="hidden" name="surl" id="surl" value="" />
                            <input type="hidden" name="furl" id="furl" value="" />
                            <input type="hidden" name="service_provider" value="payu_paisa" />
                            <?php if (!$hash) { ?>
                                <input type="submit" value="Submit" />
                            <?php } ?>
                        </form>

                        <div class="form-footer">
                            <p>Already have an account? <a href="{{route('login')}}">Login Here</a></p>
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
<script>

    function submitPayuForm() {
        var hash = $('input[name=hash]').val();
        if (hash == '') {
            return;
        }
        var payuForm = document.forms.payuForm;
        payuForm.submit();
    }
</script>

@endsection