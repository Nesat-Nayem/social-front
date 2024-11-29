<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class SocialController extends Controller
{


    public function index()
    {
        // Fetch the posts from the Node.js backend
        $response = Http::get('https://social-backend-gamma-eight.vercel.app/api/posts');

        // Check if the response is successful
        if ($response->successful()) {
            $posts = $response->json()['data'];
        } else {
            $posts = [];
        }

        // Pass the posts to the view
        return view('frontend.home', compact('posts'));
    }
    public function login()
    {
        return view('frontend.login');
    }

    // register
    public function register()
    {
        return view('frontend.register');
    }
    // about
    public function about()
    {
        return view('frontend.about');
    }
    // social issue
    public function socialIssues()
    {
        return view('frontend.socialIssues');
    }


    // public pull
    public function publicPull()
    {
        return view('frontend.publicPull');
    }
    // public pull
    public function votersSummary()
    {
        return view('frontend.votersSummary');
    }

    // Daily News
    public function dailyNews()
    {
        // Fetch news from the API
        $response = Http::get('https://social-backend-gamma-eight.vercel.app/api/news');

        // Check if the response is successful
        if ($response->successful()) {
            $news = $response->json()['data'];
        } else {
            $news = [];
        }

        // Pass the news to the view
        return view('frontend.dailyNews', compact('news'));
    }

    // Add methods for like and comment
    public function likeNews($id)
    {
        $response = Http::post("https://social-backend-gamma-eight.vercel.app/api/news/{$id}/like");
        return response()->json($response->json());
    }

    public function commentNews(Request $request, $id)
    {
        $response = Http::post("https://social-backend-gamma-eight.vercel.app/api/news/{$id}/comment", [
            'text' => $request->text
        ]);
        return response()->json($response->json());
    }



    public function uploadFile(Request $request)
    {
        try {
            $file = $request->file('file');
            $type = $request->input('type');

            // Upload to Cloudinary
            $url = $this->uploadToCloudinary($file, $type);

            return response()->json(['success' => true, 'url' => $url]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }


    // opinion poll
    public function opinionPoll()
    {
        return view('frontend.opinionPoll');
    }
    // medicalIssue
    public function medicalIssue()
    {
        return view('frontend.medicalIssue');
    }
    // profile
    public function profile()
    {
        return view('frontend.profile');
    }

    // supportAndHelp
    public function supportAndHelp()
    {
        return view('frontend.supportAndHelp');
    }
    //privacy
    public function privacy()
    {
        return view('frontend.privacy');
    }
    //addPost
    public function addPost()
    {
        return view('frontend.addPost');
    }
    //bloodDonation
    public function bloodDonation()
    {
        return view('frontend.bloodDonation');
    }
    //nearbyBloodDonors
    public function nearbyBloodDonors()
    {
        return view('frontend.nearbyBloodDonors');
    }
    //bloodBanks
    public function bloodBanks()
    {
        return view('frontend.bloodBanks');
    }
    //hospital
    public function hospital()
    {
        return view('frontend.hospital');
    }
    //hospital
    public function timelinePhotos()
    {
        return view('frontend.timelinePhotos');
    }
    //timelineVideos
    public function timelineVideos()
    {
        return view('frontend.timelineVideos');
    }
    // helpDetails
    public function helpDetails()
    {
        return view('frontend.helpDetails');
    }
    // legislativeUpdates
    public function legislativeUpdates()
    {
        // Fetch legislative updates from the API
        $response = Http::get('https://social-backend-gamma-eight.vercel.app/api/legislatives');

        // Check if the response is successful
        if ($response->successful()) {
            $legislatives = $response->json()['data'];
        } else {
            $legislatives = [];
        }

        // Pass the data to the view
        return view('frontend.legislativeUpdates', compact('legislatives'));
    }

    // schemesUpdate
    public function schemesUpdate()
    {
        return view('frontend.schemesUpdate');
    }
    // schemesUpdate
    public function schemeDetails()
    {
        return view('frontend.schemeDetails');
    }
    public function audioProdcastNews()
    {
        return view('frontend.audioProdcastNews');
    }
    public function weatherEmergencyAleart()
    {
        return view('frontend.weatherEmergencyAleart');
    }
    public function caseJourneyTracker()
    {
        return view('frontend.caseJourneyTracker');
    }
    public function inDepthCaseStudies()
    {
        return view('frontend.inDepthCaseStudies');
    }


    public function loginSubmit(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ], [
            'userName.required' => 'Username is required',
            'password.required' => 'Password is required'
        ]);

        $credentials = $request->only(['userName', 'password']);

        try {
            $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/auth/login', $credentials);

            if ($response->successful()) {
                $responseData = $response->json();
                $token = $responseData['token'];
                $userData = $responseData['data'];

                session([
                    'auth_token' => $token,
                    'user_name' => $userData['name'],
                    'user_userName' => $userData['userName']
                ]);

                return redirect()->route('home')->with('userData', $userData);
            } else {
                $responseData = $response->json();
                $errorMessage = isset($responseData['message']) ? $responseData['message'] : 'Invalid credentials. Please try again.';
                return back()->withErrors(['error' => $errorMessage]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Login failed. Please try again later.']);
        }
    }

    public function registerSubmit(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:10|max:10',
            'fullName' => 'required|min:3',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ], [
            'phone.required' => 'Phone number is required',
            'phone.min' => 'Phone number must be 10 digits',
            'phone.max' => 'Phone number must be 10 digits',
            'fullName.required' => 'Full name is required',
            'fullName.min' => 'Full name must be at least 3 characters',
            'username.required' => 'Username is required',
            'username.unique' => 'This username is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ]);

        $userData = [
            'name' => $request->fullName,
            'phone' => $request->phone,
            'userName' => $request->username,
            'password' => $request->password,
            'location' => '',
            'role' => 'user'
        ];



        $user_Session_DAta = [
            'name' => $request->fullName,
            'phone' => $request->phone,
            'userName' => $request->username,
            'password' => $request->password,
            'role' => 'user'
        ];


        $otp = rand(1000, 9999);
        $phone = $request->phone;

        $request->session()->put('key', $user_Session_DAta);
        $request->session()->put('otp', $otp);

        $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/auth/signup', $userData);

        if ($response->successful()) {

        } else {
            $errorMessage = $response->json()['message'] ?? 'Registration failed';
            return back()->withErrors(['error' => $errorMessage]);
        }

        try {

            $message = "Dear {$request->fullName},

            Thank you for registering on voiz.info. To complete your registration, please use the following One-Time Password (OTP): $otp

            This OTP is valid for the next 5 minutes. Please do not share it with anyone.

            If you did not initiate this request, kindly ignore this message.

            Best regards,";


            $send_otp = Http::post('http://wapi.nationalsms.in/wapp/v2/api/send?apikey=dc8b10230c2e4632ac3b3456e78c4187&mobile=' . $phone . '&msg=' . $message . '');

            $result = json_decode($send_otp);

            // $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/auth/signup', $userData);

            if ($result->status == 'success' && $result->statuscode == '200') {
                session(['otp_time_in' => Carbon::now()]);
                return redirect()->route('verify_otp')->with('success', 'OTP sent to WhatsApp successfully!');
            } else {
                // $response->json()['message'] ?? 'Registration failed'
                $errorMessage = $result->msg;
                return back()->withErrors(['error' => $errorMessage]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function verify_otp(Request $request)
    {
        return view('frontend.verify_otp');
    }




    // public function verify_otp_submit(Request $request) {

    //     $string = implode(', ', array_map(function ($key, $value) {
    //         return "$value";
    //     }, array_keys($request->input), $request->input));


    //     $otp = implode('', $request->input);
    //     $sent_otp = $request->session()->get('otp');
    //     $userData = $request->session()->get('key');

    //     if ($otp == $sent_otp) {
    //          $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/auth/signup', $userData);

    //          if ($response->successful()) {
    //             return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    //         } else {
    //             $errorMessage = $response->json()['message'] ?? 'Registration failed';
    //             return back()->withErrors(['error' => $errorMessage]);
    //         }

    //     }else{

    //         $errorMessage = 'Invalid Otp';
    //             return redirect()->back()->withErrors(['error' => $errorMessage]);
    //     }

    // }


    public function verify_otp_submit(Request $request)
    {
        $otp = implode('', $request->input);
        $sent_otp = $request->session()->get('otp');
        $userData = $request->session()->get('key');

        $phone = $userData['phone'];


        if ($otp == $sent_otp) {
            $verify = verifyuser($phone);

            // Get location before making the signup request
            // $location = $this->getLocationFromIP();
            // $userData['location'] = $location; // Add location to userData

            // $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/auth/signup', $userData);

            // if ($response->successful()) {
                return redirect()->route('login')->with('success', 'Registration successful! Please login.');
            // } else {
            //     $errorMessage = $response->json()['message'] ?? 'Registration failed';
            //     return back()->withErrors(['error' => $errorMessage]);
            // }
        } else {
            return redirect()->back()->with('invalid', 'Invalid Otp.');;
        }
    }



    public function resendotp(Request $request){
        $userData = $request->session()->get('key');

//         Array
// (
//     [name] => Vikash Saini
//     [phone] => 7357791943
//     [userName] => Vikash12
//     [password] => 12345678
//     [role] => user
// )
        $otp = rand(1000, 9999);
        // echo "<pre>";
        $phone = $userData['phone'];



        $message = "Dear {$userData['name']},

            Thank you for registering on voiz.info. To complete your registration, please use the following One-Time Password (OTP): $otp

            This OTP is valid for the next 5 minutes. Please do not share it with anyone.

            If you did not initiate this request, kindly ignore this message.

            Best regards,";


            $send_otp = Http::post('http://wapi.nationalsms.in/wapp/v2/api/send?apikey=dc8b10230c2e4632ac3b3456e78c4187&mobile=' . $phone . '&msg=' . $message . '');

            $result = json_decode($send_otp);

            if ($result->status == 'success' && $result->statuscode == '200'){
                session(['otp_time_in' => Carbon::now()]);
                $request->session()->put('otp', $otp);
                return redirect()->back()->with('success', 'OTP sent to WhatsApp successfully!');
            } else {
                $errorMessage = $response->json()['message'] ?? 'Resanding Failed';
                return back()->withErrors(['error' => $errorMessage]);
            }
    }




    //     private function getLocationFromIP()
// {
//     $ip = request()->ip();
//     $apiKey = '99491060807843a4ba728caa88acb4e3';

    //     dd($ip);

    //     $response = Http::get("https://api.ipgeolocation.io/ipgeo", [
//         'apiKey' => $apiKey,
//         'ip' => $ip
//     ]);

    //     if ($response->successful()) {
//         $data = $response->json();
//         return $data['zipcode']; // Returns only the zipcode as string
//     }

    //     return null;
// }

    private function getLocationFromIP()
    {
        $ip = request()->header('x-forwarded-for') ??
            request()->ip() ??
            request()->getClientIp() ??
            request()->server('REMOTE_ADDR');

        // For testing, you can also use a service to get your public IP
        if ($ip == '127.0.0.1') {
            $response = Http::get('https://api.ipify.org?format=json');
            $ip = $response->json()['ip'];
        }

        $apiKey = '99491060807843a4ba728caa88acb4e3';



        $response = Http::get("https://api.ipgeolocation.io/ipgeo", [
            'apiKey' => $apiKey,
            'ip' => $ip
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return $data['city'];
        }

        return null;
    }


    public function forgotpassword(Request $request){
        return view('frontend.forgotpassword');
    }


    public function forgotpassword_submit(Request $request){
        $validated = $request->validate([
            'phone' => 'required|numeric',
        ]);


        $otp = rand(1000, 9999);
        // echo "<pre>";
        $phone = $request->phone;

        $message = "Dear TEST,

            Thank you for registering on voiz.info. To complete your registration, please use the following One-Time Password (OTP): $otp

            This OTP is valid for the next 5 minutes. Please do not share it with anyone.

            If you did not initiate this request, kindly ignore this message.

            Best regards,";
            $send_otp = Http::post('http://wapi.nationalsms.in/wapp/v2/api/send?apikey=dc8b10230c2e4632ac3b3456e78c4187&mobile=' . $phone . '&msg=' . $message . '');

            $result = json_decode($send_otp);
            if ($result->status == 'success' && $result->statuscode == '200'){
                session(['otp_time_in' => Carbon::now()]);
                $request->session()->put('otp', $otp);
                $request->session()->put('phonenumber', $phone);
                return redirect()->route('verify_otp_forgott')->with('success', 'OTP sent to WhatsApp successfully!');
            } else {
                $errorMessage = $response->json()['message'] ?? 'Resanding Failed';
                return back()->withErrors(['error' => $errorMessage]);
            }
    }

    public function verify_otp_forgott(){
        return view('frontend.forgot_otp');
    }

    public function resendotpforgot(Request $request){

        $phone = $request->session()->get('phonenumber');

        $otp = rand(1000, 9999);
        // echo "<pre>";
        $message = "Dear TEST,

            Thank you for registering on voiz.info. To complete your registration, please use the following One-Time Password (OTP): $otp

            This OTP is valid for the next 5 minutes. Please do not share it with anyone.

            If you did not initiate this request, kindly ignore this message.

            Best regards,";

            $send_otp = Http::post('http://wapi.nationalsms.in/wapp/v2/api/send?apikey=dc8b10230c2e4632ac3b3456e78c4187&mobile=' . $phone . '&msg=' . $message . '');

            $result = json_decode($send_otp);

            if ($result->status == 'success' && $result->statuscode == '200'){
                session(['otp_time_in' => Carbon::now()]);
                $request->session()->put('otp', $otp);
                return redirect()->back()->with('success', 'OTP sent to WhatsApp successfully!');
            } else {
                $errorMessage = $response->json()['message'] ?? 'Faild !';
                return back()->withErrors(['error' => $errorMessage]);
            }



    }

    public function verify_otp_submit_forgot(Request $request){
        $otp = implode('', $request->input);
        $sent_otp = $request->session()->get('otp');
        $phone = $request->session()->get('phonenumber');

        if ($otp == $sent_otp) {
            $verify = verifyuser($phone);
                return redirect()->route('change.password')->with('success', 'Otp Verfied! Change Password.');
        } else {
            return redirect()->back()->with('invalid', 'Invalid Otp.');;
        }
    }


    public function changepassword(Request $request){
        $phone = $request->session()->get('phonenumber');
        if(isset($phone)){

        return view('frontend.changepassword');
    }else{
        abort(404);
    }
    }

    public function changepasswordsubmit(Request $request){
        $phone = $request->session()->get('phonenumber');
        if(isset($phone)){
            $request->validate([
                'new_password' => [
                    'required',
                    'string',
                    'min:6',
                    'confirmed',
                ],
            ]);

            $changepassword = newpasswordupdate($phone,$request->new_password);

//             echo "<pre>";
//             print_r($changepassword);
// die;
            if($changepassword->success == 1 && $changepassword->statusCode == 200) {
                $request->session()->put('password_change_status', 'success');
                return view('front/successpass_changed');
            }else{
                return redirect()->back()->with('error','User Not Found ! Please try with correct number.');
            }
        }else{
            abort(404);
        }

    }

    public function canResendOtp(Request $request){

 // Check if OTP time is stored in the session
 $otpSentTime = session('otp_time_in');

 if (!$otpSentTime) {
     // If no OTP time is set, allow sending OTP immediately
     return response()->json(['can_resend' => true]);
 }

 // Calculate the time difference between now and when OTP was sent
 $timePassed = Carbon::parse($otpSentTime)->diffInMinutes(Carbon::now(), false);

 if ($timePassed >= 5) {
     // 5 minutes have passed, allow sending OTP again
     return response()->json(['can_resend' => true]);
 }

 // Calculate the remaining time in minutes and seconds
 $remainingTime = Carbon::parse($otpSentTime)->addMinutes(5)->diff(Carbon::now());
 $minutesLeft = $remainingTime->i;
 $secondsLeft = $remainingTime->s;

 // Return the remaining time as a formatted string
 return response()->json([
     'can_resend' => false,
     'remaining_time' => sprintf('%02d:%02d', $minutesLeft, $secondsLeft)
 ]);



    }

    public function createPost(Request $request)
    {
        $request->validate([
            'postText' => 'required|string',
        ]);

        try {
            $zipcode = $this->getLocationFromIP();
            $userName = session('user_userName');

            $postData = [
                'userName' => $userName,
                'postText' => $request->postText,
                'location' => $zipcode,
                'isDeleted' => false
            ];

            if ($request->imageUrl) {
                $postData['img'] = json_decode($request->imageUrl); // This will be array of URLs
            }
            if ($request->audioUrl) {
                $postData['audio'] = $request->audioUrl;
            }
            if ($request->videoUrl) {
                $postData['video'] = $request->videoUrl;
            }

            $response = Http::post('https://social-backend-gamma-eight.vercel.app/api/posts', $postData);

            if ($response->successful()) {
                return redirect()->route('home')->with('swal', [
                    'icon' => 'success',
                    'title' => 'Success!',
                    'text' => 'Post created successfully!'
                ]);
            } else {
                return redirect()->route('home')->with('swal', [
                    'icon' => 'error',
                    'title' => 'Error!',
                    'text' => 'Failed to create post.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // private function uploadToCloudinary($file, $resourceType = 'image')
    // {
    //     $cloudName = 'drulco0au';
    //     $uploadPreset = 'nesat_nayemNN';
    //     $apiUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/{$resourceType}/upload";

    //     $client = new \GuzzleHttp\Client();

    //     $response = $client->post($apiUrl, [
    //         'multipart' => [
    //             [
    //                 'name' => 'file',
    //                 'contents' => fopen($file->getPathname(), 'r'),
    //                 'filename' => $file->getClientOriginalName()
    //             ],
    //             [
    //                 'name' => 'upload_preset',
    //                 'contents' => $uploadPreset
    //             ],
    //             [
    //                 'name' => 'resource_type',
    //                 'contents' => $resourceType
    //             ]
    //         ]
    //     ]);

    //     $responseBody = json_decode($response->getBody(), true);
    //     return $responseBody['secure_url'];
    // }


    public function deletepost($postid){
        $url = 'https://social-backend-gamma-eight.vercel.app/api/posts/'.$postid.'';

    $response = Http::delete($url);

    if ($response->successful()) {

        return response()->json(['status' => 'success','message' => 'Post deleted successfully.']);

    }

    return response()->json([
        'status' => 'success',
        'message' => 'Failed to delete the post.',
    ]);
    }


    private function uploadToCloudinary($file, $resourceType = 'image')
    {
        // For audio files, use 'video' as the resource type
        if ($resourceType === 'audio') {
            $resourceType = 'video';
        }

        $cloudName = 'drulco0au';
        $uploadPreset = 'nesat_nayemNN';
        $apiUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/{$resourceType}/upload";

        $client = new \GuzzleHttp\Client();

        $response = $client->post($apiUrl, [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($file->getPathname(), 'r'),
                    'filename' => $file->getClientOriginalName()
                ],
                [
                    'name' => 'upload_preset',
                    'contents' => $uploadPreset
                ],
                [
                    'name' => 'resource_type',
                    'contents' => $resourceType
                ]
            ]
        ]);

        $responseBody = json_decode($response->getBody(), true);
        return $responseBody['secure_url'];
    }

}
