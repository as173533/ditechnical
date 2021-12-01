@extends('layouts.main') 
@section('css')
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/new-css/theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/new-css/custom.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/new-css/media.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    hr {
    border-top: 0.0625rem solid #010163 !important;
}
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
                        <h2>Courses Details</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>Courses Details</span></li>
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
    <!--<section class="courses-details">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">-->
    <!--                <div class="row bg-lights">-->
    <!--                    <div class="col-sm-6">-->
    <!--                        <div class="product-image-div">-->
    <!--                            <img src="{{ URL::asset('public/uploads/course/'.$course_detail->image) }}" class="img-fluid" alt="">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6">-->
    <!--                        <div class="product-details">-->
    <!--                            <h4>{{$course_detail->name}}</h4>-->
    <!--                            <h5 class="ps-product__price pr-2">₹ {{$course_detail->price}} </h5>-->
    <!--                            <h3>Duration : {{$course_detail->time}} Days</h3>-->
    <!--                            <p><b>Highlights:</b> {{$course_detail->short_description}}</p>-->
    <!--                            <div class="add-cart-button">-->
    <!--                                <a href="{{Route('checkout',['id'=>base64_encode($course_detail->id)])}}" class="button-pro">Buy Now</a>-->
                                    <!--<a href="{{route('courses')}}" class="btn shopping">Continue Shopping</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">-->
    <!--                <div class="product-big-des">-->
    <!--                    <h5 class="recent-h5 mb-0">Description</h5> -->
    <!--                    <p>{!!$course_detail->long_description!!}</p> -->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--------------new courses details page-------------->
    <main id="content" role="main" class="mt-5 mb-5">
        <div class="main-white course-detail-main">
			<div class="position-relative blue-bg text-white pb-md-4 pt-md-4">
				<!-- Hero Section -->
				<div class="gradient-y-overlay-lg-white bg-img-hero space-2">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-lg-8">
								<div class="position-relative mobile-view-video mb-3 d-block d-md-none">
									<!-- Video Popup -->
									<a class="video-player mb-0" data-toggle="modal" data-target="#previewModal" href="javascript:void(0);">
										<img class="card-img-top" src="{{ URL::asset('public/frontend/images/new-image/course-thumb.jpg') }}" alt="Image Description"> <span class="video-player-btn video-player-centered text-center">
                                        <span class="video-player-icon mb-2">
                                        <i class="fa fa-play"></i>
                                        </span>
										<span class="d-none text-center text-white">Preview this course</span>
										</span>
										<div class="watch-de"><span class="dot-blink"></span> Watch Demo Videos</div>
									</a>
									<!-- End Video Popup -->
								</div> <small class=" text-uppercase mb-2">Top course</small>
								<h1 class="text-lh-sm">Learn FL Studio Music Production for Beginners - Course in Hindi</h1>
								<p>Digital Audio Workstations have revolutionised the way artists, producers and engineers express their musical ideas. With a wide variety of DAWs on the market, FL Studio has created a unique niche for itself for being a producer friendly DAW</p>
								<ul class="d-flex align-items-center list-inline flex-wrap ml-0 pl-0 mb-md-3 mb-2">
									<li class="pr-0"> <span class="font-weight-bold mr-0 yellow-txt" style="color:#f5e624;">5</span>
									</li>
									<li class="pr-2 pr-md-3">
										<ul class="list-inline mt-n1 mb-0 mr-0 ml-2 d-flex ul-rate">
											<li class="list-inline-item mx-0"> <i class="fa fa-star" style="color:#efce4a;"></i>
											</li>
											<li class="list-inline-item mx-0"> <i class="fa fa-star" style="color:#efce4a;"></i>
											</li>
											<li class="list-inline-item mx-0"> <i class="fa fa-star" style="color:#efce4a;"></i>
											</li>
											<li class="list-inline-item mx-0"> <i class="fa fa-star" style="color:#efce4a;"></i>
											</li>
											<li class="list-inline-item mx-0"> <i class="fa fa-star" style="color:#efce4a;"></i>
											</li>
										</ul>
									</li>
									<li class="pr-3"> <span class="d-inline-block ml-md-2">

                        <span class="">(2 Reviews)
                        </span>
										</span>
									</li>
									<li class="pr-3 d-block d-md-inline-block"><span class="d-inline-block">
                        <span class=" font-weight-bold ml-sm-2">
                        973</span>
										<span class="">Students enrolled</span>
										</span>
									</li>
								</ul>
								<!-- Authors -->
								<div class="d-flex align-items-center ml-0 author-avar">
									<div class="avatar-group"> <span class="avatar avatar-xs avatar-circle">
                              <img class="avatar-img" src="{{ URL::asset('public/frontend/images/new-image/1.jpg') }}" alt="Image Description">
                              </span>
									</div> <span class="pl-md-2 d-flex align-items-center">Created by <a class="link-underline" href="https://www.efacourses.com/home/instructor_page/1">EFA Basics</a></span>
								</div>
								<!-- End Authors -->
								<ul class="d-md-flex align-items-center flex-wrap list-inline mt-0 mt-md-3 mb-2 mb-md-3 detail-lst-svg">
									<li class="mr-2 mr-md-4 py-1 py-md-0">
										<svg class="mb-0 mr-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="" width="20" height="20" viewBox="0 0 20 20">
											<image width="20" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQflAx4QEzbPSA2WAAAA/0lEQVQoz4WRLUsEARCGn1sWVzmE9eMOETRZ/AVnsVwWvZP7AcKByWg3CQa7iF9FwSgY1WSwWsSgyWS6PVAPhcPHsNH9eCfMhGfeGWaQgpjywW5aUwK+q6vlIOKJui4VAWosEfHLf30wwjkxG4g7FqunWnGTQy45Y0CQ4ZgwyRUxLRz6VLjjtdoU1INcqO6PuiwSANPkacgNHe4BQgb0c8EeKwCMEeGE1dJb7vsZkPAFNLigluscU007FlSdy3XcVcRFBz4Xjr7TkAa3jLLFDPWMoRLRpske9tWk5ImnErLNEbIGjGc4BnzzyAsgdtTjshOlqaW+OVsOYtdX54vAP+wZYBtUvPPyAAAAAElFTkSuQmCC" />
										</svg> <span class=" ml-2 mr-2"> Last updated </span>
										<span class=" font-weight-bold">
                        Tue, 14-Sep-2021 </span>
										<br>
									</li>
									<li class="mr-2 mr-md-4 py-1 py-md-0"> <span class="text-white ml-md-2 d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Language"><svg class="mr-2 mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="19" viewBox="0 0 21 19">
                                  <image width="21" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAATCAQAAADVR44AAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQflAx4RCzZMkf/4AAABQklEQVQoz22SPSuFcRiHr/PE8RJSikQmk5QvcIwGK9sZLCzqfAImGaRMDAqRRSm7nEU4Fpvl5KVEDhIW5aXEZXieo3Mez31P96/r/79fkQTv9sSFuFrDfxsiD5TicvAPnCLPASXSUZxmhBRAPPWeuiRee/Kn6bFYhfb5oo6J+GFBrDVno6PqjGCPs2646oL6am/07NWC2Kiei2tqC15YtkdTfxlCFAfVrKhzqOsiFi1WFFNG8VDFK+8D4Dvqr5kkWwYCVugMgNpobD+J6B3QxFU41/KvqUS0HXijK0S/APjhMxEdB76Z4Bkf1Gdf1OuEtvrUnKiL2O+mR+67rV7aVoU2qE/ivNpeua2MqsMivlsQ65y1w0y47OoLaPVUnRZvq27gLH4DoS+p2964G8X1TtqcjGJW1Z24HiSMZ4sBitzF5V9GimS97kJkZwAAAABJRU5ErkJggg=="/>
                                </svg>
                                 Hindi</span>
									</li>
									<li class="mr-2 py-1 py-md-0"> <span class="badge badge-success d-md-block" data-toggle="tooltip" data-placement="top" title="Course level">Beginner</span>
									</li>
								</ul>
								<ul class="d-none d-md-flex list-inline align-items-center pl-0 ml-0 mt-md-4 mb-0">
									<li class="pr-3 pr-md-4">
										<a class="btn-white-o " id="course_wishlist_item_77" onclick="handleWishList(this, '77', 'course_details')" href="javascript:;">
											<svg width="18" height="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.534 477.534" style="enable-background:new 0 0 477.534 477.534;" xml:space="preserve">
												<g>
													<g>
														<path d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909
                                            l-8.431-8.909C181.284,5.762,98.662,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778
                                            c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654
                                            c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z M413.787,234.226h-0.017
                                            L238.802,418.768L63.818,234.226c-39.78-42.916-39.78-109.233,0-152.149c36.125-39.154,97.152-41.609,136.306-5.484
                                            c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0l20.804-21.931
                                            c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484C453.913,125.078,454.207,191.516,413.787,234.226
                                            z" />
													</g>
												</g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
												<g></g>
											</svg>Wishlist</a>
									</li>
									<li>
										<!-- Button trigger modal -->
										<a class="btn-white-o" data-toggle="modal" data-target="#copyToClipboardModal" href="javascript:;">
											<svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
												<g>
													<linearGradient xmlns="http://www.w3.org/2000/svg" id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="481" y2="31">
														<stop stop-opacity="1" stop-color="#ffffff" offset="0" />
														<stop stop-opacity="1" stop-color="#ffffff" offset="1" />
													</linearGradient>
													<g xmlns="http://www.w3.org/2000/svg">
														<g>
															<g>
																<path d="m505.664 183.754-212-150c-4.575-3.237-10.577-3.653-15.557-1.077-4.98 2.577-8.107 7.715-8.107 13.322v75.385c-70.488 3.632-136.248 32.812-186.525 83.089-53.83 53.83-83.475 125.4-83.475 201.526v60c0 8.327 6.76 15.001 15.012 15.001 6.605 0 12.551-4.369 14.411-10.88l2.309-8.08c30.756-107.649 127.472-184.227 238.268-190.61v74.569c0 5.607 3.127 10.746 8.106 13.322 4.98 2.576 10.981 2.161 15.557-1.077l212-150c3.974-2.812 6.336-7.377 6.336-12.245s-2.361-9.433-6.335-12.245zm-205.664 133.257v-61.012c0-8.284-6.716-15-15-15-32.193 0-63.916 5.228-94.287 15.539-68.596 23.288-125.113 70.767-160.095 131.61 9.191-132.313 119.773-237.149 254.382-237.149 8.284 0 15-6.716 15-15v-61.012l171.03 121.012z" fill="url(#SVGID_1_)" data-original="url(#SVGID_1_)" style="" />
															</g>
														</g>
													</g>
												</g>
											</svg>Share</a>
										<!-- End Button trigger modal -->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Hero Section -->
				<!-- Sidebar Content Section -->
				<div class="container space-top-md-2 position-md-absolute sidbar-detail top-0 right-0 left-0">
					<div class="row justify-content-end">
						<div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 z-index-2">
							<!-- <div class="js-sticky-block card border" -->
							<div class="card js-sticky-block" data-hs-sticky-block-options='{
                                "parentSelector": "#stickyBlockStartPoint",
                                "breakpoint": "md",
                                "startPoint": "#stickyBlockStartPoint",
                                "endPoint": "#stickyBlockEndPoint",
                                "stickyOffsetTop": 20,
                                "stickyOffsetBottom": 20
                                }'>
								<div class="position-relative d-none d-md-block">
									<!-- Video Popup -->
									<a class="video-player mb-0" data-toggle="modal" data-target="#previewModal" href="javascript:;">
										<img class="card-img-top" src="{{ URL::asset('public/frontend/images/new-image/course-thumb.jpg ') }}" alt="Image Description"> <span class="video-player-btn video-player-centered text-center">
                                        <span class="video-player-icon mb-2">
                                        <i class="fa fa-play"></i>
                                        </span>
										<span class="d-none text-center text-white">
                        Preview this course                        </span>
										</span>
										<div class="watch-de"><span class="dot-blink"></span> Watch Demo Videos</div>
									</a>
									<!-- End Video Popup -->
								</div>
								<div class="card-body">
									<div class="mb-3">
										<div class="d-md-flex justify-content-between align-items-center">
											<div class="d-md-flex justify-content-md-between align-items-center"> <span class="h2 text-lh-sm mr-1 mb-0 discounted-price font-rupee font-weight-bold">₹799</span>
												<span class="d-price font-rupee"><del>₹3599</del></span>
											</div>
											<div> <span class="d-price font-rupee">Get Discount 78 % off
                          </span>
											</div>
										</div>
										<div class="discount-info">
											<div class="day-left">
												<svg id="icon-alarm" enable-background="new 0 0 443.294 443.294" height="24" viewBox="0 0 443.294 443.294" width="24" xmlns="http://www.w3.org/2000/svg">
													<path d="m221.647 0c-122.214 0-221.647 99.433-221.647 221.647s99.433 221.647 221.647 221.647 221.647-99.433 221.647-221.647-99.433-221.647-221.647-221.647zm0 415.588c-106.941 0-193.941-87-193.941-193.941s87-193.941 193.941-193.941 193.941 87 193.941 193.941-87 193.941-193.941 193.941z" />
													<path d="m235.5 83.118h-27.706v144.265l87.176 87.176 19.589-19.589-79.059-79.059z" />
												</svg> <strong>7 hours</strong> left for this price</div>
										</div>
									</div>
									<div class="mb-3"> <a class="btn  btn-see btn-buy w-100 mb-0 " data-detail='{"id":"77","title":"Learn FL Studio Music Production for Beginners - Course in Hindi","discount_flag":"1","price":"3599","discounted_price":"799"}' id="course_cart_item_77" onclick="handleCartItems(this, '77', 'course_details')" href="javascript:;">Add to cart</a>
									</div>
									<div class="mb-3"> <a class="btn btn-green w-100 mb-0" data-detail='{"id":"77","title":"Learn FL Studio Music Production for Beginners - Course in Hindi","discount_flag":"1","price":"3599","discounted_price":"799"}' id="course_77" onclick=" handleBuyNow(this) ;" href="javascript:;">Buy now</a>  <span id="getloader" style="display:none;color:black;"><i class="fa fa-spinner fa-spin"></i> Loading Please Wait</span>
									</div>
									<div class="btn-fixed-bottom d-md-none">
										<div class="fixed-bottom-price"> <span class="h2 text-lh-sm mr-2 mb-0 font-rupee">₹799</span>
											<strike class="p text-lh-sm mr-2 mb-0 font-rupee">₹3599</strike>
										</div> <a class="btn btn-green w-100" data-detail='{"id":"77","title":"Learn FL Studio Music Production for Beginners - Course in Hindi","discount_flag":"1","price":"3599","discounted_price":"799"}' id="course_77_1" onclick="handleBuyNow(this)" href="javascript:;">Buy now</a>
									</div>
									<div class="money-back">30 days money back guarantee</div>
									
									<ul class="row d-flex d-md-none justify-content-center  list-inline align-items-center mobile-wish-btns">
										<li> <a class="btn-white-o " id="course_wishlist_item_77" onclick="handleWishList(this, '77', 'course_details')" href="javascript:;">

                         Wishlist                             <svg width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.534 477.534" style="enable-background:new 0 0 477.534 477.534;" xml:space="preserve">
                              <g>
                                <g>
                                  <path d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909
                                    l-8.431-8.909C181.284,5.762,98.662,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778
                                    c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654
                                    c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z M413.787,234.226h-0.017
                                    L238.802,418.768L63.818,234.226c-39.78-42.916-39.78-109.233,0-152.149c36.125-39.154,97.152-41.609,136.306-5.484
                                    c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0l20.804-21.931
                                    c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484C453.913,125.078,454.207,191.516,413.787,234.226
                                    z"/>  </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                           </a>
										</li>
										<li>
											<!-- Button trigger modal --> <a class="btn-white-o" data-toggle="modal" data-target="#copyToClipboardModal" href="javascript:;">





                  Share
                  <svg width="20px" height="20px" viewBox="0 0 512 512.00004" xmlns="http://www.w3.org/2000/svg"><path d="m511.824219 255.863281-233.335938-255.863281v153.265625h-27.105469c-67.144531 0-130.273437 26.148437-177.753906 73.628906-47.480468 47.480469-73.628906 110.609375-73.628906 177.757813v107.347656l44.78125-49.066406c59.902344-65.628906 144.933594-103.59375 233.707031-104.457032v153.253907zm-481.820313 179.003907v-30.214844c0-59.132813 23.027344-114.730469 64.839844-156.542969s97.40625-64.839844 156.539062-64.839844h57.105469v-105.84375l162.734375 178.4375-162.734375 178.441407v-105.84375h-26.917969c-94.703124 0-185.773437 38.652343-251.566406 106.40625zm0 0"/></svg>
                  </a>
											<!-- End Button trigger modal -->
										</li>
									</ul>
									<div class="mt-3">
										<h2 class="h4">This course includes:</h2>
										<!-- Icon Block -->
										<div class="media text-body font-size-1 mb-2">
											<div class="min-w-3rem text-center mr-3">
												<svg class="mb-0 opacity-7" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M256,0C114.845,0,0,114.839,0,256s114.845,256,256,256c141.161,0,256-114.839,256-256S397.155,0,256,0z M256,474.628
                        C135.45,474.628,37.372,376.55,37.372,256S135.45,37.372,256,37.372s218.628,98.077,218.628,218.622
                        C474.628,376.55,376.55,474.628,256,474.628z" />
														</g>
													</g>
													<g>
														<g>
															<path d="M343.202,256h-80.973V143.883c0-10.321-8.365-18.686-18.686-18.686s-18.686,8.365-18.686,18.686v130.803
                        c0,10.321,8.365,18.686,18.686,18.686h99.659c10.321,0,18.686-8.365,18.686-18.686S353.523,256,343.202,256z" />
														</g>
													</g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
													<g></g>
												</svg>
											</div>
											<div class="media-body">07:26 Hours On demand videos</div>
										</div>
										<!-- End Icon Block -->
										<!-- Icon Block -->
										<div class="media text-body font-size-1 mb-2">
											<div class="min-w-3rem text-center mr-3">
												<svg class="mb-0 opacity-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18">
													<image x="0px" y="0px" width="18" height="18" xlink:href="" />
												</svg>
											</div>
											<div class="media-body">21 Lessons</div>
										</div>
										<!-- End Icon Block -->
										<!-- Icon Block -->
										<div class="media text-body font-size-1 mb-2">
											<div class="min-w-3rem text-center mr-3">
												<svg class="mb-0 opacity-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="16">
													<image x="0px" y="0px" width="19" height="16" xlink:href="data:img/png;base64,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" />
												</svg>
											</div>
											<div class="media-body">Full time access</div>
										</div>
										<!-- End Icon Block -->
										<!-- Icon Block -->
										<div class="media text-body font-size-1 mb-2">
											<div class="min-w-3rem text-center mr-3">
												<svg class="mb-0 opacity-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="20">
													<image x="0px" y="0px" width="18" height="20" xlink:href="data:img/png;base64,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" />
												</svg>
											</div>
											<div class="media-body">Access on mobile, Tablet and tv</div>
										</div>
										<!-- End Icon Block -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Sidebar Content Section -->
			</div>
			<div class="container space-top-2 space-top-md-1">
				<div class="row">
					<div class="col-md-7 col-lg-8">
						<!-- Info -->
						<div class="pt-0 mt-3 mt-md-5 border p-3 p-md-5 border-radius ">
							<h3 class="mb-3 mb-md-4">What you will learn ?</h3>
							<div class="row">
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">The application of the workflow knowledge of FL Studio in other Digital Audio Workstations.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">The ability to shape musical ideas into tangible audio tracks using FL Studio</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">The ability use the core mechanics and stock tools bundled with FL Studio.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">Gaining basic knowledge about critical listening of audio and ear training for recognizing key elements of music.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">Understanding different genres of music and practically applying this knowledge to create tracks.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">Having basic knowledge about mixing and mastering a track using FL Studio.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-2 mb-md-3"> <i class="fa fa-check-circle text-success mt-1 mr-2"></i>
										<div class="media-body">Being able to deconstruct and recreate a finished track from the very beginning</div>
									</div>
									<!-- End Icon Block -->
								</div>
							</div>
						</div>
						<!-- End Info -->
						<div class="pt-3 mt-3 mt-md-5">
							<div class="row mb-4">
								<div class="col-12">
									<div class="row">
										<div class="col-lg-6">
											<h3 class="mb-4">Get certificate of completion</h3>
											<div class="mt-3">
												<img src="{{ URL::asset('public/frontend/images/new-image/certificate-1.jpg') }}" alt="" class="img-responsive" />
											</div>
										</div>
										<div class="col-lg-6 pt-3 pt-lg-0">
											<h3 class="mb-4">
                        <svg class="mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20">
                           <image x="0px" y="0px" width="40" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAABxCAMAAAD/PI8IAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABUFBMVEUcttL///8cttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttIcttL///+KO+1gAAAAbnRSTlMAACQ0QjqBz8M276ej31LHocHh8dE49VDt6flWZvde/Vh08377bo/njYXbMJ0yzSylvbUuKLe/uSZon62baofdWirVr9fTiYvjyeXrYnB8PHKDeJFKYFRcTGROdkZEsWy7SJmXlUCzxdl6y6s+k5AFCCAAAAABYktHRAH/Ai3eAAAAB3RJTUUH5QMfCxcVoYySFAAABkVJREFUeNrtnGlb20YQgJ2RDLgQLtuYKyYQjoJtLjsgyh3uK4SblHAH2qat/v/H2oDBMjPS7mr1WNp0Plra0byaPWdGDoWCKeAkmh4GyN/45k2lTRUErKo2GaQmAgFFBP0XFsCC1EIwETVWwLzUQRAR4S0HoqkFEbGeh9BsgErbKyCNXIhmEBGb/kdUAPEn6Kh8000gEaFZeUSupT+giKBHVUcsbMNjqiO+PkzFm5VDLJNwi3petEqiVcGOaiVsU3Eslgjo7UpONyXSoeiM+iKd7xRHhGSXqutikfC9ukv/E2E3wtSjEiJ8QAh7dYUQoQ8hjIZBHUSoQgib4yF1EKEfIRwIh9RBhF8xwkhIHUQYRAiHUiF1ECGNEDZoIXUQAQs0xjIhdRBRHw6PFK8qgAijCOHYyPPl4CPCOEI4nn25HnjE3EeEcCJX8gqCjpibxHxolNxROURj6rfpmdmcSy05LIDaaNFaKcTU3Pzj2rXg6pGLnxDCJet7qwwi6MvPj6xy8czsCkJYV6awEogQsYyftPBDs/MI4Wq5ugogptbKJ4eUoKJ1hPB1pwDLcI15jwjJ14VOG5qIpswmQtiPEFjOkVVeF6VAahqxy9yK86vSsKD+IOYjKMnNRb0uLcqtmrj0bvP2H7QobAfXUhK90b0tEIMFmzqnz3yMu1jW9AuhA7Sn4RjTPK2Bg3jatJM9DkbQexEN+7QGqG9sajqoB0+LNWHfdJBGdsZDrP0RU3vPECH5yYkwv9NZZFR2jPnwhO0NeYUYGXUGzMsQ0+IBp0jTrq+MfcAbRKOvhYnQNHvCzobCMdYyyWqMF4jw+wojYEEcnQGzWLND5nHsAeJumgMwL2f2xsI20qYtwj5TSUeEvk2aZgb9dc3uCAk60iL6jcMiyYig21T8fDDgHN0KXBi0wkvk/i6dxya5iJFaGnBJK/StzBV2rTpCEWKJmdZdLqNkIhpH9KcFK8VZZRGLnpnz1zghliBd5/KhTEQ4H6NduPoy3AAdkD0JZP6Az8idm3w+lIiYvaEBpy2LH+oa05x6fbK9RW7bynIYJRPR2KGPFJsd5aGVE7QSqPz0bnxHblrmjxdIQYQw3Ufb+xGjOtCKtVsLY+4AuWVYIFogAzHXTwKa4xm0SRwLwpgTJYsH1GGEBqNJchGhjy4iXCYPA8YEdn/s7vn6PXK5RoTQNSJcX9AuXM3QDXNou/nE49URzIcTjEcvuYiwRgPWnNvuIwGbTcx3x4VGi9gW4kowWOgKEb7SZaADjnF9dG/2EHBaxD6nWRINh7pAhG/zJGD7AcPkDpfo4jHZOYz8Oi4c8BVHNLZJQHPslE3HAvotAnacvhcPaYsiwjG91m8lme2J25y8SuW7i6C9IKJ+RZuzN8KhKDvJQjjjJi0hhJid6yGt+YM94vCoq9ZjQhFEqP+T7qN93NbAgRNhv7vUEjciaB9pYw5EjCEWj2f5y2XyjBcxW0XbMnkqZgwk7Qjn3KYH+RDh5AdpSrRbuFABDukafZ7EhwREu6lhRmwD+SQatQR9cZ/i5UA0BulvWpriLk3J4COcf/ZygQgJeru23u3KhQ+SxZLJZzLS9IyIoN2SgGZdhEmH0yNeh61k+JAVkYgoPUjDuaSKCNgp09whRzELIizQ82gb+37U+TknpZp7WZNrEhAzNvPoaFgaYIHx8CVG0rItS6sjInGoe5C3CdlVO8/1Xxt37pWxIUKC3o+2dXtQlmScbeQ1T8t8d/aIkVUS0LwRKA5ikdTpgjwPOiHapQpj7wNTq0sjgk7Po107gQG0QczY/ONKWqhIz2eIuaMBEnDYXVmwPxDhziZV6PaE6gvEjE3JxU0qaIQIItikCockbRsrighhOnzYPsgTPvSNlCHapQr/5k5B+0MsiMYs/WdAP44D2EfLEeF6iXbhoGBNvg/kBRFswocXDPWGvpUiInTSqcIVzhi+z+QJ8W6YBIzuBXSasSDCJR2qveIsx/KfPCDSo3BdMIbvJykg7vYSgD1TwQd8RKQq1cfPK22dLETA409tbF9B+F8KiCjhnlClkh+FQExnFHEhhdh6qQ7gI2J53mtOmT5aRAz9Yzlf3Ad5P0ohhko+Z6muV8uFRURIFv34r2IefEYs7FInWrea9rMKEuYR/wMb7uqegQKYRwAAAABJRU5ErkJggg==" />
                        </svg>
                        Jobs that require this skill:                     </h3>
											<ul class="certificate-uls pl-7">
												<li>Record Producer</li>
												<li>Audio Technician</li>
												<li>Recording Studio Manager</li>
												<li>Sound Designer</li>
												<li>Instrument Tech</li>
												<li>Sound Mixer</li>
												<li>Radio Broadcast Engineer</li>
												<li>Digital Audio Editor</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Collapse -->
						<div class=" pt-7 mt-3 mt-md-5">
							<div class="row mb-3">
								<div class="col-12 mb-2">
									<h3 class="mb-0">Course content</h3>
								</div>
								<div class="col-12 col-md-7">
									<div class="row">
										<div class="col-lg-12"> <span class="font-size-1"><strong>21</strong> Lessons</span>
											<span> • </span>
											<span class="font-size-1">07 hr 26 Hours min</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-5 text-md-right pt-2 pt-md-0"> <span class="card-all-toggle ml-md-4 mr-0">
               Collapse all sections
               </span>
								</div>
							</div>
							<div class="border-radius-top-right">
								<!-- Card -->
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading535">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2  " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse535" aria-expanded="false" aria-controls="coursesCollapse535">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 1</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        1 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        00 Hr 11 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse535" class="collapse  show" aria-labelledby="coursesHeading535">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Introduction</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 11 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading536">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse536" aria-expanded="false" aria-controls="coursesCollapse536">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 2</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        6 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        01 Hr 35 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse536" class="collapse  " aria-labelledby="coursesHeading536">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Starting a Project</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 08 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Controls and Playlist Window</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 24 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Windows in FL Studio Part - 1</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 18 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Windows in FL Studio Part - 2</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 13 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Understanding the Piano Roll, Core Sequencer and Playlist Window</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 11 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Understanding the Functionality of the Mixer Board</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 19 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading537">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse537" aria-expanded="false" aria-controls="coursesCollapse537">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 3</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        4 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        01 Hr 18 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse537" class="collapse  " aria-labelledby="coursesHeading537">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Pillars of Music Part - 1</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 22 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Pillars of Music Part - 2</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 20 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Melody Section</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 23 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>SFX and Applying Theoretical Knowledge Practically</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 11 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading538">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse538" aria-expanded="false" aria-controls="coursesCollapse538">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 4</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        2 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        00 Hr 54 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse538" class="collapse  " aria-labelledby="coursesHeading538">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Sampling</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 26 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Synthesis </span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 27 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading539">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse539" aria-expanded="false" aria-controls="coursesCollapse539">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 5</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        1 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        00 Hr 20 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse539" class="collapse  " aria-labelledby="coursesHeading539">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Using the Playlist Window</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 20 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading540">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse540" aria-expanded="false" aria-controls="coursesCollapse540">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 6</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        3 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        01 Hr 19 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse540" class="collapse  " aria-labelledby="coursesHeading540">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Using the Mix Window</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 23 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Gain Staging in Mixing</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 20 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>EQ, Compression and Effects</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 35 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- View More - Collapse -->
								<div class="card mb-0 curriculum-course">
									<div class="card-header card-collapse" id="coursesHeading541">
										<a class="btn btn-link btn-sm btn-block card-btn p-3 px-3 text-body-2 collapsed " href="javascript:;" role="button" data-toggle="collapse" data-target="#coursesCollapse541" aria-expanded="false" aria-controls="coursesCollapse541">
											<!-- Header --> <span class="row">
                        <span class="col-12 col-md-7">
                        <span class="media">
                        <span class="media-body">
                        <span class="text-body-2 section-nm font-weight-bold mr-5">Module 7</span>
											</span>
											</span>
											</span> <span class="col-12 col-md-5 text-md-right  pt-1 pt-md-0 pos-inherit">
                        <span class="row">
                        <span class="col-lg-12 pos-inherit">
                        <span class="d-flex align-items-center justify-content-md-end">
                        <span class="text-body-2 ">
                        4 Lessons                        </span>
											<span class="px-2  d-md-inline-block"> • </span>
											<span class="text-body-2">
                        01 Hr 46 Min                        </span>
											<span class="card-btn-toggle ml-4 mr-0 text-body-2">
                        <span class="card-btn-toggle-default"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											<span class="card-btn-toggle-active"><img src="https://www.efacourses.com/assets/frontend/efanew/img/right-arrow.svg" width="14"></span>
											</span>
											</span>
											</span>
											</span>
											</span>
											</span>
											<!-- End Header -->
										</a>
									</div>
									<div id="coursesCollapse541" class="collapse  " aria-labelledby="coursesHeading541">
										<div class="card-body p-0 py-3">
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Deconstructing Mercy by Badshah</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 33 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Working on the Drop </span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 27 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Full Arrangement</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 22 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Course Program -->
											<div class="border-bottom py-2 pl-3 pr-3 pr-md-5 pl-md-5">
												<div class="row">
													<div class="col-12 col-md-8">
														<a class="media font-size-1 mr-md-5" href="javascript:void(0);"> <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-0"></i>
															<span class="media-body">
                                 <span>Mixing, Mastering and Exporting</span>
															</span>
														</a>
													</div>
													<div class="col-12 col-md-4 text-md-right  py-1 py-md-0 pl-36 d-none d-md-inline-block">
														<div class="row">
															<div class="col-md-12 text-md-right"> <span class="text-body-2 font-size-1">00 Hr 22 Min</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Card -->
							<!-- Link -->
							<!-- End Link -->
						</div>
						<!-- End Collapse -->
						<!-- Info -->
						<div class="pt-3 mt-3 mt-md-5">
							<h3 class="mb-4">Requirements</h3>
							<div class="row">
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-3">
										<svg class="mr-2" width="13" fill="#8dc63f" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
											<g>
												<g>
													<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0
                              c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7
                              C514.5,101.703,514.499,85.494,504.502,75.496z" />
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
										<div class="media-body">Pc/Laptop</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-3">
										<svg class="mr-2" width="13" fill="#8dc63f" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
											<g>
												<g>
													<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0
                              c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7
                              C514.5,101.703,514.499,85.494,504.502,75.496z" />
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
										<div class="media-body">A demo version or a standard edition (preferred) of FL Studio 20.1 or higher.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-3">
										<svg class="mr-2" width="13" fill="#8dc63f" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
											<g>
												<g>
													<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0
                              c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7
                              C514.5,101.703,514.499,85.494,504.502,75.496z" />
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
										<div class="media-body">A pair of earphones or a set of speakers (studio monitors preferred) for audio playback.</div>
									</div>
									<!-- End Icon Block -->
								</div>
								<div class="col-lg-6">
									<!-- Icon Block -->
									<div class="media text-body font-size-1 mb-3">
										<svg class="mr-2" width="13" fill="#8dc63f" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
											<g>
												<g>
													<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0
                              c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7
                              C514.5,101.703,514.499,85.494,504.502,75.496z" />
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
										<div class="media-body">An audio interface (optional)</div>
									</div>
									<!-- End Icon Block -->
								</div>
							</div>
						</div>
						<!-- End Info -->
						<hr>
						<!-- Info -->
						<div class="border-top pt-7 mt-7">
							<h3 class="mb-4">Course description</h3>
							<div class="limited-description">
								<p><span xss="removed">FL (short for Fruity Loops) studio is a sequencer based production-centric workstation that
