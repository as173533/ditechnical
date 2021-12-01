<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\Thankyou;
use Craftsys\Msg91\Facade\Msg91;
use Craftsys\Msg91\Client;
use PDF;
use Illuminate\Support\Facades\Input;

/* * ************Request***************** */
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgotRequest;
use App\Http\Requests\ResetRequest;
use App\Http\Requests\ContactUsRequest;
use App\Http\Requests\ApplyOnlineRequest;
use App\Http\Requests\EnquiryRequest;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\DownloadICardRequest;
use App\Http\Requests\DownloadResultRequest;
use App\Http\Requests\SubscribersRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/* * ****************Model*********************** */
use URL;
use DB;
use Artisan;
use App\Model\UserMaster;
use App\Model\FranchiseRequest;
use App\Model\Contactus;
use App\Model\Enquiry;
use App\Model\StaticPage;
use App\Model\Settings;
use App\Model\Slider;
use App\Model\Course;
use App\Model\AssignCourse;
use App\Model\Exam;
use App\Model\Subscriber;
use App\Model\Gallery;

class SiteController extends Controller {

    public function index() {

        $data = [];
        $data['sliders'] = Slider::where('status', '1')->get();
        $data['featured_courses'] = Course::where('featured', '1')->where('status', '1')->get();
        $data['all_courses'] = Course::where('status', '1')->get();
        $data['gallries'] = Gallery::where('status', '1')->get();
        return view('site.index', $data);
    }

    public function get_signup() {
        $data = [];
        $MERCHANT_KEY = Settings::where('slug', 'merchant_key')->first();
        $data['MERCHANT_KEY'] = $MERCHANT_KEY->value;
        $SALT = Settings::where('slug', 'salt')->first();
        $data['SALT'] = $SALT->value;
        $check_test_mode = Settings::where('slug', 'test_mode')->first();
        if($check_test_mode->value==1)
        {
        $data['BASE_URL'] = 'https://sandboxsecure.payu.in'; //sandbox
        }else{
        $data['BASE_URL'] ='https://secure.payu.in';//production
        }
        return view('site.signup', $data);
    }

