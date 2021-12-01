<!-----------------------------------Footer Start-------------------------------->
<footer id="rs-footer" class="rs-footer home9-style main-home home14-style home15">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <div class="footer-logo mb-30">
                        <a href="{{route('/')}}">
                            <img src="{{ URL::asset('public/frontend/images/logo-15.png') }}" alt="">
                            <span class="footer-logo-di">Di Technical</span>
                        </a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15">
                        <p>An ISO 9001:2015 Certifyed Instutute Certificate No: QMS/092020/1623 Registred on MCA Govt. of India
                            CIN NO: U80902JH2021PTC016021 Registred on MSME Govvt. of India UDYAM-JH-20-0007592</p>
                    </div>
                    <ul class="footer_social">
                        <li> <a href="{{$social_link[0]->value}}" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                        </li>
                        <li> <a href="{{$social_link[1]->value}}" target="_blank"><span><i class="fa fa-whatsapp"></i></span></a> 
                        </li>
                        <li> <a href="{{$social_link[2]->value}}" target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                        </li>
                        <li> <a href="{{$social_link[3]->value}}" target="_blank"><span><i class="fa fa-youtube"></i></span></a> 
                        </li>
                        <li> <a href="{{$social_link[4]->value}}" target="_blank"><span><i class="fa fa-telegram"></i></span></a> 
                        </li>
                        
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Useful Links</h3>
                    <ul class="site-map">
                        <li><a href="{{route('/')}}">Home</a>
                        </li>
                        <li><a href="{{route('about-us')}}">About DI TECHNICAL</a>
                        </li>
                        <li><a href="{{route('director-message')}}">Director Message</a>
                        </li>
                        <li><a href="{{route('mission-and-vision')}}">Mission & Vision</a>
                        </li>
                        <li><a href="{{route('quality-policy')}}">Quality Policy</a>
                        </li>
                        <li><a href="{{route('courses')}}">All Courses</a>
                        </li>
                        <li><a href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Student's Zone</h3>
                    <ul class="site-map">
                        <li><a href="{{route('registration-process')}}">Registration Process</a></li>
                        <li><a href="{{route('examination-process')}}">Examination Process</a></li>
                        <li><a href="{{route('evaluation')}}">Evaluation & Result</a></li>
                        <li><a href="{{route('registered-students')}}">Registered Students</a></li>
                        <li><a href="{{route('i-card')}}">I-Card Download</a></li>
                        <li><a href="{{route('certificate-verification')}}">Certificate Verification</a></li>
                        <!--<li><a href="student-registration.html">Direct Admission</a></li>-->
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li> <i class="icofont-map-pins"></i>
                            <div class="desc">{{$location[0]->value}}</div>
                        </li>
                        <li> <i class="icofont-phone"></i>
                            <div class="desc"> <a href="tel:{{$location[1]->value}}">{{$location[1]->value}}</a>
                            </div>
                        </li>
                      	<li> <i class="icofont-phone"></i>
                            <div class="desc"> <a href="tel:{{$location[3]->value}}">{{$location[3]->value}}</a>
                            </div>
                        </li>
                        <li> <i class="icofont-send-mail"></i>
                            <div class="desc"> <a href="mailto:{{$location[2]->value}}">{{$location[2]->value}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Franchise/ALC</h3>
                   <ul class="site-map">
                        <li><a href="{{route('why-ditech')}}">Why DI TECHNICAL</a>
                        </li>
                        <li><a href="{{route('affiliation-process')}}">Affiliation Process</a>
                        </li>
                        <li><a href="{{route('apply-online')}}">Apply Online</a>
                        </li>
                        <li><a href="{{route('affiliation-center')}}">Affiliated Centers</a>
                        </li>
                    </ul> 
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Subscribe Us</h3>
                    <form class="subscription-form" id="subscription-form" action="{{route('post-subcribers')}}">
                      @csrf
                      <div class="input-group">
                        <input type="email" id="email" name="subscribe_email" placeholder="Your Email" class="form-control">
        				<span class="input-group-btn">
                          <button class="bg-theme-color-2" type="submit">Subscribe</button>
                        </span>
                      </div>
                      <span class="help-block" id="error-subscribe_email"></span>
                    </form>
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                   <h3 class="widget-title">Opening Hours</h3> 
                   <ul class="site-map">
                        <li><p class="text-white">Mon - Sat :8.00 AM - 06.00 PM</p></li>
                        <li><p class="text-white">Sun :Closed</p></li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>Copyright © {{date('Y')}} DI TECHNICAL. All Rights Reserved.</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-right md-text-left">
                    <ul class="copy-right-menu">
                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a>
                        </li>
                        <li><a href="{{route('terms-condition')}}">Terms & Conditions</a>
                        </li>
                        <li><a href="{{route('return-refund-policy')}}">Return & Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
</footer>
<div id="scrollUp" class="orange-color"> <i class="fa fa-angle-up"></i>
</div>