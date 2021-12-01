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
                        <h2>registration process</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>registration process</span></li>
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
                <div class="col-sm-7">
                    <div class="exam-sec">
                        <div class="Director-Message">
                            <h3>Registration Process</h3>		
                        </div>
                        <p>DI TECHNICAL has introduced both online and offline Registration system. The New Students can Apply for Registration at Authorized learning center or online.</p>

                        <div class="Director-Message">
                            <h3>Examination Types</h3>		
                        </div>

                        <ul class="exams-ul">
                            <li>Single Examination System (SES): For the courses having duration below than Six Months.</li>
                            <li>Module wise Examination System (MES): For the courses having duration equal to or above than Six Months. The details of the module papers, marks can be collected at your Authorized Learing Center.</li>
                        </ul>
                        <div class="Director-Message">
                            <h3>Examination Procedure</h3>		
                        </div>

                        <ul class="exams-ul">
                            <li>Examination will be conducted all around the year at your DI TECHNIAL Authorized Learning Center.</li>
                            <li>The pattern of exam will be of objective type.</li>
                            <li>Details i.e. dates of examination, timings/session will be according to the time when the examination form was filled up. A login for 10 days would be open for ALC after filling examination form for the students to commence for the examinations. After that the student has to fill the examination form again with exam fees.</li>
                            <li>The duration of examination will be of 60 Minutes.</li>
                            <li>Theory examinations will comprise of 35 questions of 2 mark each. There is no negative marking.</li>
                            <li>Practical Exam will carry total 30 Marks, 20 Marks for Lab Practice &amp; 10 Marks for Viva.</li>
                        </ul>
                    </div>
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