has a unique ability to enable the user to approach fundamental barriers of converting
their ideas into real songs. The basic nature of the software allows for the user to
instinctively create opportunities for himself to create something magical.</span>
								</p>
								<p>Since FL studio is based on sequencers, the basic nature of the software is to enable creativity. This tuto</p>
							</div>
							<div class="collapse full-description" id="collapseDescriptionSection">
								<p><span xss="removed">FL (short for Fruity Loops) studio is a sequencer based production-centric workstation that
has a unique ability to enable the user to approach fundamental barriers of converting
their ideas into real songs. The basic nature of the software allows for the user to
instinctively create opportunities for himself to create something magical.</span>
								</p>
								<p>Since FL studio is based on sequencers, the basic nature of the software is to enable creativity. This tutorial aims to help the user to understand the core concepts and machinations behind the DAW to help him use it in the most efficient manner possible.<span xss="removed"><br></span>
								</p>
								<p><span xss="removed">Link for the FL-Studio Software Download is given below:</span>
								</p>
								<p><span xss="removed">https://www.image-line.com/<br></span>
									<br>
								</p>
								<p>
									<br>
								</p>
							</div>
							<!-- Link -->
							<a class="link link-collapse small font-weight-bold pt-0 blue-text" data-toggle="collapse" href="#collapseDescriptionSection" role="button" aria-expanded="false" aria-controls="collapseDescriptionSection"> <span class="link-collapse-default" onclick="limitedDescription('read_more')">Show more</span>
								<span class="link-collapse-active" onclick="limitedDescription('read_less')">Show less</span>
							</a>
						</div>
						<!-- End Info -->
						<div class="py-2 py-md-2 mt-0 mt-md-0 p-0">
							<div class="text-center">
								<img src="{{ URL::asset('public/frontend/images/new-image/logo-vector.jpg ') }}" alt="" />
								<h3 class="mb-4">We’re in the News!</h3>
							</div>
							<ul class="news-logos news-logos d-flex justify-content-center align-items-center">
								<li>
									<img src="{{ URL::asset('public/frontend/images/new-image/business.jpg') }}" alt="" />
								</li>
								<li>
									<img src="{{ URL::asset('public/frontend/images/new-image/ani.jpg') }}" alt="" />
								</li>
								<li>
									<img src="{{ URL::asset('public/frontend/images/new-image/zee.jpg') }}" alt="" />
								</li>
								<li>
									<img src="{{ URL::asset('public/frontend/images/new-image/yahoo.jpg') }}" alt="" />
								</li>
								<li>
									<img src="{{ URL::asset('public/frontend/images/new-image/lokmat.jpg') }}" alt="" />
								</li>
							</ul>
						</div>
						<div class="border featured-reviews border-radius p-3 p-md-5 mt-3 mt-md-3"></div>
						<!-- Start Frequently Bought Together -->
						<!-- End Frequently Bought Together -->
						<div class="pt-2 mt-3 mt-md-5 efa-jobs">
							<div class="row align-items-center">
								<div class="col-12">
									<div class="d-flex align-items-center">
										<img src="{{ URL::asset('public/frontend/images/new-image/efa-jobs.png ') }}" />
										<h5 class="pl-3">*Coming soon</h5>
									</div>
								</div>
							</div>
							<div class="efa-jobs-banner mt-3">
								<div class="row justify-md-content-center align-items-md-center">
									<div class="col-md-8 col-8">
										<div class="py-5">
											<h4 class="mb-3 text-white">
                        <i class="fa fa-check-circle text-success mt-1 mr-2"></i> This course is eligible for efa jobs
                     </h4>
											<p class="text-white mb-0">Clear the online test after completing this course and be a part of the exclusive efa jobs directory. Let prospective employers see your test results and connect with you in your city for permanent or freelance work.</p>
										</div>
									</div>
									<div class="col-md-4 col-6 d-none  d-md-inline-flex">
										<img class="img-fluid home-bnner-img" src="{{ URL::asset('public/frontend/images/new-image/efa-job.png') }}" alt="Image Description">
									</div>
								</div>
							</div>
						</div>
						<!-- Author -->
						<div class="border-top pt-2 mt-3 mt-md-5">
							<h3 class="mb-4">About the instructor</h3>
							<h4 class="h5 mb-1">
            <a class="abot-com" href="https://www.efacourses.com/home/instructor_page/1">EFA Basics</a>
         </h4>
							<span class="d-block font-size-1 font-weight-bold">
         Digitial Courses in Indian Regional Languages         </span>
							<div class="row">
								<div class="col-lg-12 mt-3 mb-3 mb-md-4 mt-md-4">
									<div class="media align-items-center">
										<div class="avatar avatar-xl avatar-circle mb-0 mr-3">
											<img class="avatar-img" src="{{ URL::asset('public/frontend/images/new-image/1.jpg') }}" alt="Instructor image">
										</div>
										<div class="media-body">
											<!-- Icon Block -->
											<div class="media text-body font-size-1 mb-1">
												<div class="min-w-3rem text-center mr-2">
													<svg class="mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18">
														<image x="0px" y="0px" width="18" height="18" xlink:href="data:img/png;base64,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" />
													</svg>
												</div>
												<div class="media-body">253 Reviews</div>
											</div>
											<!-- End Icon Block -->
											<!-- Icon Block -->
											<div class="media text-body font-size-1 mb-1">
												<div class="min-w-3rem text-center mr-2">
													<svg class="mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="19">
														<image x="0px" y="0px" width="18" height="19" xlink:href="data:img/png;base64,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" />
													</svg>
												</div>
												<div class="media-body">7011 Students</div>
											</div>
											<!-- End Icon Block -->
											<!-- Icon Block -->
											<div class="media text-body font-size-1 mb-1">
												<div class="min-w-3rem text-center mr-2">
													<svg class="mb-0" fill="#f56752" width="18" height="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 467.968 467.968" style="enable-background:new 0 0 467.968 467.968;" xml:space="preserve">
														<g>
															<g>
																<path d="M264.704,96.512H51.2c-28.16,0-51.2,23.04-51.2,51.2v172.544c0,28.16,23.04,51.2,51.2,51.2h213.504
                                       c28.16,0,51.2-23.04,51.2-51.2V147.712C315.904,119.04,292.864,96.512,264.704,96.512z" />
															</g>
														</g>
														<g>
															<g>
																<path d="M430.08,124.672c-3.072,0.512-6.144,2.048-8.704,3.584l-79.872,46.08V293.12l80.384,46.08
                                       c14.848,8.704,33.28,3.584,41.984-11.264c2.56-4.608,4.096-9.728,4.096-15.36V154.368
                                       C467.968,135.424,450.048,120.064,430.08,124.672z" />
															</g>
														</g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
														<g></g>
													</svg>
												</div>
												<div class="media-body">22 Courses</div>
											</div>
											<!-- End Icon Block -->
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<!-- Info -->
									<p><span xss=removed>At EFA we aim to become India's largest on-demand learning platform for skills. We envision that talents and tutors from all over India get a platform through which they can spread their knowledge and make a career out of digital course creation. For students, our focus is providing them with the highest quality learning material at a fraction of cost, and complete ease of learning. </span>
										<br>
									</p>
									<!-- End Info -->
								</div>
							</div>
						</div>
						<!-- End Author -->
						<hr>
						<div class=" pt-2 mt-3 mt-md-5 efa-guarante">
							<div class="row justify-content-center align-items-center">
								<div class="col-lg-6">
									<div class="media align-items-center mb-3">
										<svg class="mb-0" fill="#7c89d7" width="60" height="60" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
											<g>
												<path d="m356.016 16h-70.018l-120.005 90h70.017z" />
												<path d="m477.012 16h-71.014l-120.005 90h70.017z" />
												<path d="m405.991 106h106.009v-75c0-1.157-.41-2.179-.657-3.261z" />
												<path d="m44.993 106h71.017l120.006-90h-70.018z" />
												<path d="m0 481c0 8.291 6.709 15 15 15h482c8.291 0 15-6.709 15-15v-345h-512zm181-270c0-5.405 2.9-10.386 7.603-13.052s10.474-2.593 15.117.19l150 90c4.512 2.71 7.28 7.588 7.28 12.861s-2.769 10.151-7.28 12.861l-150 90c-4.646 2.782-10.419 2.854-15.117.19-4.703-2.664-7.603-7.645-7.603-13.05z" />
												<path d="m15 16c-8.291 0-15 6.709-15 15v71.257l116.016-86.257z" />
												<path d="m211 237.499v127.002l105.85-63.501z" />
											</g>
										</svg>
										<div class="media-body">
											<h2> 21 Video <br>
                        Lessons 
                     </h2>
										</div>
									</div>
									<h3 class="mb-2"> Get instant & lifetime access</h3>
									<div class="pl-7">
										<p>This course contains pre-recorded videos that can be watched anytime</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="media align-items-center mb-3">
										<svg class="mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70">
											<image x="0px" y="0px" width="70" height="70" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAANAAAADiCAMAAAAIyLngAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABUFBMVEV814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814t814v////T+To/AAAAbnRSTlMAJEKt3+e3aoG5o7Wlp/OrNGKvse+Rz/VMvb/Bw8XHy7NYLnzNh0bpdDhQ26EycpvRYH7j7WyT3UpU8XDT2XjhMIX95WhOUiqdQHo8KER295W7+Ys2Zus6SFY+WoP7ianJ1yaXmWQsXNVuj16Nnzv2NXwAAAABYktHRG9VCGGBAAAAB3RJTUUH5QQBCjkSN8uYEAAAEYBJREFUeNrdXelDUzkQ7yAgKAsUlEPYaoFySEGsHCsigiAVpXigAoqICyqgvP//47aUo5PM5M2890oX5puSTObX5CVzZRKLVYYAoEIjlwVN1bVqr6b2+lXBBHVekeqvBiK44Z3SzauACBq8c6qrtDQR4PmrBI/XeOmnCJo8RM2VFigsnmsYjxevtEQh8bQYeC75DEGriefWpf6G4KaJx7tdaZlC4am18LRd5gmCegtPe0elhQqDp/OK4blzxfB0XTE83VcMz99XDE+CwHOJLVa461FUc68u2XMpYfV6DupL9V82TDDguam9ZXDoMoG67wloOJ38H2GCkdEHY+mHjEQZCaA8PXpw//+BCa6fKGnjE6RAk0JAeZqa/KfSmODxjelzgZ5Q4sTlgPI0M1pJ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" />
										</svg>
										<div class="media-body">
											<h2> 30 day <br>
                        money back 
                     </h2>
										</div>
									</div>
									<h3 class="mb-2">Don’t like it, no problems</h3>
									<p>If for any reason you are not happy with your purchase, simply email us within 30 days of purchase and we will refund you within 24 hours.</p>
								</div>
							</div>
						</div>
						<hr>
						<div class="border-top pt-2 mt-3 mt-md-5 how-tobuy-section">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="mb-3">How to buy this course:</h3>
									<p><span>STEP 1:</span> Click on BUY NOW button</p>
									<p><span>STEP 2:</span> Register yourself by filling basic details</p>
									<p><span>STEP 3:</span> Make payment via credit card, debit card, UPI Pay TM or other payment wallets</p>
									<p><span>STEP 4:</span> Get instant access and unlock the course</p>
								</div>
								<div class="col-lg-6 pt-3 pt-lg-0">
									<h3 class="mb-3">How to access the course:</h3>
									<p><span>STEP 1:</span> Login to your account</p>
									<p><span>STEP 2:</span> Click MY COURSES section and view your course</p>
									<p><span>STEP 3:</span> Click videos to begin</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="stickyBlockEndPoint"></div>
			<div class="modal fade modal-course-video" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="previewModalLabel">Free Sample Videos</h5>
							<button type="button" onclick="onload()" class="close" data-dismiss="modal" aria-label="Close">
								<svg height="15" viewBox="0 0 311 311.07733" width="15" xmlns="http://www.w3.org/2000/svg">
									<path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0" />
									<path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0" />
								</svg>
							</button>
						</div>
						<div class="modal-body">
							<div class="plyr__video-embed">
								<div id="vimeo-player"></div>
								<iframe width="100%" height="500" id="vimeovideo" src='https://www.youtube.com/embed/jUxA-eGnC3Y' allowfullscreen allow="autoplay" id="vimeo_video"></iframe>
							</div>
							<!-- <ul class="sample-video-ul">
								<li class="active" data-id="605471961"> <i class="fa fa-play-circle" aria-hidden="true"></i>
									<h6>Introduction</h6>
								</li>
								<li class="" data-id="605453667"> <i class="fa fa-play-circle" aria-hidden="true"></i>
									<h6>Starting a Project</h6>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copy to Clipboard Modal -->
			<div class="modal fade" id="copyToClipboardModal" tabindex="-1" role="dialog" aria-labelledby="copyToClipboardModalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<!-- Header -->
						<div class="modal-header">
							<h4 id="copyToClipboardModalTitle" class="mb-0">Share this course</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
									<path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
								</svg>
							</button>
						</div>
						<!-- End Header -->
						<!-- Body -->
						<div class="modal-body">
							<form>
								<!-- Clipboard -->
								<div class="input-group mb-4">
									<input id="copyToClipboard" type="text" class="form-control" value="https://www.efacourses.com/home/course/learn-fl-studio-music-production-for-beginners-course-in-hindi/77">
									<div class="input-group-append"> <a class="js-clipboard input-group-text btn btn-primary" href="javascript:;" data-hs-clipboard-options='{
                                    "contentTarget": "#copyToClipboard",
                                    "successText": "Copied!",
                                    "container": "#copyToClipboardModal"
                                    }'>Copy</a>
									</div>
								</div>
								<!-- End Clipboard -->
							</form>
							<!-- Social Networks -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item">
									<a class="btn btn-xs btn-icon btn-outline-secondary" target="_blank" href="http://www.facebook.com/sharer.php?u=https://www.efacourses.com/home/course/learn-fl-studio-music-production-for-beginners-course-in-hindi/77"> <i class="fa fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-xs btn-icon btn-outline-secondary" target="_blank" href="http://twitter.com/share?url=https://www.efacourses.com/home/course/learn-fl-studio-music-production-for-beginners-course-in-hindi/77&text=Efa Courses&hashtags=simplesharebuttons"> <i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-xs btn-icon btn-outline-secondary" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.efacourses.com/home/course/learn-fl-studio-music-production-for-beginners-course-in-hindi/77"> <i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-xs btn-icon btn-outline-secondary" target="_blank" href="mailto:?Subject=Efa Courses&Body=https://www.efacourses.com/home/course/learn-fl-studio-music-production-for-beginners-course-in-hindi/77"> <i class="fa fa-envelope"></i>
									</a>
								</li>
							</ul>
							<!-- End Social Networks -->
						</div>
						<!-- End Body -->
					</div>
				</div>
			</div>
        </div>
	</main>
    
    
