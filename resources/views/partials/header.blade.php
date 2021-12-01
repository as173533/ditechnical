<!--Full width header Start-->
<div class="full-width-header header-style3 home-style15">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area home11-topbar modify1 home15-style">
            <div class="container-fluid2">
                <div class="row y-middle">
                    <div class="col-md-5">
                        <ul class="topbar-contact">
                            <li> <i class="flaticon-email"></i>
                                <a href="mailto:{{$location[2]->value}}"><i class="fa fa-envelope-o"></i> {{$location[2]->value}}</a>
                            </li>
                            <li> <i class="fa flaticon-call"></i>
                                <a href="tel: {{$location[1]->value}}"> <i class="fa fa-phone"></i> {{$location[1]->value}}</a>
                            </li>
                            <li>
									<a href="http://ditechnical.in/"> <i class="icofont-web"></i> Old-Version</a>
								</li>
                                <li>
									<a href="#"> <i class="icofont-user-alt-7"></i> New Franchise</a>
							</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-right">
                        <ul class="toolbar-sl-share">
                            <li class="opening"> <i class="fa fa-map-marker"></i> {{$location[0]->value}}</li>
                            <li><a href="{{$social_link[0]->value}}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="{{$social_link[1]->value}}"><i class="fa fa-whatsapp"></i></a>
                            </li>
                            <li><a href="{{$social_link[2]->value}}"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="{{$social_link[3]->value}}"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li><a href="{{$social_link[4]->value}}"><i class="fa fa-telegram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        <!-- Header Middle Area Start -->
        <!--<div class="header-middle-part">-->
        <!--    <div class="container">-->
        <!--        <div class="d-flex justify-content-around">-->
        <!--            <div class="logo">-->
        <!--                <a href="{{route('/')}}"> <img src="{{ URL::asset('public/frontend/images/new-logo-di-2.png') }}" class="img-fluid" alt=""></a>-->
        <!--            </div>-->
        <!--            <div class="logo-text">-->
        <!--                <p class="di-name">Di Technical Pvt. Ltd</p>-->
        <!--                <p class="institute">(Institute Of Computer Education Center)</p>-->
        <!--                <p class="CIN">Govt.of India CIN: U80902JH2021PTC016021</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="middle-img">
            <div class="container-fluid p-0 m-0">
                <div class="row p-0 m-0">
                    <div><img src="{{ URL::asset('public/frontend/images/upper-head-img.png') }}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Header Middle Area End -->
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container-fluid2">
                <div class="custom-table">
                    <div class="col-cell">
                        <div class="header-logo mobile-view-logo" id="desktop">
                            <div class="custom-logo-area">
                                <a href="{{route('/')}}">
                                    <img src="{{ URL::asset('public/frontend/images/logo-15.png') }}" alt="Header">
                                    <span class="di-logo-name">Di Technical</span>
                                </a>
                                
                            </div>
                            
                            <div class="custom-sticky-logo">
                                <a href="{{route('/')}}">
                                    <img src="{{ URL::asset('public/frontend/images/logo-15.png') }}" alt="Header">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle"> <i class="fa fa-bars"></i>
                                    </a>
                                    <span class="wish-cart-icon-div" id="desktop">
                                        <a href="wish-icon-nav" href="#"><i class="icofont-ui-love love-icon"></i><span class="cart_count">2</span></a>
                                        <a href="wish-icon-nav" href="#"><i class="icofont-cart love-icon"></i></a>
                                    </span>
                                </div>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <li> <a href="{{route('/')}}">Home</a>
                                        </li>
                                        <li class="menu-item-has-children"> <a href="javascript:void(0);">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('about-us')}}">About Ditechnical</a> </li>
                                                <li><a href="{{route('director-message')}}">Director Message</a> </li>
                                                <li><a href="{{route('mission-and-vision')}}">Mission & Vision</a> </li>
                                                <li><a href="{{route('quality-policy')}}">Quality Policy</a> </li>
                                            </ul>
                                            <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </li>
                                        <li class="menu-item-has-children"> <a href="javascript:void(0);">Linkage & Authorization</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('msme-registeration')}}">MSME Registration</a> </li>
                                                <li><a href="{{route('iso-certification')}}">ISO 9001:2015 Org</a> </li>
                                                <li><a href="{{route('mca')}}">Ministry Of Corporate Affairs (MCA)</a> </li>
                                            </ul>
                                            <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </li>
                                        <li> <a href="{{route('courses')}}">All Courses</a>
                                        </li>
                                        <li class="menu-item-has-children"> <a href="javascript:void(0);">Students</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('registration-process')}}">Registration Process</a></li>
                                                <li><a href="{{route('examination-process')}}">Examination Process</a></li>
                                                <li><a href="{{route('evaluation')}}">Evaluation &amp; Result</a></li>
                                                <li><a href="{{route('registered-students')}}">Registered Students</a></li>
                                                <li><a href="{{route('i-card')}}">I-Card Download</a></li>
                                                <li><a href="{{route('result')}}">Results Online</a></li>
                                                <li><a href="{{route('certificate-verification')}}">Certificate Verification</a></li>
                                                <!--<li><a href="student-registration.html">Direct Admission</a></li>-->


                                            </ul>
                                            <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </li>
                                        <li class="menu-item-has-children"> <a href="javascript:void(0);">Franchise/ALC</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('why-ditech')}}">Why Ditechnical</a></li>
                                                <li><a href="{{route('affiliation-process')}}">Affiliation Process</a></li>
                                                <li><a href="{{route('apply-online')}}">Apply Online</a></li>
                                                <li><a href="{{route('affiliation-center')}}">Affiliated Centers</a></li>

                                            </ul>
                                            <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </li>
                                        <li> <a href="{{route('gallery')}}">Gallery</a>
                                        </li>
                                        <li> <a href="{{route('contact-us')}}">Contact Us</a>
                                        </li>
                                      
                                        <li> <a href="#" id="nav-mob-li">Old-Version</a>
											</li>
                                            <li> <a href="#" id="nav-mob-li">New Franchise</a>
											</li>
                                            <li> <a href="{{route('login')}}" id="nav-mob-li">Login</a>
											</li>
                                            <li> <a href="{{route('signup')}}" id="nav-mob-li">Registration</a>
											</li>
                                    </ul>

                                    <!-- //.nav-menu -->
                                </nav>
                            </div>
                            <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li><a class="cart-icon" href="#"><i class="icofont-ui-love custom-i"></i><span class="cart_count">2</span></a>
                                </li>
                                <li><a class="cart-icon" href="#"><i class="icofont-cart custom-i"></i></a>
                                </li>
                                @if (Auth()->guard('frontend')->guest())
                                <li><a class="apply-btn-reg" href="{{route('signup')}}">Registration</a>
                                </li>
                                <li><a class="apply-btn" href="{{route('login')}}">Student Login</a>
                                </li>
                                @else
                                <li><a class="apply-btn" href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->