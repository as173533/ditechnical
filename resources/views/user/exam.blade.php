@extends('layouts.main')
@section('css')

@stop
@section('content')

<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>Examination</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>Examination</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->

<section class="main-content">
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                @include('partials.left')
                <div class="col-md-9 col-sm-9 tab_dsh_2">
                    <div class="dash-right-sec">
                        <div class="successfull">
                            <div class="container">
                             
                                
                                
                                <div class="message">

                                    <?php
                                    $user_id = Auth()->guard('frontend')->user()->id;
                                    $running_course = $id;
                                    $assign_course = App\Model\AssignCourse::where('user_id', $user_id)->where('course_id', $id)->first();
                                    $course = App\Model\Course::where('id', $id)->first();
                                    $purchase_date = $assign_course->created_at;
                                    $todayDate = date('Y-m-d');
                                    $futureDate = date('Y-m-d', strtotime($purchase_date . '+' . $course->time . 'days'));
                                    ?>
                                    @if(empty($model))
                                    <?php
                                    if ($todayDate >= $futureDate) {
                                        ?>
                                        <h1 Class="demo">You can appear in the exam now. <span class="blink_me"><a href="javascript:void(0);" onclick="newWindow();"style="color:#fff;">Click Here</a></span> to start the exam.</h1> 
                                        <?php
                                    } else {
                                        $date1_ts = strtotime($todayDate);
                                        $date2_ts = strtotime($futureDate);
                                        $diff = $date2_ts - $date1_ts;
                                        ?>
                                        <h1 Class="demo"><span class="blink_me">{{round($diff / 86400)}}</span> days left to start the exam.</h1>
                                        <?php
                                    }
                                    ?>
                                    @else
                                    <?php
                                    $nextexamdate = date('Y-m-d', strtotime($model->next_exam_date));
                                    ?>
                                    @if($model->status==0)
                                    @if($model->supply_exam_fees=='0')
                                    <form id="supply-exam-form" action="{{Route('checkout',['id'=>$model->id])}}" method="POST" class="">
                                        @csrf
                                        <?php
                                        $price = App\Model\Settings::where('slug', 'supply_exam_fees')->first();
                                        ?>
                                        <input type="hidden" name="razorpay_key" id="razorpay_key" value="{{$razorpay->value}}"/>
                                        <input type="hidden" name="amount" id="amount" value="{{$price->value.'00'}}"/>
                                        <input type="hidden" name="course_id" id="course_id" value="{{$id}}"/>
                                        <h1 Class="demo">Pay supply Exam Fees. <span class="blink_me"><a href="javascript:void(0);" onclick="dopayment('100');"style="color:#000;">Click Here</a></span> to pay fees.</h1> 

                                    </form>
                                    @else
                                    <h1 Class="demo">Exam Fee Pay Successfully.</h1>
                                    @endif
                                    <?php
                                    if ($todayDate >= $nextexamdate) {
                                        ?>
                                        <h1 Class="demo">You can appear in the exam now. <span class="blink_me"><a href="javascript:void(0);" onclick="newWindow();"style="color:#fff;">Click Here</a></span> to start the exam.</h1> 
                                        <?php
                                    } else {
                                        $date1_ts = strtotime($todayDate);
                                        $date2_ts = strtotime($nextexamdate);
                                        $diff = $date2_ts - $date1_ts;
                                        ?>
                                        <h1 Class="demo"><span class="blink_me">{{round($diff / 86400)}}</span> days left to re-appear in the exam.</h1>
                                        <?php
                                    }
                                    ?>
                                    @else
                                    <h1 Class="demo">You have successfully cleared this course with the theory marks {{$model->theory}}</h1>
                                    @endif



                                    @endif


                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</section>
<!-- END MAIN CONTENT -->
@stop
@section('js')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
                                            $('#rzp-footer-form').submit(function (e) {
//        var amount = $('#amount').val();
////        alert(amount);
//        var button = $(this).find('button');
//        var parent = $(this);
//        button.attr('disabled', 'true').addClass('d-none');
//        $.ajax({
//            method: 'post',
//            url: this.action,
//            data: $(this).serialize(),
//            complete: function (r) {
//                console.log('complete');
//                console.log(r);
//            }
//        })
                                                return false;
                                            })
</script>

<script>
    function padStart(str) {
        return ('0' + str).slice(-2)
    }

    function demoSuccessHandler(transaction) {
        // You can write success code here. If you want to store some data in database.
        var button = $(this).find('button');
        var parent = $(this);
        $('.button').addClass('d-none');
        $('#payment-success').removeClass('d-none');
        $("#paymentDetail").removeAttr('style');
        $('#paymentID').text(transaction.razorpay_payment_id);
        var paymentDate = new Date();
        $('#paymentDate').text(
                padStart(paymentDate.getDate()) + '.' + padStart(paymentDate.getMonth() + 1) + '.' + paymentDate.getFullYear() + ' ' + padStart(paymentDate.getHours()) + ':' + padStart(paymentDate.getMinutes())
                );

        var csrf_token = $('input[name=_token]').val();
        var course_id = $('#course_id').val();
        var amount = $('#amount').val();
        ajaxindicatorstart();
        $.ajax({
            method: 'post',
            url: "{{route('pay-supply-fee',['id'=>$id])}}",
            data: {
                "_token": "{{ csrf_token() }}",
                "razorpay_payment_id": transaction.razorpay_payment_id,
                "course_id": course_id,
                "amount": amount,
            },
            complete: function (r) {
                ajaxindicatorstop();
//                success_msg(r.msg, 5000);
                location.reload();
            }
        })
    }
</script>

<script>
    function dopayment(amounts) {


        var razorpay_key = $('#razorpay_key').val();
        var amount = $('#amount').val();
//        alert(amount);
        var options = {
            key: razorpay_key,
            amount: amount,
            status: "paid",
            description: 'Supply Exam Fees',
            handler: demoSuccessHandler
        }
        window.r = new Razorpay(options);
        r.open()
    }
</script>
<script>
    function newWindow() {

        var params = 'width=' + screen.width + ', height=' + screen.height
                + ', top=0, left=0'
                + ',toolbar=no,scrollbars=no,status=no,menubar=no,resizable=no,dialog=no';
        myWindow = window.open("{{route('give-exam',['id'=>base64_encode($id)])}}", 'Give Exam', params);
// myWindow.close(); 
// window.close();
    }
</script>


@stop