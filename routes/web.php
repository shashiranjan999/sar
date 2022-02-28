<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestController;

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
// Website Data

Route::get('/linkstorage', function () {
    Artisan::call('storage:link'); // this will do the command line job
    
});
//
// Route::get('/', function () {
//     return view('templates.index');
// })->name('index');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'getprofile']);
Route::get('/update-profile', [App\Http\Controllers\ProfileController::class, 'updateprofile']);
Route::put('/update-profile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::post('/update-personal-detail', [App\Http\Controllers\ProfileController::class, 'updatePersonalDetail']);
Route::post('/update-bank-detail', [App\Http\Controllers\ProfileController::class, 'updateBankDetail']);
Route::post('/update-professional-detail', [App\Http\Controllers\ProfileController::class, 'updateProfessionalDetail']);
Route::post('/update-qualification-detail', [App\Http\Controllers\ProfileController::class, 'updateQualificationDetail']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::put('/change-password', [App\Http\Controllers\AdminController::class, 'changeuserpass']);
Route::get('/change-password', [App\Http\Controllers\AdminController::class, 'changepass']);
Route::get('contact', function () {
    return view('templates.contact');
});

Route::get('about', function () {
    return view('templates.about');
});
Route::get('course_list', function () {
    return view('templates.course_list');
});
Route::get('single_course', function () {
    return view('templates.single_course');
});
Route::get('course_list', function () {
    return view('templates.course_list');
});
// Route::get('gallery', function () {
//     return view('templates.gallery');
// });
Route::get('privacy', function () {
    return view('templates.privacy');
});
Route::get('terms-of-service', function () {
    return view('templates.terms-of-service');
});
Route::get('whatsnew', function () {
    return view('templates.whatsnew');
});


Route::get('/test', [TestController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');

Route::get('/pages/{slug}', [App\Http\Controllers\HomeController::class, 'show']);
Auth::routes();
Route::post('/Login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/signout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/teacher_reg', [App\Http\Controllers\AuthController::class, 'teacherSignUpPage']);
Route::post('/teacher_reg', [App\Http\Controllers\AuthController::class, 'teacherRegister']);
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);


Route::post('/search', [App\Http\Controllers\SearchController::class, 'searchregisterfield']);

Route::post('/get-districts', [App\Http\Controllers\SearchController::class, 'fetchDistricts']);
Route::post('/get-cities', [App\Http\Controllers\SearchController::class, 'fetchCities']);
//admin panel routes

Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/Add-class', [App\Http\Controllers\AdminController::class, 'class']);
    Route::post('/Add-class', [App\Http\Controllers\AdminController::class, 'addclass']);
    Route::post('/class/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyclass']);
    Route::get('/class/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editclass']);
    Route::put('/class/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updateclass']);

    Route::get('/Add-subject', [App\Http\Controllers\AdminController::class, 'subject']);
    Route::post('/Add-subject', [App\Http\Controllers\AdminController::class, 'addsubject']);
    Route::post('/subject/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroysubject']);
    Route::get('/subject/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editsubject']);
    Route::put('/subject/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatesubject']);

    Route::get('/Add-state', [App\Http\Controllers\AdminController::class, 'state']);
    Route::post('/Add-state', [App\Http\Controllers\AdminController::class, 'addstate']);
    Route::post('/state/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroystate']);
    Route::get('/state/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editstate']);
    Route::put('/state/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatestate']);

    Route::get('/Add-district', [App\Http\Controllers\AdminController::class, 'district']);
    Route::post('/Add-district', [App\Http\Controllers\AdminController::class, 'adddistrict']);
    Route::post('/district/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroydistrict']);
    Route::get('/district/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editdistrict']);
    Route::put('/district/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatedistrict']);


    Route::get('/Add-city', [App\Http\Controllers\AdminController::class, 'city']);
    Route::post('/Add-city', [App\Http\Controllers\AdminController::class, 'addcity']);
    Route::post('/city/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroycity']);
    Route::get('/city/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editcity']);
    Route::put('/city/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatecity']);

    Route::get('/Add-qualification', [App\Http\Controllers\AdminController::class, 'qualification']);
    Route::post('/Add-qualification', [App\Http\Controllers\AdminController::class, 'addqualification']);
    Route::post('/qualification/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyqualification']);
    Route::get('/qualification/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editqualification']);
    Route::put('/qualification/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatequalification']);

    Route::get('/Add-specialization', [App\Http\Controllers\AdminController::class, 'specialization']);
    Route::post('/Add-specialization', [App\Http\Controllers\AdminController::class, 'addspecialization']);
    Route::post('/specialization/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyspecialization']);
    Route::get('/specialization/{id}/edit', [\App\Http\Controllers\AdminController::class, 'editspecialization']);
    Route::put('/specialization/{id}/edit', [\App\Http\Controllers\AdminController::class, 'updatespecialization']);


    Route::get('/teachers', [App\Http\Controllers\AdminController::class, 'teachers']);
    Route::get('/teacher/{id}/detail', [App\Http\Controllers\AdminController::class, 'teacherDetail']);


    Route::post('/change-teacher-status', [App\Http\Controllers\SearchController::class, 'changeStatus']);



    //membership

    Route::get('/membership', [App\Http\Controllers\MembershipController::class, 'index']);
    Route::post('/membership', [App\Http\Controllers\MembershipController::class, 'addMembership']);
    Route::post('/membership/delete/{id}', [App\Http\Controllers\MembershipController::class, 'destroymembership']);
    Route::get('/membership/{id}/edit', [\App\Http\Controllers\MembershipController::class, 'editmembership']);
    Route::put('/membership/{id}/edit', [\App\Http\Controllers\MembershipController::class, 'updatemembership']);

    //gallery

    Route::get('/upload-gallery', [App\Http\Controllers\AdminController::class, 'gallery']);
    Route::post('/upload-gallery', [App\Http\Controllers\AdminController::class, 'addgallery']);
    Route::post('/gallery/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroygallery']);
    Route::get('/gallery/{id}/edit', [App\Http\Controllers\AdminController::class, 'editgallery']);
    Route::put('/gallery/{id}/edit', [App\Http\Controllers\AdminController::class, 'updategallery']);
    //Pages
    Route::resource('/pages', PagesController::class);

    //
    Route::get('/students', [App\Http\Controllers\StudentController::class, 'students']);

