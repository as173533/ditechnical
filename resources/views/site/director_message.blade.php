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
                        <h2>Director Message</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>Director Message</span></li>
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
    <section class="director">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="Director-Message">
                        <h3>Director’s Message</h3>
                        <h5>Dear Visitors/Learners,</h5>
                        <p>I am very glad to invite you to our family of DI TECHNIAL, The institute of computer and management is a vocational training program run by Pankaj Technological Systems Pvt. Ltd. New Delhi.

We introduce ourselves as national level organization in the field of IT Developments. Today information technology are being used in each and every growing industry for better performance, reliability and manage ability for this purpose Antarrashtriya computer Shakshrta Mission has clear concept and plan to provide suitable environment with quality education in IT field, both across this major cities and rural areas. To improve the IT skill of the new generation Antrarrashtriya Computer Shakashrta Mission has well planned curriculum keeping in view today’s competitive scenario also.

For this very propose Antrrashtriya Computer Shakshrta Mission is successfully imparting. It education and IT enabled services through a wide network of 200+ authorized learning centers. We are introducing short term management skill development programmer and mobile repairing courses also.

I has come up with the world class certification system, which is completely online and professionally updates with latest technologies. This initiative will enable us to deliver education to those leaving in smaller towns and backward reasons. The rapidly growing industry need trained human power and new imitative is a step towards meeting this requirement.

Presently, we implemented some unique technical education courses. Our goal is to educate the new generation not to earn money but moral humanity. Lastly, I believe the Antarrashtriya Computer Shakshrta Mission proveds a unique educational experience because the syllabus is not just leaning but quality education enriched with innovative thinking and a value based lifestyle.

I do hope you will join with us must be a part of global it movement and ensure about your success.</p>
                    </div>
                    <div class="signature-dir float-right">
                        <h4>Mr.Anil Kumar</h4>
                        <h6>(Director)</h6>
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