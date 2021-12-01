@extends('admin::layouts.main')

@section('content')

@php
use Illuminate\Support\Str;
@endphp
<div class="clearfix">
    <div class="dash-bottom-part">
        <div class="bottom-part-1">
            <div class="col-sm-12">
                <h1 class="dash_heading">DASHBOARD</h1>
                <div class="row">
                    
                    
                    <div class="col-lg-3 col-sm-6 col-cst-4">
                        <a href="{{route('students')}}">
                            <div class="inner-box d-flex align-items-center gradient-bg-1">
                                <div class="media justify-content-between align-items-center d-flex">
                                  	<div class="media-right">
                                        <i class="fa fa-users" style="font-size: 5em; color: #0088CC;" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-left">
                                        <h1>{{isset($total_student)?$total_student:'0'}}</h1>
                                        <h2>TOTAL STUDENT</h2>
                                    </div>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop