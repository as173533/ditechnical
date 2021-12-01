<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::middleware(['web'])->group(function () {
    Route::get('', ['uses' => 'SiteController@index', 'as' => 'index']);
    Route::get('/', ['uses' => 'SiteController@index', 'as' => '/']);
    Route::get('index', ['uses' => 'SiteController@index', 'as' => 'index']);
    Route::get('privacy-policy', 'SiteController@get_static_page')->name('privacy-policy');
    Route::get('terms-condition', 'SiteController@get_static_page')->name('terms-condition');
    Route::get('return-refund-policy', 'SiteController@get_static_page')->name('return-refund-policy');
    Route::get('about-us', 'SiteController@about_us')->name('about-us');
    Route::get('contact-us', 'SiteController@contact_us')->name('contact-us');
    Route::post('contact-us', 'SiteController@post_contact')->name('contact-us');
    Route::post('post-enquiry', 'SiteController@post_enquiry')->name('post-enquiry');
    Route::get('i-card', 'SiteController@i_card')->name('i-card');
    Route::post('download-i-card', 'SiteController@download_i_card')->name('download-i-card');
    
    Route::get('affiliation-center', 'SiteController@affiliation_center')->name('affiliation-center');
    Route::get('affiliation-process', 'SiteController@affiliation_process')->name('affiliation-process');
    Route::get('apply-online', 'SiteController@apply_online')->name('apply-online');
    Route::post('apply-online', 'SiteController@post_apply_online')->name('apply-online');
    Route::get('certificate-verification', 'SiteController@certificate_verification')->name('certificate-verification');
    Route::get('verify-certificate-verification', 'SiteController@verify_certificate_verification')->name('verify-certificate-verification');
    Route::get('courses', 'SiteController@courses')->name('courses');
    Route::get('course-details/{id}', 'SiteController@get_course_details')->name('course-details');
    Route::get('director-message', 'SiteController@director_message')->name('director-message');
    Route::get('evaluation', 'SiteController@evaluation')->name('evaluation');
    Route::get('examination-process', 'SiteController@examination_process')->name('examination-process');
    Route::get('gallery', 'SiteController@gallery')->name('gallery');
    Route::get('iso-certification', 'SiteController@iso_certification')->name('iso-certification');
    Route::get('mca', 'SiteController@mca')->name('mca');
    Route::get('mission-and-vision', 'SiteController@mission_and_vision')->name('mission-and-vision');
    Route::get('msme-registeration', 'SiteController@msme_registeration')->name('msme-registeration');
    Route::get('quality-policy', 'SiteController@quality_policy')->name('quality-policy');
    Route::get('registered-students', 'SiteController@registered_students')->name('registered-students');
    Route::get('registration-process', 'SiteController@registration_process')->name('registration-process');
    Route::get('result', 'SiteController@result')->name('result');
    Route::post('download-result', 'SiteController@download_result')->name('download-result');
    Route::get('toppers-talk', 'SiteController@toppers_talk')->name('toppers-talk');
    Route::get('why-ditech', 'SiteController@why_ditech')->name('why-ditech');
    Route::get('checkout/{id}', ['uses' => 'SiteController@checkout', 'as' => 'checkout']);
    Route::get('cart', ['uses' => 'SiteController@cart', 'as' => 'cart']);
    Route::get('wishlist', ['uses' => 'SiteController@wishlist', 'as' => 'wishlist']);
    Route::post('post-subcribers', 'SiteController@post_subscribers')->name('post-subcribers');
    
    
});
Route::middleware(['user_not_logged_in'])->group(function () {

    Route::get('signup', 'SiteController@get_signup')->name('signup');
    Route::post('signup', 'SiteController@post_signup')->name('signup');
    Route::post('success-signup/{id}', 'SiteController@post_success_signup')->name('success-signup');
    Route::post('cancel-signup/{id}', 'SiteController@cancel_signup')->name('cancel-signup');
    Route::get('active-account/{id}/{token}', 'SiteController@get_active_account')->name('active-account');
//    Route::post('resend-active-token', 'SiteController@resend_active_token')->name('resend-active-token');
    Route::get('login', 'SiteController@get_login')->name('login');
    Route::post('login', 'SiteController@post_login')->name('login');
    Route::get('forgot-password', 'SiteController@get_forgot_password')->name('forgot-password');
    Route::post('forgot-password', 'SiteController@post_forgot_password')->name('forgot-password');
    Route::get('reset-password/{id}/{token}', 'SiteController@get_reset_password')->name('reset-password');
    Route::post('set-password', 'SiteController@post_reset_password')->name('set-password');
});
Route::middleware(['user_logged_in'])->group(function () {
    Route::get('dashboard', ['uses' => 'UserController@dashboard', 'as' => 'dashboard']);
    Route::get('my-profile', 'UserController@get_profile')->name('my-profile');
    Route::post('post-myprofile', 'UserController@post_profile')->name('post-myprofile');
    Route::post('post-reset-password', 'UserController@reset_password')->name('post-reset-password');
    Route::get('logout', ['uses' => 'SiteController@logout', 'as' => 'logout']);

    Route::get('user-courses', 'UserController@course')->name('user-course');
    Route::get('user-course-datatable', 'UserController@course_datatable')->name('user-course-datatable');

    Route::get('exam-guide', ['uses' => 'UserController@user_guide', 'as' => 'exam-guide']);
    Route::get('exam/{id}', ['uses' => 'UserController@exam', 'as' => 'exam']);
    Route::get('give-exam/{id}', ['uses' => 'UserController@give_exam', 'as' => 'give-exam']);
    Route::post('post-give-exam/{id}', ['uses' => 'UserController@post_give_exam', 'as' => 'post-give-exam']);
    Route::post('pay-supply-fee/{id}', ['uses' => 'UserController@pay_supply_fee', 'as' => 'pay-supply-fee']);
    
    
    
    Route::post('checkout/{id}', ['uses' => 'SiteController@post_checkout', 'as' => 'checkout']);
//    Route::post('apply-coupon', ['uses' => 'SiteController@apply_coupon', 'as' => 'apply-coupon']);
    Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');
    Route::get('exam-i-card/{id}', ['uses' => 'UserController@exam_i_card', 'as' => 'exam-i-card']);
    Route::get('exam-certificate/{id}', ['uses' => 'UserController@exam_certificate', 'as' => 'exam-certificate']);
    Route::get('exam-result/{id}', ['uses' => 'UserController@exam_result', 'as' => 'exam-result']);
});
