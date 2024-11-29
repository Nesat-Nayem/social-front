<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserSession;

use App\Http\Controllers\UserController;

Route::middleware(['checkuser_session'])->group(function () {
Route::get('/',[SocialController::class,'index'])->name('home');
Route::post('/upload-file', [SocialController::class, 'uploadFile'])->name('upload.file');

Route::delete('/delete-post/{postid}', [SocialController::class, 'deletepost'])->name('delete.posts');


});

Route::post('/create-post', [SocialController::class, 'createPost'])->name('create.post');
Route::get('/login', [SocialController::class, 'login'])->name('login');
Route::get('/forgot-password', [SocialController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('/submit-forgot-password', [SocialController::class, 'forgotpassword_submit'])->name('forgotpassword_submit');
Route::get('/check-can-resend-otp', [SocialController::class, 'canResendOtp'])->name('canResendOtp');
Route::get('/resend-otp-forgot', [SocialController::class, 'resendotpforgot'])->name('resendotpforgot');

Route::get('/change-password', [SocialController::class, 'changepassword'])->name('change.password');
Route::post('//change-password-submit', [SocialController::class, 'changepasswordsubmit'])->name('changepasswordsubmit');


Route::get('/verify-otp', [SocialController::class, 'verify_otp'])->name('verify_otp');
Route::get('/otp-verify', [SocialController::class, 'verify_otp_forgott'])->name('verify_otp_forgott');
Route::post('/otp-verify', [SocialController::class, 'verify_otp_submit_forgot'])->name('verify_otp_submit_forgot');
Route::post('/verify-otp', [SocialController::class, 'verify_otp_submit'])->name('verify_otp_submit');

Route::get('/register', [SocialController::class, 'register'])->name('register');
Route::get('/resend-otp', [SocialController::class, 'resendotp'])->name('resendotp');


Route::post('/register', [SocialController::class, 'registerSubmit'])->name('register.submit');
Route::post('/login', [SocialController::class, 'loginSubmit'])->name('login.submit');

Route::post('/news/{id}/like', [SocialController::class, 'likeNews'])->name('news.like');
Route::post('/news/{id}/comment', [SocialController::class, 'commentNews'])->name('news.comment');


Route::post('/store-user-info', [UserController::class, 'storeUserInfo'])->name('store.user.info');



Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Update these routes to include names
Route::get('/about', [SocialController::class, 'about'])->name('about');
Route::get('/privacy', [SocialController::class, 'privacy'])->name('privacy');
Route::get('/support-and-help', [SocialController::class, 'supportAndHelp'])->name('support-and-help');



Route::get('/social-issues', [SocialController::class, 'socialIssues'])->name('socialIssues');
Route::get('/public-poll', [SocialController::class, 'publicPull']);
Route::get('/voters-summary', [SocialController::class, 'votersSummary']);
Route::get('/opinion-poll', [SocialController::class, 'opinionPoll']);
Route::get('/daily-news', [SocialController::class, 'dailyNews']);
Route::get('/medical-issues', [SocialController::class, 'medicalIssue']);
Route::get('/profile', [SocialController::class, 'profile']);
Route::get('/help-details', [SocialController::class, 'helpDetails']);
Route::get('/add-post', [SocialController::class, 'addPost']);
Route::get('/blood-donation', [SocialController::class, 'bloodDonation']);
Route::get('/nearby-blood-donors', [SocialController::class, 'nearbyBloodDonors']);
Route::get('/blood-banks', [SocialController::class, 'bloodBanks']);
Route::get('/hospital', [SocialController::class, 'hospital']);
Route::get('/timeline-photos', [SocialController::class, 'timelinePhotos']);
Route::get('/timeline-videos', [SocialController::class, 'timelineVideos']);
Route::get('/legislative-updates', [SocialController::class, 'legislativeUpdates']);
Route::get('/schemes-update', [SocialController::class, 'schemesUpdate']);
Route::get('/scheme-details', [SocialController::class, 'schemeDetails']);
Route::get('/audio-podcast-news', [SocialController::class, 'audioProdcastNews']);
Route::get('/weather-emergency-alert', [SocialController::class, 'weatherEmergencyAleart']);
Route::get('/case-journey-tracker', [SocialController::class, 'caseJourneyTracker']);
Route::get('/in-depth-case-studies', [SocialController::class, 'inDepthCaseStudies']);




