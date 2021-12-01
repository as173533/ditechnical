@extends('layouts.main') 
@section('css')


@endsection
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">
        @forelse($sliders as $index => $slider)
        <div class="carousel-item {{($index=='0')?'active':''}}">
            <img class="d-block w-100" src="{{asset('public/uploads/slider/'.$slider->photo)}}" alt="{{$slider->title_text}}">
            <div class="carousel-caption text-center">
			  <h2>{!!$slider->details_text!!}</h2>
			  <div class="slider-btn"><a href="{{$slider->link}}" class="btn btn-new">Click Here</a></div>
			</div>
        </div>
        @empty
        @endforelse
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //end banner -->
<section class="main-content">
    
    
    <!-- popular-courses -->
    <section class="popular-courses-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="courses-div">
                        <!-- courses -->
                        <div id="rs-team" class="rs-team home-style15 pt-100 pb-100 md-pt-70 md-pb-70">
                            <h3 class="others-courses">POPULAR <span class="theme-colour">COURSES</span></h3>
                            <div class="rs-carousel owl-carousel others-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="2500" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="5" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                                @forelse($featured_courses as $index => $featured_course)
                                <div class="team-item">
                                    <div class="team-wrap">
                                        <div class="team-img">
                                            <a href="{{Route('course-details',['id'=>base64_encode($featured_course->id)])}}">
                                                <img src="{{ URL::asset('public/uploads/course/'.$featured_course->image) }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="line-bottom">{{$featured_course->name}}</h4>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase" href="{{Route('course-details',['id'=>base64_encode($featured_course->id)])}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <!--//courses -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- counter -->
    <section id="counter-stats" class="wow">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 stats">	<i class="icofont-globe-alt"></i>
                    <div class="counting" data-count="1500">0</div>
                    <h5>ADMISSION DONE</h5>
                </div>
                <div class="col-lg-3 stats">	<i class="icofont-users-social"></i>
                    <div class="counting" data-count="1200">0</div>
                    <h5>STUDENTS SERVED</h5>
                </div>
                <div class="col-lg-3 stats">	<i class="icofont-teacher"></i>
                    <div class="counting" data-count="25">0</div>
                    <h5>CERTIFIED TEACHERS</h5>
                </div>
                <div class="col-lg-3 stats"> <i class="icofont-check-circled"></i>
                    <div class="counting" data-count="10">0</div>
                    <h5>TOTAL COURSES</h5>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- about-us -->
    <section class="about-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-us">
                        <h3 class="about-us-text">ABOUT <span class="theme-colour">US</span></h3>
                        <div class="about-para">
                            <p>"DI TECHNIAL" is AN ISO 9001:2015 CERTIFIED INSTITUTION No. : QMS/092020/1623, REGD.: [PURSUANT TO SUB-SECTION (2) OF SECTION 7 AND SUB- SECTION (1) OF SECTION 8 OF THE COMPANIES ACT, 2013 (18 OF 2013) AND RULE 18 OF THE COMPANIES (INCORPORATION) RULES 2014, CIN : U80902JH2021PTC016021 & MINISTRY OF MICRO, SMALL & MEDIUM ENTERPRISES, GOVT. OF INDIA. Our Institute is providing the best quality and best education to every student with that DI TECHNIAL is providing QR Code & Digital Signature for authentication Diploma. We are fully digitalized. DI TECHNIAL build up expert.</p>
                            
                        </div>
                        <div class="about-us-btn"> <a href="{{route('about-us')}}" class="btn btn-small">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-us-image text-center">
                        <img src="{{ URL::asset('public/frontend/images/about-us-2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- parallux -->
    <section class="compact-area-4">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="parallux">
                        <div class="parallux-text">
                            <div class="iso-no">
                               <img src="{{ URL::asset('public/frontend/images/iso-logo-1.png') }}" class="img-fluid" alt="">
                            </div>
                            <h5>DI TECHNICAL</h5>
                            <p class="cer-p">CERTIFIED BY MCA & MSME ( GOVT. OF INDIA )</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why-choose-us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="why-choose-us-main">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3 class="why-title">WHY <span class="theme-colour">CHOOSE US</span></h3>
                                <p class="why-para">The DI TECHNICAL run by the Department of Services & Sports (Services wing) in collaboration with different private organizations play an important role in providing low cost computer training</p>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Training in vast range of topics</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Quality teaching and high achivement rates</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Zero level to high level education</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Special class for poor students</h4>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">An iso certified institute</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Certified by central govt. of india</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">100% job oriented education</h4>	
                                            </div>
                                        </div>
                                        <div class="info-box-wrap">
                                            <div class="box-icon-wrapper">
                                                <div class="info-box-icon"> <i class="icofont-tick-boxed"></i>
                                                </div>
                                            </div>
                                            <div class="info-box-content">
                                                <h4 class="info-box-title">Our cources is affordable</h4>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- other courses -->
    <section class="compact-area-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- other courses div -->
                    <div id="rs-team" class="rs-team home-style15 pt-100 pb-100 md-pt-70 md-pb-70">
                        <h3 class="others-courses">ALL <span class="theme-colour">COURSES</span></h3>
                        <div class="rs-carousel owl-carousel others-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="2500" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="5" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                            @forelse($all_courses as $index => $all_course)

                            <div class="team-item">
                                <div class="team-wrap">
                                    <div class="team-img">
                                        <a href="{{Route('course-details',['id'=>base64_encode($all_course->id)])}}">
                                            <img src="{{ URL::asset('public/uploads/course/'.$all_course->image) }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="line-bottom">{{$all_course->name}}</h4>
                                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase" href="{{Route('course-details',['id'=>base64_encode($all_course->id)])}}">view details</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!-- //other courses div -->
                </div>
            </div>
        </div>
    </section>

    <!-- client -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- students placed -->
                    <div class="students-placed-div">
                        <h3 class="student-placed-title">Our Students <span class="theme-colour">Placed In</span></h3>
                        <section class="customer-logos slider">
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/india-mart.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/govt-logo.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/reliance.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/tata.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/hdfc.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/amul.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/post.jpg') }}">
                            </div>
                            <div class="slide">
                                <img src="{{ URL::asset('public/frontend/images/vivo.jpg') }}">
                            </div>
                        </section>
                    </div>
                    <!-- //students placed -->
                    
                </div>
            </div>
        </div>
    </section>

    <!-- enquiry form -->
    <section class="enquiry-div">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-sm-6 p-0 m-0">
                    <div class="image-enroll mobile">
                        <img src="{{ URL::asset('public/frontend/images/new.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-6 p-0 m-0">
                    <div class="quick-enquiry-div">
                        <h3 class="quick-title">Quick Enquiry</h3>
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
                                <textarea name="address" cols="20" rows="1" class="form-control quick-textaeea" placeholder="Address"></textarea>	
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
    </section>


    <section class="gallerys">
        <div class="container">
            <h3 class="student-placed-title">Our <span class="theme-colour">Gallery</span></h3>	
            <!--<div class="portfolio">-->
            <!--    @forelse($gallries as $gallery)-->
            <!--    <a href="#" class="card-1">-->
            <!--        <div class="image">-->
            <!--            <img src="{{asset('public/uploads/gallery/'.$gallery->image)}}" alt="" />-->
            <!--        </div>-->
            <!--    </a>-->
            <!--    @empty-->
            <!--    @endforelse-->
                
            <!--</div>-->
            
            <div class="row gallery-row">
			  <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
			  </a>
			</div>
			<div class="row gallery-row">
			  <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
			  </a>
			</div>
            
            <div class="about-us-btn text-center"> <a href="{{route('gallery')}}" class="btn btn-small">View More</a></div>
        </div>
    </section>  

    <!-- testimonials -->
    <section class="compact-area-4">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-sm-12">
                    <!-- testimonial -->
                    <div class="testimonials">
                        <h3 class="testimonial-text">OUR <span class="theme-colour">TESTIMONIAL</span></h3> 
                        <div class="slider-container">
                            <div class="slider test-slide">
                                <div class="slide-box">
                                    <!-- Testi One -->
                                    <p class="comment">Teaching style of Anil Sir is very very nice. It is not praise. It is reality. One can feel this automatically when he/she study in that Institute.</p>
                                    <img src="{{ URL::asset('public/frontend/images/test-1.png') }}" />
                                    <h3 class="name">Krishna Kumar Singh</h3>
                                    <h4 class="job">Student</h4>
                                </div>
                                <div class="slide-box">
                                    <!-- Testi One -->
                                    <p class="comment">It was awesome experience with sir !!! 💜And also his ways of teaching is much better as compared to other teachers !!!! Also, his tests will upgrade you from depth!!!!</p>
                                    <img src="{{ URL::asset('public/frontend/images/test-2.png') }}" />
                                    <h3 class="name">Komal Gupta</h3>
                                    <h4 class="job">Student</h4>
                                </div>
                                <div class="slide-box">
                                    <!-- Testi One -->
                                    <p class="comment">Sir ka baat karna ka tarika or samjhane ka tarika bahut achha hai.</p>
                                    <img src="{{ URL::asset('public/frontend/images/testi-3.png') }}" />
                                    <h3 class="name">Priyanka Kumari</h3>
                                    <h4 class="job">Student</h4>
                                </div>
                            </div>
                            <a href="#!" class="control-slider btn-left">	<i class="fa fa-chevron-left"></i>
                            </a>
                            <a href="#!" class="control-slider btn-right">	<i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- //testimonial -->
                </div>
            </div>
        </div>
    </section>

    <!--MOST RECENT FAQ'S-->      
    <section class="faq-section">
        <div class="container-fluid p-0">
            <div class="row">
                <!-- ***** FAQ Start ***** -->
                <div class="col-md-6 m-0 p-0 bg-xyz">
                    <div class="faq-title text-center pb-3">
                        <h3 class="testimonial-text">Frequently Asked <span class="theme-colour">Questions</span></h3>
                    </div>
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span> Where can I get some?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span> What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span> Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <div class="images-call-to-ac">
                        <a href="#"><img src="{{ URL::asset('public/frontend/images/enroll-image.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END MOST RECENT FAQ'S-->
</section>






@stop
@section('js')


@endsection
