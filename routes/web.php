<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

// Languages Routes
Route::get('lang/home', [UserFrontendController::class, 'langIndex']);
Route::get('lang/change', [UserFrontendController::class, 'langChange'])->name('changeLang');

Route::group(['middleware' => ['trainer']], function () {
    Route::get('/dashboard', [TrainerController::class, 'index'])->name('dashboard');
    Route::get('/registered-users/{id}', [TrainerController::class, 'user_list'])->name('registered.users');
    Route::post('/detail', [TrainerController::class, 'user_detail'])->name('user.detail');
    Route::get('update/application/status/{id}/{status?}', [TrainerController::class, 'updateStatus']);

    // completed trainees
    Route::get('/completed-trainees', [TrainerController::class, 'completed_trainee_list'])->name('completed.trainees');
    Route::post('completed/trainees/detail', [TrainerController::class, 'completed_trainee_detail'])->name('completed.trainee.detail');

    // Compaign trainees
    Route::get('/compaign-trainees/{id}', [TrainerController::class, 'compaign_trainee_list'])->name('compaign.trainees');
    Route::post('compaign/trainees/detail', [TrainerController::class, 'compaign_trainee_detail'])->name('compaign.trainee.detail');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('user/welcome/home-page', [UserFrontendController::class, 'welcome_homepage'])->name('welcome.homepage');
});

Auth::routes();

// USER FRONTEND

Route::get('/', [UserFrontendController::class, 'index'])->name('user.index');
Route::get('/privacy-policy', [UserFrontendController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('/terms-service', [UserFrontendController::class, 'terms_service'])->name('terms.service');

// register
Route::get('user/register-page', [UserFrontendController::class, 'register_page'])->name('register.page');
Route::post('user/register', [AuthController::class, 'user_register'])->name('user.register');

// trainer register
Route::get('trainer/register-page', [UserFrontendController::class, 'trainer_register_page'])->name('trainer.register.page');
Route::post('trainer/register', [AuthController::class, 'registerTrainer'])->name('trainer.register');

//trainee register
Route::get('trainee/register-page', [UserFrontendController::class, 'trainee_register_page'])->name('trainee.register.page');
Route::post('trainee/register', [AuthController::class, 'registerTrainee'])->name('trainee.register');

// Login
Route::get('user/login-page', [UserFrontendController::class, 'login_page'])->name('login.page');
Route::post('user/login', [AuthController::class, 'user_login'])->name('user.login');

Route::get('user/login-page-new', [AuthController::class, 'login_page_new'])->name('login.page.new');

// forgot password
Route::get('user/forgot-password-page', [UserFrontendController::class, 'forgor_password_page'])->name('forgot.password.page');
Route::post('user/forgot-password', [AuthController::class, 'user_forgot_password'])->name('user.forgot.password');


//upload image
Route::post('upload/profileImage', [AuthController::class, 'edit_image']);

// user profile
Route::get('trainer/profile', [UserFrontendController::class, 'trainer_profile'])->name('trainer.profile');
Route::get('trainee/profile', [UserFrontendController::class, 'trainee_profile'])->name('trainee.profile');
Route::get('view/trainee/profile/{id}', [UserFrontendController::class, 'view_trainee_profile'])->name('view.trainee.profile');

Route::post('update/profileImage', [UserFrontendController::class, 'edit_image']);

// All trainers/ trainers category
Route::get('all/category', [UserFrontendController::class, 'all_category'])->name('all.category');

Route::get('all/trainers/{id}', [UserFrontendController::class, 'all_trainers'])->name('all.trainers');
Route::post('trainer-review/detail', [UserFrontendController::class, 'trainer_review_detail'])->name('trainer.review.detail');
Route::get('trainer/category/profile/{id}', [UserFrontendController::class, 'trainer_category_profile'])->name('trainer.category.profile');

Route::post('/search/trainer',  [UserFrontendController::class, 'search_trainer'])->name('category.trainer.search');
Route::post('/search/category',  [UserFrontendController::class, 'search_category'])->name('category.search');


// toggles
Route::get('trainer/change-status', [UserFrontendController::class, 'trainer_change_status']);
Route::get('trainer/compaign', [UserFrontendController::class, 'trainer_compaign']);
Route::get('course/type', [UserFrontendController::class, 'course_type']);

Route::get('trainee/apply-compaign/{id}', [UserFrontendController::class, 'trainee_apply_compaign'])->name('trainee.apply.compaign');


// give rating
Route::post('submit-rating',  [UserFrontendController::class, 'rating'])->name('rating');

// register for course
Route::post('register/course',  [UserFrontendController::class, 'register_course'])->name('register.course');
Route::post('registration/image',  [UserFrontendController::class, 'registration_image'])->name('registration.image');

// register for Compaign
Route::post('registration/compaign',  [UserFrontendController::class, 'registration_compaign'])->name('registration.compaign');


// Map
Route::get('trainer/location/{id}', [UserFrontendController::class, 'trainer_location'])->name('trainer.location');
Route::post('trainer/store/location', [UserFrontendController::class, 'trainerStoreLocation'])->name('trainer.store.location');

//Reviews
Route::post('store/reviews', [UserFrontendController::class, 'storeReviews'])->name('store.reviews');
Route::get('trainee/all-reviews/{id}', [UserFrontendController::class, 'trainee_all_reviews'])->name('trainee.all.reviews');

Route::post('store/trainer-reviews', [UserFrontendController::class, 'storeTrainerReviews'])->name('store.trainer.reviews');
Route::get('trainer/all-reviews/{id}', [UserFrontendController::class, 'trainer_all_reviews'])->name('trainer.all.reviews');


// testing

Route::get('testing', [UserFrontendController::class, 'testing'])->name('testing');
Route::get('testingLang', [UserFrontendController::class, 'testing_lang'])->name('testing.lang');