</section>
<!----------------------------------Main content End--------------------------->




@stop
@section('js')
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/new-js/jquery.min.js ') }}"></script>
<script src="{{ URL::asset('public/frontend/js/new-js/player.js ') }}"></script>
			<script type="text/javascript">
				    function videostop(){
				    var $frame = $('iframe#vimeovideo');
				    var vidsrc = $frame.attr('src');
				    $frame.attr('src','');
				    $frame.attr('src', vidsrc);
				    }
				
				
				    $('#previewModal').on('hidden.bs.modal', function(e) {
				    videostop();
				    });
			</script>
			<script type="text/javascript">
				ga('create', 'UA-XXXXX-Y');
				    ga('require', 'ec');
				    ga('ec:addProduct', {
				      'id': 77,
				      'name': Learn FL Studio Music Production for Beginners - Course in Hindi,
				      'category': 'courses',
				    });
				    ga('ec:setAction', 'detail');
				    ga('send', 'pageview');
			</script>
            <script type="text/javascript">
                function switch_language(language) {
                
                        $.ajax({
                
                            url: 'https://www.efacourses.com/home/site_language',
                
                            type: 'post',
                
                            data: {
                
                                language: language
                
                            },
                
                            success: function(response) {
                
                                setTimeout(function() {
                
                                    location.reload();
                
                                }, 500);
                
                            }
                
                        });
                
                    }
                
                
                
                $(document).ready(function(){
                        $(".card-all-toggle").click(function(){
                            $(this).text($(this).text() == 'Expand all sections' ? 'Collapse all sections' : 'Expand all sections');
                        });
                        
                
                
                
                
                $('.card-all-toggle').on('click', function () {
                    $('.card .collapse').collapse('toggle');
                });
                
                    });
            </script>
            <!-- JS Global Compulsory -->
            <script src="https://www.efacourses.com/assets/frontend/efanew/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
            <script src="https://www.efacourses.com/assets/frontend/efanew/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script src="{{ URL::asset('public/frontend/js/new-js/hs-header.min.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/hs-unfold.min.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/jquery.countdown.min.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/hs-sticky-block.min.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/clipboard.min.js') }}"></script>
            <!-- JS Front -->
            <script src="{{ URL::asset('public/frontend/js/new-js/hs.core.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/hs.countdown.js') }}"></script>
            <script src="{{ URL::asset('public/frontend/js/new-js/hs.clipboard.js') }}"></script>
            <script type="text/javascript">
                toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "2000",
                        "hideDuration": "2000",
                        "timeOut": "2000",
                        "extendedTimeOut": "2000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
            </script>
            <!-- SHOW TOASTR NOTIFIVATION -->
            <!-- JS Plugins Init. -->
            <script>
                $(document).on('ready', function() {
                        // initialization of header
                        var header = new HSHeader($('#header')).init();
                
                        // initialization of mega menu
                        setTimeout(function() {
                            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();
                        }, 1000);
                
                        // initialization of unfold
                        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();
                
                        // initialization of form validation
                        $('.js-validate').each(function() {
                            $.HSCore.components.HSValidation.init($(this), {
                                rules: {
                                    confirmPassword: {
                                        equalTo: '#signupPassword'
                                    }
                                }
                            });
                        });
                
                        // initialization of show animations
                        $('.js-animation-link').each(function() {
                            var showAnimation = new HSShowAnimation($(this)).init();
                        });
                
                        // initialization of fancybox
                        $('.js-fancybox').each(function() {
                            var fancybox = $.HSCore.components.HSFancyBox.init($(this));
                        });
                
                        // initialization of slick carousel
                        $('.js-slick-carousel').each(function() {
                            var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
                        });
                
                        // initialization of select2
                        $('.js-custom-select').each(function() {
                            var select2 = $.HSCore.components.HSSelect2.init($(this));
                        });
                
                        // initialization of go to
                        $('.js-go-to').each(function() {
                            var goTo = new HSGoTo($(this)).init();
                        });
                
                        // initialization of sticky blocks
                        $('.js-sticky-block').each(function() {
                            var stickyBlock = new HSStickyBlock($(this)).init();
                        });
                
                        // initialization of clipboard
                        $('.js-clipboard').each(function() {
                            var clipboard = $.HSCore.components.HSClipboard.init(this);
                        });
                
                        // initialization of masked input
                        $('.js-masked-input').each(function() {
                            var mask = $.HSCore.components.HSMask.init($(this));
                        });
                
                        // initialization of quilljs editor
                        var quill = $.HSCore.components.HSQuill.init('.js-quill');
                    });
            </script>

@endsection