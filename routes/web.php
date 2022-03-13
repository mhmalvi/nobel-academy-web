<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PolicyController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [HomeController::class, 'about'])->name('about');
Route::get('forms-policies', [HomeController::class, 'ourPolicies'])->name('fp');
Route::get('contact-us', [HomeController::class, 'contactNta'])->name('contact');
Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [BlogController::class, 'blogDetails'])->name('blogDetail');
Route::get('/download/{fileName}', [PolicyController::class, 'downloadPolicy'])->name('policyFile');

Route::get('diploma-in-beauty-therapy', [CoursesController::class, 'BeautyDiploma'])->name('diplomaInBeauty');
Route::get('diploma-in-remedial-massage', [CoursesController::class, 'remedial'])->name('diplomaInRemedial');
Route::get('certificate-iii-in-hairdressing', [CoursesController::class, 'hairderssing'])->name('hairdressing');
Route::get('certificate-iv-in-beauty-therapy', [CoursesController::class, 'BeautyTherapy'])->name('beautyTherapy');

//Mail Controllers
Route::post('contact-us', [MailController::class, 'contactUs'])->name('contactus');
Route::post('applyNow', [MailController::class, 'courseApply'])->name('apply');
Route::post('check-eligibility', [MailController::class, 'checkEligibility']);
Route::post('/upload', [AdminBlogController::class, 'uploadFile']);


/**
 * Pages That should only made for
 * lead generation
 */
Route::view('check-your-rpl-eligibility', 'pages.rpl-eligibility')->name('check-your-rpl-eligibility');
Route::view('check-your-rpl-eligibility-remedial-massage', 'pages.rpl-eligibility-2');


/**
 * Admin Routes
 */
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin/blogs')->group(function () {
        Route::get('/', [BlogsController::class, "index"])->name('blogs');
    });

    Route::prefix('admin/categories')->group(function () {
        Route::get('/', [CategoriesController::class, "index"])->name('categories');
        Route::get('list', [CategoriesController::class, "getCategories"]);
        Route::post('create', [CategoriesController::class, "store"]);
        Route::get('edit/{category}', [CategoriesController::class, "edit"])->name('category.edit');
        Route::put('update/{category}', [CategoriesController::class, "update"]);
        Route::delete('remove/{category}', [CategoriesController::class, "destroy"]);
    });

    //Blogs
    Route::resource('blog', AdminBlogController::class);
    //Atributes
    Route::prefix('attributes')->group(function () {
        //Category
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::post('categories', [CategoryController::class, 'store'])->name('category.add');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('categories/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    });

    //Settings
    Route::prefix('settings')->group(function () {
        //Profile
        Route::get('profile', [AdminHomeController::class, 'profile'])->name('userProfile');
        Route::post('profile', [AdminHomeController::class, 'profileUpdate'])->name('userProfileUpdate');
    });

    // Manage users
    Route::prefix('manage-users')->name('manage_users.')->group(function () {
        Route::get('/', [ManageUsersController::class, 'index'])->name('index');
        Route::get('list', [ManageUsersController::class, 'getPaginatedList'])->name('paginatedList');
        Route::get('create', [ManageUsersController::class, 'create'])->name('create');
        Route::post('store', [ManageUsersController::class, 'store'])->name('store');
    });
});

Route::get('faq', [HomeController::class, 'faqPage'])->name('faq');
