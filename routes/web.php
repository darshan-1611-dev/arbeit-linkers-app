<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

// login
Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, "login"]);
Route::post('/loginStore', [\App\Http\Controllers\Auth\AuthController::class, "loginStore"]);

// register
Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class, "register"]);
Route::post('/registerStore', [\App\Http\Controllers\Auth\AuthController::class, "registerStore"]);

// get user detail
Route::get('/user-detail/introduction', [\App\Http\Controllers\Auth\AuthController::class, "introduction"]);

Route::get('/user-detail/title', [\App\Http\Controllers\Auth\AuthController::class, "title"]);
Route::post('/user-detail/title/store', [\App\Http\Controllers\Auth\AuthController::class, "titleStore"]);

Route::get('/user-detail/work_experience', [\App\Http\Controllers\Auth\AuthController::class, "workExperience"]);
Route::post('/user-detail/work_experience/store', [\App\Http\Controllers\Auth\AuthController::class, "workExperienceStore"]);

Route::get('/user-detail/education', [\App\Http\Controllers\Auth\AuthController::class, "education"]);
Route::post('/user-detail/education/store', [\App\Http\Controllers\Auth\AuthController::class, "educationStore"]);

Route::get('/user-detail/languages', [\App\Http\Controllers\Auth\AuthController::class, "languages"]);
Route::post('/user-detail/languages/store', [\App\Http\Controllers\Auth\AuthController::class, "languagesStore"]);

Route::get('/user-detail/skills', [\App\Http\Controllers\Auth\AuthController::class, "skills"]);
Route::post('/user-detail/skills/store', [\App\Http\Controllers\Auth\AuthController::class, "skillsStore"]);

Route::get('/user-detail/rate', [\App\Http\Controllers\Auth\AuthController::class, "rate"]);
Route::post('/user-detail/rate/store', [\App\Http\Controllers\Auth\AuthController::class, "rateStore"]);

Route::get('/user-detail/final_overview', [\App\Http\Controllers\Auth\AuthController::class, "finalOverview"]);
Route::post('/user-detail/final_overview/store', [\App\Http\Controllers\Auth\AuthController::class, "finalOverviewStore"]);

//get company detail
Route::get('/company-detail', [\App\Http\Controllers\Auth\AuthController::class, "company"]);
Route::post('/company-detail/store', [\App\Http\Controllers\Auth\AuthController::class, "companyStore"]);

//extra pages
Route::get('about-us', [\App\Http\Controllers\PageController::class, "aboutUs"]);
Route::get('contact-us', [\App\Http\Controllers\PageController::class, "contactUs"]);
Route::post('contact-us/store', [\App\Http\Controllers\PageController::class, "contactUsStore"]);
Route::get('faqs', [\App\Http\Controllers\PageController::class, "faqs"]);
Route::get('privacy-policy', [\App\Http\Controllers\PageController::class, "privacyPolicy"]);
Route::get('terms-condition', [\App\Http\Controllers\PageController::class, "termsCondition"]);
Route::get('copyright-policy', [\App\Http\Controllers\PageController::class, "copyrightPolicy"]);

//blog
Route::get('blogs', [\App\Http\Controllers\BlogController::class, "index"]);
Route::get('blog/{slug}', [\App\Http\Controllers\BlogController::class, "detailView"]);

// auth middleware
Route::middleware(['auth'])->group(function () {

    // log out
    Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, "logOut"]);

    // user profile
    Route::get('/user-profile', [\App\Http\Controllers\ProfileController::class, "userProfile"]);
    Route::get('/user-profile/bid', [\App\Http\Controllers\ProfileController::class, "viewUserBid"]);
    Route::get('/user-profile/transaction', [\App\Http\Controllers\ProfileController::class, "usersTransaction"]);
    Route::get('user_profile/edit/{id}', [\App\Http\Controllers\ProfileController::class, "userProfileEdit"]);
    Route::post('/user-profile/update', [\App\Http\Controllers\ProfileController::class, "userProfileUpdate"]);

    // company profile
    Route::get('/company-profile', [\App\Http\Controllers\ProfileController::class, "companyProfile"]);
    Route::post('/company-profile/update', [\App\Http\Controllers\ProfileController::class, "companyProfileUpdate"]);
    Route::get('/company-profile/project', [\App\Http\Controllers\ProfileController::class, "viewCompanyProject"]);
    Route::get('/company-profile/project/bid-detail/{project_id}', [\App\Http\Controllers\ProfileController::class, "viewUserBidOnProject"]);
    Route::get('/company-profile/project/bid/assign/{user_id}/{project_id}', [\App\Http\Controllers\ProfileController::class, "approveBidProject"]);
    Route::get('/company-profile/transaction', [\App\Http\Controllers\ProfileController::class, "companyTransaction"]);

    // list project list and payment status
    Route::get('/project-list', [\App\Http\Controllers\ProfileController::class, "listUserApprovedProject"]);

    // job controller
    Route::get('/create-job', [\App\Http\Controllers\JobController::class, "createJob"]);
    Route::post('/store-job', [\App\Http\Controllers\JobController::class, "storeJob"]);
    Route::get('/edit-job/{id}', [\App\Http\Controllers\JobController::class, "editJob"]);
    Route::post('/update-job', [\App\Http\Controllers\JobController::class, "updateJob"]);
    Route::get('/delete-job/{id}', [\App\Http\Controllers\JobController::class, "deleteJob"]);
    Route::get('/list-job', [\App\Http\Controllers\JobController::class, "listJob"]);
    Route::get('/detail-view-job/{id}', [\App\Http\Controllers\JobController::class, "detailJob"]);

    // bid jobs
    Route::post('/bid-job', [\App\Http\Controllers\JobController::class, "bid"]);
    Route::get('/retract-bid-job/{id}', [\App\Http\Controllers\JobController::class, "retractBid"]);

    // payment
    Route::post('/payment', [PaymentController::class, 'payment'])->name('razorpay.payment.store');

    //user general view
    Route::get('/user/{user_id}', [\App\Http\Controllers\ProfileController::class, "userGeneralView"]);
    Route::get('/company/{company_id}', [\App\Http\Controllers\ProfileController::class, "companyGeneralView"]);

});

//admin route
Route::prefix("dashboard")->group(function () {

    // dashboard home page
    Route::get("/", [\App\Http\Controllers\AdminController::class, "index"]);

    // contact-us page
    Route::get("/contact-details", [\App\Http\Controllers\AdminController::class, "contactInquiry"]);

    // users data
    Route::get("/users", [\App\Http\Controllers\AdminController::class, "users"]);
    Route::get("/user-details/{user_id}", [\App\Http\Controllers\AdminController::class, "userDetails"]);
    Route::get("/users-datatable-list", [\App\Http\Controllers\AdminController::class, "usersData"]);

    // payment
    Route::get("transactions", [\App\Http\Controllers\AdminController::class, "transaction"]);
    Route::get("transactions-datatable-data", [\App\Http\Controllers\AdminController::class, "transactionData"]);

    // blog
    Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'listBlogs']);
    Route::get('blogs-datatable-data', [\App\Http\Controllers\BlogController::class, 'listBlogsDatatable']);
    Route::get('create-blog', [\App\Http\Controllers\BlogController::class, 'create']);
    Route::post('store-blog', [\App\Http\Controllers\BlogController::class, 'store']);
    Route::get('edit-blog/{id}', [\App\Http\Controllers\BlogController::class, 'edit']);
    Route::post('update-blog', [\App\Http\Controllers\BlogController::class, 'update']);
    Route::get('delete-blog/{id}', [\App\Http\Controllers\BlogController::class, 'delete']);
});
