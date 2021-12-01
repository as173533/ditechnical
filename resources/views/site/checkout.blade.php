@extends('layouts.main') 
@section('css')
<style>

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
                        <h2>Checkout</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>Checkout</span></li>
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
    <section class="checkout pt-5 pb-5"> 
        <div class="container">
            <form id="check-out-form" action="{{Route('checkout',['id'=>base64_encode($course->id)])}}" method="POST" class="">
                @csrf
                <input type="hidden" name="razorpay_key" id="razorpay_key" value="{{$razorpay->value}}"/>
                <input type="hidden" name="amount" id="amount" value="{{$course->price.'00'}}"/>
                <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}"/>
                <div class="checkout-bg-outline">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="shippings">    
                                <h2 class="bill-address">Billing Information :</h2>  
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Your Name" type="text" name="full_name" id="full_name" value="{{Auth()->guard('frontend')->user()->full_name}}">
                                            <div class="help-block" id="error-full_name"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email Address" type="email" name="email" id="email" value="{{Auth()->guard('frontend')->user()->email}}">
                                            <div class="help-block" id="error-email"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone Number" type="tel" name="phone" id="phone" value="{{isset(Auth()->guard('frontend')->user()->phone)?Auth()->guard('frontend')->user()->phone:''}}">
                                            <div class="help-block" id="error-phone"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 billing">
                            <div class="Yorder">
                                <h4 class="bill-address-you">Your order</h4>
                                <table style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="product-name">COURSE DETAILS</th>
                                            <th class="product-total">SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="check-td">Course Name:<br>{{$course->name}}</td>
                                            <td class="check-tds"><i class="fa fa-inr" aria-hidden="true"></i>{{$course->price}}</td>
                                        </tr>
                                        <tr>
                                            <td class="total">TOTAL</td>
                                            <td class="total-amount"><i class="fa fa-inr" aria-hidden="true"></i>{{$course->price}}</td>
                                        </tr>

                                    </tbody>
                                </table><br>
                                <div>
                                    <input type="radio" name="dbt" value="cd" checked=""> Razorpay
                                </div>
                                <div class="place-button text-center">
                                    
                                    <a href="javascript:void(0)"><button type="submit" class="btn place-order" id="checkout_submit">Place Order</button>
                                        </a>
                                </div>

                            </div><!-- Yorder -->
                        </div>  
                    </div>
                </div>
            </form>  
        </div>     
    </section> 
</section>
<!----------------------------------Main content End--------------------------->



<!--End Checkout-->




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
        var full_name = $('#full_name').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var course_id = $('#course_id').val();
        var amount = $('#amount').val();
        ajaxindicatorstart();
        $.ajax({
            method: 'post',
            url: "{!!route('dopayment')!!}",
            data: {
                "_token": "{{ csrf_token() }}",
                "razorpay_payment_id": transaction.razorpay_payment_id,
                "full_name": full_name,
                "phone": phone,
                "email": email,
                "course_id": course_id,
                "amount": amount,
            },
            complete: function (r) {
                ajaxindicatorstop();
//                success_msg(r.msg, 5000);
                window.location.href = "{{route('user-course')}}";
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
            description: 'Course Booking',
            handler: demoSuccessHandler
        }
        window.r = new Razorpay(options);
        r.open()
    }
</script>

@endsection