@extends('layouts.main')
@section('css')
<style>

</style>
@stop
@section('content')
<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>CERTICATE VERIFICATION</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>CERTICATE VERIFICATION</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->
<!--------------------------------Main content Start--------------------------->
<section class="main">
    <section class="exam-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 mb-3">
                    <div class="result-download">
                        <h2>Di Technical</h>
                            <h3>Certificate Verification</h3>
                    </div>
                    <form action="{{ route('verify-certificate-verification') }}" method="get" >
                        <input type="text" class="enroll form-control" name="enrollment_id" placeholder="Enrollment Number" required><br>
                        <span class="help-block" id="error-enrollment_id"></span>
                        <button class="btn btn-default btn-lg btn btn-success">SUBMIT</button>
                        
                    </form>
                    @if(isset($status))
                    <section class="status-show">
                        @if(!empty($assigncourse))
                        <h3>Registered Student Details</h3>
                        
                        <div style="width: 100%;">
                           <table class="status-show-table">
                              <tbody>
                                  <?php
                                    
                                    $user = App\Model\UserMaster::where('id','=',$assigncourse->user_id)->first();
                                    ?>
                                <tr>
                  	                <td class="name-td">Student Name:</td>
                                    <td>{{$user->full_name}}</td>
                                    <th rowspan="4">
                                    <img src="{{($user->image!='')? URL::asset('public/uploads/user').'/'.$user->image:URL::asset('public/frontend/images/profile.jpg') }}" style="float: right;width: 115px !important; height: 135px !important; margin-left:55px;"><br/>
                					</th>
                                </tr>
                                <tr>
                                    <td class="name-td">Enrollment No:</td>
                                    <td>{{$assigncourse->enrollment_id}}</td>
                                </tr>
                                <tr>
                                    <td class="name-td">Course Name:</td>
                                    <td>{{$assigncourse->course->name}}</td>
                                </tr>
                                <tr>
                                    <td class="name-td">Course Status:</td>
                                    <td>
                                        @if($assigncourse->status=='0')
                                        <span class="badge badge-warning"><i class="icofont-warning"></i>Persuing</span>
                                        @else
                                        <span class="badge badge-success"><i class="icofont-check"></i>Completed</span>
                                        @endif
                                    </td>
                                </tr>
                              </tbody> 
                           </table>       
                        </div>
                        @else
                        <h3>No Student Certificate Details Found!</h3>
                        @endif
                    </section>
                    @endif
                    
                </div>
                <div class="col-sm-5">
                    <div class="side-bar-page">
                        <div class="enqir-sec">
                            <h3 class="quick-title-sec">Quick Enquiry</h3>
                            <form class="quick-enquiry-form" id="enquiry-form" action="{{route('post-enquiry')}}" method="POST">
                                @csrf
                                <div class="form-group q-grp">
                                    <label class="quick-label">Full Name*</label>
                                    <input type="text" name="name" class="form-control quick-input" placeholder="Enter Your Full Name.." > 
                                    <span class="help-block" id="error-name"></span>
                                </div>
                                <div class="form-group q-grp">
                                    <label class="quick-label">Contact No*</label>
                                    <input type="tel" name="phone" class="form-control quick-input" placeholder="Enter Your Contact No.." >	
                                    <span class="help-block" id="error-phone"></span>
                                </div>
                                <div class="form-group q-grp">
                                    <label class="quick-label">Email Id*</label>
                                    <input type="email" name="email" class="form-control quick-input" placeholder="Enter Your Email Id..">	
                                    <span class="help-block" id="error-email"></span>
                                </div>
                                <div class="form-group q-grp">
                                    <label class="quick-label">Address*</label>
                                    <textarea name="address" cols="20" rows="2" class="form-control quick-textaeea" placeholder="Address"></textarea>	
                                    <span class="help-block" id="error-address"></span>
                                </div>
                                <div class="form-group q-grp">
                                    <label class="quick-label">Message*</label>
                                    <textarea name="message" cols="20" rows="2" class="form-control quick-textaeea" placeholder="Message"></textarea>	
                                    <span class="help-block" id="error-message"></span>
                                </div>
                                <button type="submit" class="quick-submit">Submit</button>
                            </form>
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

@stop