    public function post_signup(RegisterRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            if ($request->hasFile('image')) {
                $sample_image = $request->file('image');
                $imagename = $this->rand_string(14) . '.' . $sample_image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/user');
                $sample_image->move($destinationPath, $imagename);
                $input['image'] = $imagename;
            }
            $input['password'] = Hash::make($input['password']);
            $input['type_id'] = '2';
            $input['student_type'] = 'online';
            $input['activation_token'] = $this->rand_string(20);
            $totaluser = UserMaster::where('type_id', '2')->count();
            $input['registration_id'] = 'ditech/' . str_pad($totaluser + 1, 4, '0', STR_PAD_LEFT);
            $model = UserMaster::create($input);
            $slink = Route('success-signup', ['id' => $model->id]);
            $flink = Route('cancel-signup', ['id' => $model->id]);
//            $productInfo = "RegistrationFee" . substr(hash('sha256', mt_rand() . microtime()), 0, 10);
            $key = Settings::where('slug', 'merchant_key')->first();
            $MERCHANT_KEY = $key->value;
            $salt = Settings::where('slug', 'salt')->first();
            $SALT = $salt->value;
            $amount = '100';
            $txnid = 'ditechnical_'.substr(hash('sha256', mt_rand() . microtime()), 0, 10);
            $posted = array();
            $posted = array(
                'key' => $MERCHANT_KEY,
                'txnid' => $txnid,
                'amount' => 100,
                'firstname' => $model->full_name,
                'email' => $model->email,
                'productinfo' => 'Registration fee',
                'surl' => $slink,
                'furl' => $flink,
                'service_provider' => 'payu_paisa',
            );

            if (empty($posted['txnid'])) {
                $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            } else {
                $txnid = $posted['txnid'];
            }
            $hash = '';
            $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
            if (empty($posted['hash']) && sizeof($posted) > 0) {
                $hashVarsSeq = explode('|', $hashSequence);
                $hash_string = '';
                foreach ($hashVarsSeq as $hash_var) {
                    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                    $hash_string .= '|';
                }
                $hash_string .= $SALT;
                $hash = strtolower(hash('sha512', $hash_string));
                
            } elseif (!empty($posted['hash'])) {
                $hash = $posted['hash'];
                
            }


            $data_msg['msg'] = "Go for payment.";
            $data_msg['surl'] = $slink;
            $data_msg['furl'] = $flink;
            $data_msg['txnid'] = $txnid;
            $data_msg['hash'] = $hash;
            $data_msg['firstname'] = $model->full_name;
            $data_msg['email'] = $model->email;
            $data_msg['phone'] = $model->phone;
            // $request->session()->flash('success', 'You are successfully registered.');
            return response()->json($data_msg);
        }
    }

    public function post_success_signup(Request $request, $id) {
        
        $data_msg = [];
        $input = $request->all();
        
        $model = UserMaster::where('id', '=', $id)->first();
        $model->activation_token = $this->rand_string(20);
        $model->payment_status = '1';
        $model->save();
        $link = Route('active-account', ['id' => base64_encode($model->id), 'token' => $model->activation_token]);

        $email_setting = $this->get_email_data('user_registration', array('NAME' => $model->full_name, 'EMAIL' => $model->email, 'LINK' => $link));
        $email_data = [
            'to' => $model->email,
            'subject' => $email_setting['subject'],
            'template' => 'signup',
            'data' => ['message' => $email_setting['body']]
        ];
        $this->SendMail($email_data);

        
        return redirect()->route('/')->with('success', 'You are successfully registered.Verify Your Email.');
    }
    public function cancel_signup(Request $request, $id) {
        $user = UserMaster::find($id);
        $user->delete();
        return redirect()->route('signup')->with('error', 'Payment Failed.');
    }

    public function get_active_account(Request $request, $id, $token) {
        if ($id == "" && $token == "") {
            return redirect()->route('/')->with('error', 'Oops! Something went wrong in this url.');
        }
        $id = base64_decode($id);

        $model = UserMaster::where('id', $id)->where('activation_token', $token)->first();
        if (empty($model))
            return redirect()->route('/')->with('error', 'Requested url is no longer valid. Please try again.');
        else {
//            Auth::guard('frontend')->login($model);
//            $model->email_verified_at = Carbon::now()->toDateTimeString();
            $model->activation_token = NULL;
            $model->status = '1';
            $model->last_login = Carbon::now()->toDateTimeString();
            $model->save();

//            Mail::to($model->email)->send(new Thankyou($model));
            return redirect()->route('login')->with('success', 'Your account has been activated successfully.');
        }
    }

    function imageUpload($image) {
        $name = $this->rand_string(15) . time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads/users/');
        $image->move($destinationPath, $name);
        return $name;
    }

    public function get_login() {
        $data = [];
        return view('site.login', $data);
    }

    public function post_login(LoginRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $model = UserMaster::where('email', '=', $input['email'])->first();
            if (!empty($request->input('rememberMe'))) {
                $expire = time() + 172800;
                setcookie('email', $request->input('email'), $expire, '/');
                setcookie('password', $request->input('password'), $expire, '/');
            } else {
                $expire = time() - 172800;
                setcookie('email', '', $expire, '/');
                setcookie('password', '', $expire, '/');
            }
            Auth::guard('frontend')->login($model);
            $model->last_login = Carbon::now()->toDateTimeString();
            $model->save();
            $data_msg['link'] = Route('dashboard');

            $request->session()->flash('success', 'You are successfully logged in.');
            return response()->json($data_msg);
        }
    }

    public function get_forgot_password() {
        return view('site.forgot-one');
    }

    public function post_forgot_password(ForgotRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $input['reset_password_token'] = $this->rand_string(20);
            $model = UserMaster::where('email', '=', $input['email'])->first();
            $model->update($input);

            $link = Route('reset-password', ['id' => base64_encode($model->id), 'token' => $model->reset_password_token]);

            $email_setting = $this->get_email_data('forgot_password', array('NAME' => $model->first_name, 'EMAIL' => $input['email'], 'LINK' => $link));

            $email_data = [
                'to' => $model->email,
                'subject' => $email_setting['subject'],
                'template' => 'forgot_password',
                'data' => ['message' => $email_setting['body']]
            ];
            $this->SendMail($email_data);
            $data_msg['msg'] = 'Your reset password link has been sent to your email.';
            return response()->json($data_msg);
        }
    }

    public function get_reset_password($id, $token) {
        if ($id === "" && $token === "") {
            return redirect()->route('/')->with('error', 'oops! Something went wrong in this url.');
        }
        $id = base64_decode($id);
        $model = UserMaster::where('id', $id)->where('reset_password_token', $token)->first();
        if (empty($model))
            return redirect()->route('/')->with('error', 'oops! Something went wrong in this url.');
        else {
            Session::put('user_id', $id);
            Session::put('forgot_token', $token);
            $data = [];
            return view('site.forgot-two', $data);
        }
    }

    public function post_reset_password(ResetRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();

            $input['password'] = Hash::make($input['password']);

            $input['reset_password_token'] = NULL;
            $user_id = Session::get('user_id');
            $model = UserMaster::findOrFail($user_id);
            $model->update($input);
            Session::remove('user_id');
            Session::remove('forgot_token');
            $data_msg['link'] = Route('/');

            $request->session()->flash('success', 'Your password changed successfully.');
            return response()->json($data_msg);
        }
    }

    public function get_static_page(Request $request) {
        $data = [];
        if ($request->route()->named('privacy-policy')) {
            $data['model'] = StaticPage::where('slug', '=', 'privacy_policy')->first();
            return view('site.static_page', $data);
        } else if ($request->route()->named('return-refund-policy')) {
            $data['model'] = StaticPage::where('slug', '=', 'return_refund')->first();
            return view('site.static_page', $data);
        } else if ($request->route()->named('terms-condition')) {
            $data['model'] = StaticPage::where('slug', '=', 'terms_conditions')->first();
            return view('site.static_page', $data);
        } else if ($request->route()->named('faq-page')) {
            $data['model'] = Faq::where('status', '=', '1')->get();
            return view('site.faq', $data);
        } else {
            return redirect()->route('/');
        }
    }

    public function logout() {
        Auth::guard('frontend')->logout();
        return redirect('/')->with('success', 'You are successfully logged out.');
    }

    public function contact_us() {
        return view('site.contact_us');
    }

    public function post_contact(ContactUsRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $admin_email = UserMaster::where('type_id', '=', '1')->first();
            $input = $request->all();
            $contact = Contactus::create($input);

            if (!empty($admin_email)):
                $email_setting = $this->get_email_data('contact_us', array('ADMIN' => "Admin", 'NAME' => $contact->name, 'EMAIL' => $contact->email, 'SUBJECT' => $contact->subject,
                    'PHONE' => ($contact->phone != "") ? $contact->phone : 'Not Provided', 'MESSAGE' => $contact->message));
                $email_data = [
                    'to' => $admin_email->email,
                    'subject' => $email_setting['subject'],
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
                $this->SendMail($email_data);
            endif;

            $data_msg['msg'] = 'Thank you for contacting us. We will Contact you soon.';
            return response()->json($data_msg);
        }
    }

    public function post_apply_online(ApplyOnlineRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $admin_email = UserMaster::where('type_id', '=', '1')->first();
            $input = $request->all();
            $contact = FranchiseRequest::create($input);

            if (!empty($admin_email)):
                $email_setting = $this->get_email_data('franchise_request', array('ADMIN' => "Admin", 'NAME' => $contact->name, 'EMAIL' => $contact->email,
                    'PHONE' => ($contact->phone != "") ? $contact->phone : 'Not Provided', 'ADDRESS' => $contact->address));
                $email_data = [
                    'to' => $admin_email->email,
                    'subject' => $email_setting['subject'],
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
                $this->SendMail($email_data);
            endif;

            $data_msg['msg'] = 'Thank you for contacting us. We will Contact you soon.';
            return response()->json($data_msg);
        }
    }

    public function post_enquiry(EnquiryRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $admin_email = UserMaster::where('type_id', '=', '1')->first();
            $input = $request->all();
            $contact = Enquiry::create($input);

            if (!empty($admin_email)):
                $email_setting = $this->get_email_data('enquiry', array('ADMIN' => "Admin", 'NAME' => $contact->name, 'EMAIL' => $contact->email,
                    'PHONE' => ($contact->phone != "") ? $contact->phone : 'Not Provided', 'ADDRESS' => $contact->address, 'MESSAGE' => $contact->message));
                $email_data = [
                    'to' => $admin_email->email,
                    'subject' => $email_setting['subject'],
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
                $this->SendMail($email_data);
            endif;

            $data_msg['msg'] = 'Thank you for contacting us. We will Contact you soon.';
            return response()->json($data_msg);
        }
    }

    public function search_user() {
        $data = [];
        return view('site.search', $data);
    }

    public function about_us() {
        $data = [];
        return view('site.about_us', $data);
    }

    public function i_card() {
        $data = [];
        return view('site.i_card', $data);
    }

    public function download_i_card(DownloadICardRequest $request) {
        $data = [];
        $input = $request->all();
        $data['assigncourse'] = $assigncourse = AssignCourse::where('enrollment_id', $input['enrollment_id'])->first();
        $pdf = PDF::loadView('mail.i_card', $data);
        $path = public_path('pdf/');
        $filename = $assigncourse->enrollment_id . 'i-card.pdf';
        $pdf->save($path . '/' . $filename);
        $pdf = URL::asset('public/pdf/' . $filename);
        // $pdf->download($assigncourse->enrollment_id.'i-card.pdf');
        // return $pdf->stream();
        $data_msg['msg'] = 'I-Card downloaded successfully.';
        $data_msg['file'] = $pdf;
        return response()->json($data_msg);
        // return redirect()->back();
    }

    public function affiliation_center() {
        $data = [];
        return view('site.affiliation_center', $data);
    }

    public function affiliation_process() {
        $data = [];
        return view('site.affiliation_process', $data);
    }

    public function apply_online() {
        $data = [];
        return view('site.apply_online', $data);
    }

    public function certificate_verification() {
        $data = [];

        return view('site.certificate_verification', $data);
    }

    public function verify_certificate_verification(Request $request) {
        $data = [];

        $enrollment = $request->enrollment_id;
        $data['status'] = '1';
        $data['assigncourse'] = $assigncourse = AssignCourse::where('enrollment_id', $enrollment)->first();
        if (!empty($assigncourse)) {
            $data['model'] = Exam::where('user_id', $assigncourse->user_id)->where('course_id', $assigncourse->course_id)->first();
        }

        return view('site.certificate_verification', $data);
    }

    public function courses() {
        $data = [];
        $data['all_courses'] = Course::where('status', '1')->get();
        return view('site.courses', $data);
    }

    public function get_course_details($id) {
        $data = [];
        $data['course_detail'] = $details = Course::findOrFail(base64_decode($id));
        if (!$details) {
            return redirect()->route('/')->with('error_msg', 'Something went wrong please check your input!');
        }
        return view('site.course_detail', $data);
    }

    public function director_message() {
        $data = [];
        return view('site.director_message', $data);
    }

    public function evaluation() {
        $data = [];
        return view('site.evaluation', $data);
    }

    public function examination_process() {
        $data = [];
        return view('site.examination_process', $data);
    }

    public function gallery() {
        $data = [];
        $data['gallries'] = Gallery::where('status', '1')->get();
        return view('site.gallery', $data);
    }

    public function iso_certification() {
        $data = [];
        return view('site.iso_certification', $data);
    }

    public function mca() {
        $data = [];
        return view('site.mca', $data);
    }

    public function mission_and_vision() {
        $data = [];
        return view('site.mission_and_vision', $data);
    }

    public function msme_registeration() {
        $data = [];
        return view('site.msme_registeration', $data);
    }

    public function quality_policy() {
        $data = [];
        return view('site.quality_policy', $data);
    }

    public function registered_students() {
        $data = [];
        return view('site.registered_students', $data);
    }

    public function registration_process() {
        $data = [];
        return view('site.registration_process', $data);
    }

    public function result() {
        $data = [];
        return view('site.result', $data);
    }

    public function download_result(DownloadResultRequest $request) {
        $data = [];
        $input = $request->all();
        $data['assigncourse'] = $assigncourse = AssignCourse::where('enrollment_id', $input['enrollment_id'])->first();
        $data['model'] = Exam::where('user_id', $assigncourse->user_id)->where('course_id', $assigncourse->course_id)->first();
        $link = Route('verify-certificate-verification') . '?enrollment_id=' . $assigncourse->enrollment_id;
        \QrCode::size(200)
                ->format('png')
                ->generate("Certificate Verification: $link", public_path('/frontend/qrcode/' . $assigncourse->user->full_name . 'qrcode.png'));
        $data['qrcode'] = URL::asset('public/frontend/qrcode/' . $assigncourse->user->full_name . 'qrcode.png');
        $pdf = PDF::loadView('mail.exam_result', $data);
        $path = public_path('pdf/');
        $filename = $assigncourse->enrollment_id . 'result.pdf';
        $pdf->save($path . '/' . $filename);
        $pdf = URL::asset('public/pdf/' . $filename);
        // $pdf->download($assigncourse->enrollment_id.'i-card.pdf');
        // return $pdf->stream();
        $data_msg['msg'] = 'Result downloaded successfully.';
        $data_msg['file'] = $pdf;
        return response()->json($data_msg);
        // return redirect()->back();
    }

    public function toppers_talk() {
        $data = [];
        return view('site.toppers_talk', $data);
    }

    public function why_ditech() {
        $data = [];
        return view('site.why_ditech', $data);
    }

    public function wishlist() {

        $data = [];

        return view('site.wishlist', $data);
    }

    public function cart() {
        $data = [];
        return view('site.cart', $data);
    }

    public function checkout($id) {
        if (Auth()->guard('frontend')->guest()) {
            return redirect()->route('login')->with('error', 'Please login to your account!');
        } else {
            $data = [];
            $user_id = Auth()->guard('frontend')->user()->id;
            $assign_course = AssignCourse::where('user_id', $user_id)->where('course_id', base64_decode($id))->first();

            if (!empty($assign_course)) {
                return redirect()->back()->with('error', 'you have already purchased this course once.');
            }
            $data['course'] = $details = Course::findOrFail(base64_decode($id));
            $data['razorpay'] = Settings::where('slug', 'razorpay_key')->first();
            if (!$details) {
                return redirect()->route('/')->with('error', 'Something went wrong please check your input!');
            }
            return view('site.checkout', $data);
        }
    }

    public function post_checkout(CheckoutRequest $request, $id) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $amount = 0;

            $data_msg['amount'] = $input['amount'] . '00';

            $data_msg['msg'] = "purschase Course.";
            return response()->json($data_msg);
        }
    }

    public function apply_coupon(CouponRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $amount = 0;

            $details = Package::findOrFail($input['package_id']);
            $detailsprice = $this->convertprice($details->price);
            $coupon = Coupon::where('coupon_id', $input['coupon_code'])->where('status', '1')->first();
            $couponamount = $this->convertprice($coupon->amount);
            $price = $detailsprice - $couponamount;

            $data_msg['amount'] = $price;
            $data_msg['coupon'] = $coupon->coupon_id;

            $data_msg['msg'] = "Coupon applied successfully.";
            return response()->json($data_msg);
        }
    }

    public function post_subscribers(SubscribersRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $admin_email = UserMaster::where('type_id', '=', '1')->first();
            $input = [];
            $input['email'] = $request->input('subscribe_email');
            $contact = Subscriber::create($input);

            // if (!empty($admin_email)):
            //     $email_setting = $this->get_email_data('contact_us', array('ADMIN' => "Admin", 'NAME' => $contact->name, 'EMAIL' => $contact->email, 'SUBJECT' => $contact->subject,
            //         'PHONE' => ($contact->phone != "") ? $contact->phone : 'Not Provided', 'MESSAGE' => $contact->message));
            //     $email_data = [
            //         'to' => $admin_email->email,
            //         'subject' => $email_setting['subject'],
            //         'template' => 'signup',
            //         'data' => ['message' => $email_setting['body']]
            //     ];
            //     $this->SendMail($email_data);
            // endif;

            $data_msg['msg'] = 'Thank you for subscribe us. We will Contact you soon.';
            return response()->json($data_msg);
        }
    }

}