Route::get('/upload-gallery', [App\Http\Controllers\AdminController::class, 'gallery']);
Route::post('/upload-gallery', [App\Http\Controllers\AdminController::class, 'addgallery']);
Route::post('/gallery/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroygallery']);
Route::get('/gallery/{id}/edit', [App\Http\Controllers\AdminController::class, 'editgallery']);
Route::put('/gallery/{id}/edit', [App\Http\Controllers\AdminController::class, 'updategallery']);
//Pages
// Route::resource('/pages', PagesController::class);
Route::get('/create', [App\Http\Controllers\PagesController::class, 'create']);
Route::post('/pages', [App\Http\Controllers\PagesController::class, 'store']);
Route::get('/pages', [App\Http\Controllers\PagesController::class, 'index']);
Route::delete('/pages/{id}', [App\Http\Controllers\PagesController::class, 'destroy']);
Route::get('/pages/{id}/edit', [App\Http\Controllers\PagesController::class, 'edit']);
Route::put('/pages/{id}', [App\Http\Controllers\PagesController::class, 'update']);


// testimonial
Route::get('/testimonial', [App\Http\Controllers\TestimonialController::class, 'testimonial']);
Route::post('/testimonial', [App\Http\Controllers\TestimonialController::class, 'addtestimonial']);
Route::post('/testimonial/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'destroytestimonial']);
Route::get('/testimonial/{id}/edit', [App\Http\Controllers\TestimonialController::class, 'edittestimonial']);
Route::put('/testimonial/{id}/edit', [App\Http\Controllers\TestimonialController::class, 'updatetestimonial']);


Route::get('/students', [App\Http\Controllers\StudentController::class, 'students']);
});
