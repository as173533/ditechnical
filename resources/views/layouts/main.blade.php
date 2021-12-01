@php
use App\Model\Cms;
$meta_title=Cms::where('slug','=','meta_title')->first();
$meta_keyword=Cms::where('slug','=','meta_keyword')->first();
$meta_description=Cms::where('slug','=','meta_description')->first();

$og_title=Cms::where('slug','=','og_title')->first();
$og_image=Cms::where('slug','=','og_image')->first();
$og_description=Cms::where('slug','=','og_description')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript">
            var full_path = '<?= url('/') . '/'; ?>';
            var logged_in = '<?= (Auth()->guard('frontend')->guest()) ? true : false; ?>';
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="{{isset($meta_title->content_body) && $meta_title->content_body!=''?$meta_title->content_body:'Triptogo'}}">
        <meta name="keywords" content="{{isset($meta_keyword->content_body) && $meta_keyword->content_body!=''?$meta_keyword->content_body:'Triptogo'}}">
        <meta name="description" content="{{isset($meta_description->content_body) && $meta_description->content_body!=''?$meta_description->content_body:'Triptogo'}}">
        <meta property="og:title" content="{{strip_tags(isset($og_title->content_body) && $og_title->content_body!=''?$og_title->content_body:'Triptogo')}}" />
        <meta property="og:image" content="{{isset($og_image->content_body) && $og_image->content_body!=''?URL::asset('public/uploads/frontend/cms/pictures').'/'.strip_tags($og_image->content_body):URL::asset('favicon.png')}}" />
        <meta property="og:description" content="{{strip_tags(isset($og_description->content_body) && $og_description->content_body!=''?$og_description->content_body:'Triptogo')}}" />

        <title>{{ env('APP_NAME', 'Ditechnical') }}</title>
        <link href="{{ URL::asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!--<link href="{{ URL::asset('public/frontend/css/datepicker.css') }}" rel="stylesheet" type="text/css" />-->
        <link href="{{ URL::asset('public/frontend/css/icofont.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/icofont.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/slick.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/rsmenu-main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/frontend/css/ekko-lightbox.css') }}" rel="stylesheet" type="text/css" />
        <!-- style -->
        <link href="{{ URL::asset('public/frontend/css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ URL::asset('public/backend/css/jquery-confirm.css') }}" />
        <link href="{{ URL::asset('public/frontend/custom/iao-alert/iao-alert.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,900%7CYesteryear" rel="stylesheet">


        @php
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);
        @endphp
        <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}">
        <style>
            .help-block{
                color:red;
            }
        </style>
        @yield('css')
    </head>
    <body class="defult-home">
        @php
        use App\Model\Settings;
        $social_link = Settings::where('module', '=', 'Social Link')->get();
        $location = Settings::where('module', '=', 'Location')->get();
        @endphp
        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ URL::asset('public/frontend/images/new-logo-di.png') }}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        @include('partials.header')

        @yield('content')

        @include('partials.footer')


        <script src="{{ URL::asset('public/frontend/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('public/frontend/js/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- navbar -->
        <script src="{{ URL::asset('public/frontend/js/rsmenu-main.js') }}"></script>
        <script src="{{ URL::asset('public/frontend/js/jquery.nav.js') }}"></script>
        <script src="{{ URL::asset('public/frontend/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/slick.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/main.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/js/ekko-lightbox.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/custom/iao-alert/iao-alert.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/frontend/custom/js/script.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ URL::asset('public/backend/js/jquery-confirm.js') }}"></script>

        <!------------------------------new more------------------------------------>

        @yield('js')
        <!-- backtotop -->
        <script>
    		$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    		event.preventDefault();
    		$(this).ekkoLightbox();
    		});
	    </script>
        <script>
            const sliderElm = document.querySelector(".slider-container .slider");
            const btnLeft = document.querySelector(".slider-container .btn-left");
            const btnRight = document.querySelector(".slider-container .btn-right");

            const numberSliderBoxs = sliderElm.children.length;
            let idxCurrentSlide = 0;

            // Functions:
            function moveSlider() {
                let leftMargin = (sliderElm.clientWidth / numberSliderBoxs) * idxCurrentSlide;
                sliderElm.style.marginLeft = -leftMargin + "px";
                console.log(sliderElm.clientWidth, leftMargin);
            }
            function moveLeft() {
                if (idxCurrentSlide === 0)
                    idxCurrentSlide = numberSliderBoxs - 1;
                else
                    idxCurrentSlide--;

                moveSlider();
            }
            function moveRight() {
                if (idxCurrentSlide === numberSliderBoxs - 1)
                    idxCurrentSlide = 0;
                else
                    idxCurrentSlide++;

                moveSlider();
            }

            // Event Listeners:
            btnLeft.addEventListener("click", moveLeft);
            btnRight.addEventListener("click", moveRight);
            window.addEventListener("resize", moveSlider);
        </script>
        <!-- student placed -->
        <script>
            $(document).ready(function () {
                $(".customer-logos").slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4
                            }
                        },
                        {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 3
                            }
                        }
                    ]
                });
            });
        </script>
        <!-- counter -->
        <script>
            // number count for stats, using jQuery animate

            $('.counting').each(function () {
                var $this = $(this),
                        countTo = $this.attr('data-count');

                $({countNum: $this.text()}).animate({
                    countNum: countTo
                },
                        {

                            duration: 3000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });


            });
        </script>
        <script>
            /*Scroll to top when arrow up clicked BEGIN*/
            $(document).ready(function () {
                var height = $(window).scrollTop();
                if (height > 100) {
                    $('.mobile-view-logo').removeClass('d-none');
                } else {
                    $('.mobile-view-logo').addClass('d-none');
                }
            });
            $(window).scroll(function () {
                var height = $(window).scrollTop();
                if (height > 100) {
                    $('.mobile-view-logo').removeClass('d-none');
                } else {
                    $('.mobile-view-logo').addClass('d-none');
                }
            });
            $(document).ready(function () {
                $(".mobile-view-logo").click(function (event) {
                    event.preventDefault();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    return false;
                });
            });
            /*Scroll to top when arrow up clicked END*/
        </script>
        @if(Session::has('success'))
        <input type="hidden" id="success_msg" value="{{ Session::get('success') }}"/>

        <script>
            var success_msg = $('#success_msg').val();
            $.iaoAlert({
                type: "success",
                position: "top-right",
                mode: "dark",
                msg: success_msg,
                autoHide: true,
                alertTime: "3000",
                fadeTime: "1000",
                closeButton: true,
                fadeOnHover: true,
                zIndex: '9999'
            });
        </script>
        @endif
        @if(Session::has('error'))
        <input type="hidden" id="error_msg" value="{{ Session::get('error') }}"/>
        <script>
            var error_msg = $('#error_msg').val();
            $.iaoAlert({
                type: "error",
                position: "top-right",
                mode: "dark",
                msg: error_msg,
                autoHide: true,
                alertTime: "3000",
                fadeTime: "1000",
                closeButton: true,
                fadeOnHover: true,
                zIndex: '9999'
            });
        </script>
        @endif


        <script style="text/javascript">
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= 30) {
                    $(".topnav").addClass("fixed-top");
                } else {
                    $(".topnav").removeClass("fixed-top");
                }
            });
        </script>





    </body>
</html>