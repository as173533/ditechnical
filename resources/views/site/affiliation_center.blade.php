@extends('layouts.main')
@section('css')
<style>

</style>
@stop
@section('content')
<!--------------------breadcrumb ---------------------->
<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>Affiliation Center</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>Affiliation Center</span></li>
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
                            <h3>No centers available right now</h3>

                        </div>
                        <!--<p>DITECHNIAL has introduced both online and offline examination system. The enrolled students can apply for examination at ALC after completion of course/module.</p>-->
                        <!--<p>DITECHNIAL has introduced both online and offline examination system. The enrolled students can apply for examination at ALC after completion of course/module.</p>-->
                        <!--<p>DITECHNIAL has introduced both online and offline examination system. The enrolled students can apply for examination at ALC after completion of course/module.</p>-->

                    </div>
                    <!--<div style="overflow: auto;">-->
                    <!--    <table class="table table-striped table-bordered" style="text-transform: uppercase;">-->
                    <!--        <tbody>  -->


                    <!--            <tr>-->
                    <!--                <td><b>Center Code:</b></td>-->
                    <!--                <td>UPALC001</td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>Center Name:</b></td>-->
                    <!--                <td>LBS ADVANCED TRAINING INSTITUTE </td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>Center Head Name:</b></td>-->
                    <!--                <td>Mrs. Geeta </td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>Contact NO:</b></td>-->
                    <!--                <td>9457570001</td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>City:</b></td>-->
                    <!--                <td>Khekra </td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>District:</b></td>-->
                    <!--                <td>Baghpat </td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><b>State:</b></td>-->
                    <!--                <td>Uttar Pradesh</td>-->
                    <!--            </tr>-->
                    <!--            <tr></tr>-->

                    <!--        </tbody>  -->
                    <!--    </table>-->
                    <!--</div>-->
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