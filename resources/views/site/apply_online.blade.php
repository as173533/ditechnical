@extends('layouts.main')
@section('css')
<style>

</style>
@stop
@section('content')
<!--------------------------------Main content Start--------------------------->
<section class="main-content">
    <section class="login-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="login-box">
                        <div class="form-header">
                            <h4>Apply Form For Affiliation</h4>
                        </div> 
                        <form class="student-log-reg-form" id="franchise-request-form" action="{{route('apply-online')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" placeholder="Enter Your Full Name*" name="name" id="" >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <input type="email" class="form-control" placeholder="Enter Your Email*" name="email" id="" >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <input type="tel" class="form-control" placeholder="Enter Your Contact No.*" name="phone" id="" >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"> 
                                        <textarea class="form-control" placeholder="Address*" name="address"></textarea>
                                        <span class="help-block"></span>
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