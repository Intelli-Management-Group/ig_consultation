<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;

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

Route::get('/', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('index-chinise');
    } else {
        return view('index');
    }
});

Route::get('/about', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('about-chinise');
    } else {
        return view('about');
    }
});

//chainese
Route::get('/webinar_registration_chinese', function () {
    return view('Webinar-signup');
});

// english
Route::get('/webinar_registration_english', function () {
    return view('Webinar-signup-english');
});

Route::get('/canada', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('canada-chinise');
    } else {
        return view('canada');
    }
});

Route::get('/Services-express_entry', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-express_entry-chinise');
    } else {
        return view('Services-express_entry');
    }
});

Route::get('/Services-LMIA', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-LMIA-chinise');
    } else {
        return view('Services-LMIA');
    }
});

Route::get('/Services-PNP', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-PNP-chinise');
    } else {
        return view('Services-PNP');
    }
});

Route::get('/Services-startup_visa', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-startup_visa-chinise');
    } else {
        return view('Services-startup_visa');
    }
});

Route::get('/Services-workpermit', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-workpermit-chinise');
    } else {
        return view('Services-workpermit');
    }
});

Route::get('/Services-studypermit', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-studypermit-chinise');
    } else {
        return view('Services-studypermit');
    }
});

Route::get('/Services-visitorvisa', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-visitorvisa-chinise');
    } else {
        return view('Services-visitorvisa');
    }
});

Route::get('/Services-family_sponsor', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-family_sponsor-chinise');
    } else {
        return view('Services-family_sponsor');
    }
});

Route::get('/Services-caregiver', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-caregiver-chinise');
    } else {
        return view('Services-caregiver');
    }
});

Route::get('/Services-prcard', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-prcard-chinise');
    } else {
        return view('Services-prcard');
    }
});

Route::get('/Services-citizenship', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Services-citizenship-chinise');
    } else {
        return view('Services-citizenship');
    }
});

Route::get('/Privacy-policy', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Privacy-policy-chinise');
    } else {
        return view('Privacy-policy');
    }
});

Route::get('/Terms-and-conditions', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('Terms-and-conditions-chinise');
    } else {
        return view('Terms-and-conditions');
    }
});

Route::post('/save-webinar-data', [MailController::class, 'saveWebinarDetail']);
Route::get('/News', [BlogController::class, 'blogList']);
Route::post('/News', [BlogController::class, 'getBody']);
Route::get('/News-details/{id}', [BlogController::class, 'Blog'])->name('blog-description');
Route::get('/News-category/{id}', [BlogController::class, 'BlogCategory'])->name('blog-category');

Route::get('/contactus', function (Request $request) {
    if ($request->get('language') == 'chinese') {
        return view('contact-chinise');
    } else {
        return view('contact');
    }
});

Route::post('/contact_mail', [MailController::class, 'contactMail']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/admin-login', [AdminController::class, 'Login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/admin-blog-list', [AdminController::class, 'blogList'])->name('admin-blog-list');
    Route::get('/add-blog', [AdminController::class, 'loadAddblog']);
    Route::post('/add-blog', [AdminController::class, 'insertBlog']);
    Route::get('/edit-blog/{id}', [AdminController::class, 'editBlog']);
    Route::post('/edit-blog/{id}', [AdminController::class, 'updateBlog'])->name('blogUpdate');
    Route::get('/delete-blog/{id}', [AdminController::class, 'deleteBlog']);
    Route::get('/admin-category-list', [AdminController::class, 'categoryList'])->name('admin-category-list');
    Route::get('/add-category', [AdminController::class, 'loadAddcategory']);
    Route::post('/add-category', [AdminController::class, 'insertCategory']);
    Route::get('/edit-category/{id}', [AdminController::class, 'editCategory']);
    Route::post('/edit-category/{id}', [AdminController::class, 'updateCategory'])->name('categoryUpdate');
    Route::get('/delete-category/{id}', [AdminController::class, 'deleteCategory']);
    Route::get('/admin-user-list', [AdminController::class, 'userList'])->name('admin-user-list');
    Route::resource('/upload', UploadController::class);
});





