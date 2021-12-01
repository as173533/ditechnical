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

Route::prefix('admin')->group(function () {

    Route::get('clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
      Artisan::call('config:clear');
        return "Cache,View is cleared";
    });

    Route::middleware(['admin_not_logged_in'])->group(function () {
        Route::get('/', 'AuthController@get_login');
        Route::get('admin-login', ['uses' => 'AuthController@get_login', 'as' => 'admin-login']);
        Route::post('admin-login', ['uses' => 'AuthController@post_login', 'as' => 'admin-login']);
        Route::get('admin-lockscreen', ['uses' => 'AuthController@get_lockscreen', 'as' => 'admin-lockscreen']);
        Route::post('admin-lockscreen', ['uses' => 'AuthController@post_lockscreen', 'as' => 'admin-lockscreen']);
    });

    Route::middleware(['admin_logged_in'])->group(function () {
        Route::get('admin-dashboard', ['uses' => 'DashboardController@index', 'as' => 'admin-dashboard']);
        Route::get('admin-logout', ['uses' => 'AuthController@logout', 'as' => 'admin-logout']);
        Route::get('admin-profile', ['uses' => 'DashboardController@get_profile', 'as' => 'admin-profile']);
        Route::post('admin-profile', ['uses' => 'DashboardController@post_profile', 'as' => 'admin-profile']);

        Route::get('admin-change-password', ['uses' => 'DashboardController@get_change_password', 'as' => 'admin-change-password']);
        Route::post('admin-change-password', ['uses' => 'DashboardController@post_change_password', 'as' => 'admin-change-password']);
        Route::get('user-change-image', ['uses' => 'DashboardController@get_change_image', 'as' => 'user-change-image']);
        Route::post('user-change-image', ['uses' => 'DashboardController@post_change_image', 'as' => 'user-change-image']);

        Route::get('admin-logout', ['uses' => 'AuthController@logout', 'as' => 'admin-logout']);

        Route::get('settings', ['uses' => 'SettingsController@index', 'as' => 'settings']);
        Route::post('settings', ['uses' => 'SettingsController@store', 'as' => 'settings']);

        Route::get('login-history', ['uses' => 'LoginHistoryController@index', 'as' => 'login-history']);
        Route::get('login-history-list', ['uses' => 'LoginHistoryController@get_list', 'as' => 'login-history-list']);

        Route::get('emailNotification', ['uses' => 'EmailNotificationController@index', 'as' => 'emailNotification']);
        Route::get('emailNotification-edit/{id}', ['uses' => 'EmailNotificationController@get_edit', 'as' => 'emailNotification-edit']);
        Route::post('emailNotification-edit/{id}', ['uses' => 'EmailNotificationController@post_edit', 'as' => 'emailNotification-edit']);
        Route::get('emailNotification-list', ['uses' => 'EmailNotificationController@get_list', 'as' => 'emailNotification-list']);
        Route::get('emailNotification', ['uses' => 'EmailNotificationController@index', 'as' => 'emailNotification']);
        Route::get('emailNotification-edit/{id}', ['uses' => 'EmailNotificationController@get_edit', 'as' => 'emailNotification-edit']);
        Route::post('emailNotification-edit/{id}', ['uses' => 'EmailNotificationController@post_edit', 'as' => 'emailNotification-edit']);

        Route::get('contactus-list', ['uses' => 'ContactusController@get_list', 'as' => 'contactus-list']);
        Route::get('contactus', ['uses' => 'ContactusController@index', 'as' => 'contactus']);
        Route::get('contactus-view/{id}', ['uses' => 'ContactusController@get_view', 'as' => 'contactus-view']);
        
        Route::get('enquiry-list', ['uses' => 'EnquiryController@get_list', 'as' => 'enquiry-list']);
        Route::get('enquiry', ['uses' => 'EnquiryController@index', 'as' => 'enquiry']);
        Route::get('enquiry-view/{id}', ['uses' => 'EnquiryController@get_view', 'as' => 'enquiry-view']);
        
        Route::get('franchise-request-list', ['uses' => 'FranchiseRequestController@get_list', 'as' => 'franchise-request-list']);
        Route::get('franchise-request', ['uses' => 'FranchiseRequestController@index', 'as' => 'franchise-request']);
        Route::get('franchise-request-view/{id}', ['uses' => 'FranchiseRequestController@get_view', 'as' => 'franchise-request-view']);
        
        Route::get('subscriber-list', ['uses' => 'SubscribersController@get_list', 'as' => 'subscriber-list']);
        Route::get('subscribers', ['uses' => 'SubscribersController@index', 'as' => 'subscribers']);
        Route::get('subscriberleads-form-csv', ['uses' => 'SubscribersController@get_subscribers_csv', 'as' => 'subscriber-csv']);

        Route::resource('static-page', 'StaticpageController');

        Route::get('cms', ['uses' => 'CmsController@index', 'as' => 'cms']);
        Route::get('cms-list', ['uses' => 'CmsController@get_list', 'as' => 'cms-list']);
        Route::get('cms-edit/{id}', ['uses' => 'CmsController@get_edit', 'as' => 'cms-edit']);
        Route::post('cms-edit/{id}', ['uses' => 'CmsController@post_edit', 'as' => 'cms-edit']);

        Route::get('leads-form', ['uses' => 'LeadsController@get_list', 'as' => 'leads-form']);
        Route::get('leads-form-list-datatable', ['uses' => 'LeadsController@get_leads_form_list_datatable', 'as' => 'leads-form-list-datatable']);
        Route::get('leads-form-csv', ['uses' => 'LeadsController@get_leads_form_csv', 'as' => 'leads-form-csv']);

        Route::get('students', ['uses' => 'StudentController@get_user_list', 'as' => 'students']);
        Route::get('student-list-datatable', ['uses' => 'StudentController@get_user_list_datatable', 'as' => 'student-list-datatable']);
        Route::get('student-add', ['uses' => 'StudentController@get_add_user', 'as' => 'student-add']);
        Route::post('student-add', ['uses' => 'StudentController@post_add_user', 'as' => 'student-add']);
        Route::get('student-edit/{id}', ['uses' => 'StudentController@get_edit_user', 'as' => 'student-edit']);
        Route::put('student-edit/{id}', ['uses' => 'StudentController@post_edit_user', 'as' => 'student-edit']);
        Route::get('student-delete/{id}', ['uses' => 'StudentController@delete', 'as' => 'student-delete']);
        Route::get('student-assign-course/{id}', ['uses' => 'StudentController@get_edit_assign_course', 'as' => 'student-assign-course']);
        Route::put('student-assign-course/{id}', ['uses' => 'StudentController@post_edit_assign_course', 'as' => 'student-assign-course']);
        Route::get('/student-assign-course-list/{id}', 'StudentController@assign_course_list')->name('admin-student-assign-course-list');
        Route::get('/student-assign-course-list/datatables/{id}', 'StudentController@assign_course_list_datatables')->name('admin-student-assign-course-list-datatables');

        Route::get('/course/datatables', 'CourseController@datatables')->name('admin-course-datatables'); //JSON REQUEST
        Route::get('/course', 'CourseController@index')->name('admin-course-index');
        Route::get('/course/create', 'CourseController@create')->name('admin-course-create');
        Route::post('/course/create', 'CourseController@store')->name('admin-course-store');
        Route::get('/course/edit/{id}', 'CourseController@edit')->name('admin-course-edit');
        Route::post('/course/edit/{id}', 'CourseController@update')->name('admin-course-update');
        Route::get('/course/delete/{id}', 'CourseController@destroy')->name('admin-course-delete');
        Route::get('/course-question-answer/{id}', 'CourseController@question_answer')->name('admin-course-question-answer');
        Route::get('/course-question-answer/datatables/{id}', 'CourseController@question_answer_datatables')->name('admin-course-question-answer-datatables');

        Route::get('/question-answer/datatables', 'QuestionAnswerController@datatables')->name('admin-question-answer-datatables'); //JSON REQUEST
        Route::get('/question-answer', 'QuestionAnswerController@index')->name('admin-question-answer-index');
        Route::get('/question-answer/create', 'QuestionAnswerController@create')->name('admin-question-answer-create');
        Route::post('/question-answer/create', 'QuestionAnswerController@store')->name('admin-question-answer-store');
        Route::get('/question-answer/edit/{id}', 'QuestionAnswerController@edit')->name('admin-question-answer-edit');
        Route::post('/question-answer/edit/{id}', 'QuestionAnswerController@update')->name('admin-question-answer-update');
        Route::get('/question-answer/delete/{id}', 'QuestionAnswerController@destroy')->name('admin-question-answer-delete');

        Route::get('/student-exam-answer/datatables', 'StudentCourseAnswerController@datatables')->name('admin-student-exam-answer-datatables'); //JSON REQUEST
        Route::get('/student-exam-answer', 'StudentCourseAnswerController@index')->name('admin-student-exam-answer-index');
        Route::get('/student-exam-answer/edit/{id}', 'StudentCourseAnswerController@get_edit')->name('admin-student-exam-answer-edit');
        Route::put('/student-exam-answer-edit/{id}', ['uses' => 'StudentCourseAnswerController@post_edit', 'as' => 'student-exam-answer-edit']);
        Route::get('/student-exam-answer/view/{id}', 'StudentCourseAnswerController@view')->name('admin-student-exam-answer-view');
        
        Route::get('/slider/datatables', 'SliderController@datatables')->name('admin-slider-datatables'); //JSON REQUEST
        Route::get('/slider', 'SliderController@index')->name('admin-slider-index');
        Route::get('/slider/create', 'SliderController@create')->name('admin-slider-create');
        Route::post('/slider/create', 'SliderController@store')->name('admin-slider-store');
        Route::get('/slider/edit/{id}', 'SliderController@edit')->name('admin-slider-edit');
        Route::post('/slider/edit/{id}', 'SliderController@update')->name('admin-slider-update');
        Route::get('/slider/delete/{id}', 'SliderController@destroy')->name('admin-slider-delete');
        
        Route::get('/gallery/datatables', 'GalleryController@datatables')->name('admin-gallery-datatables'); //JSON REQUEST
        Route::get('/gallery', 'GalleryController@index')->name('admin-gallery-index');
        Route::get('/gallery/create', 'GalleryController@create')->name('admin-gallery-create');
        Route::post('/gallery/create', 'GalleryController@store')->name('admin-gallery-store');
        Route::get('/gallery/edit/{id}', 'GalleryController@edit')->name('admin-gallery-edit');
        Route::post('/gallery/edit/{id}', 'GalleryController@update')->name('admin-gallery-update');
        Route::get('/gallery/delete/{id}', 'GalleryController@destroy')->name('admin-gallery-delete');
    });
});
