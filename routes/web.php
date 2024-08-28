<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoursechapterController;
use App\Http\Controllers\PayPalController;
use App\Mail\AcceptMail;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/mail', function () {
    return new AcceptMail();
})->name('mail.accept-mail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/users',UserController::class);
Route::get('/users/role/create', function () {
    return view('role.create');
})->name('user.role');

/*
Route::get('language', function () {
    return view('language.view');
})->name('language.view');*/

Route::post('/users/role',[UserController::class,'createrole'])->name('user.createrole');
Route::resource('/role',\App\Http\Controllers\RoleController::class);

Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/subcategory', SubcategoryController::class);
Route::resource('/language', LanguageController::class);
Route::resource('/instructor', InstructorController::class);
Route::resource('/coursechapter',CoursechapterController::class);

/*Route::delete('instructor/{id}', 'InstructorController@destroy')->name('instructor.destroy');*/
Route::get('/send/{id}',[InstructorController::class,'sendNotification']);
Route::get('/download/{file}',[InstructorController::class,'download']);
Route::post('instructor/accept', [InstructorController::class,'accept']);
Route::get('/valid',[InstructorController::class,'valid']);

Route::resource('/course', CourseController::class);
Route::resource('/courses', CourseController::class,'index')->name('course.index');
/*Route::prefix('course')->group(function () {
Route::post('/pricing', [CourseController::class,'pricing'])->name('course.pricing');*/

/*Route::get('/pricing', function () {
        return view('course.pricing');
    })->name('course.pricing');});*/

Route::get('/pricing', function () {
    return view('course.pricing');
})->name('course.pricing');

Route::get('/curriculum', function () {
    return view('course.curriculum');
})->name('course.curriculum');
Route::get('/search/', [\App\Http\Controllers\CourseController::class,'search'])->name('course.search');
/*Route::get('/course', function () {
        return view('course.create');
});*/

//remove view
Route::get('/view', function () {
    return view('course.view');
});

Route::get('/sidebar', function () {
    return view('sidebar');
})->name('sidebar');

Route::get('/detail/{id}', [CourseController::class,'detail'])->name('course.detail');
Route::get('video/{id}', [CourseController::class,'video'])->name('course.video');
Route::get('/courselist', [CourseController::class,'courselist'])->name('course.courselist');
//Route::post('instructor/accept', [CourseController::class,'detail']);

Route::resource('/contactus', \App\Http\Controllers\feedbackController::class);

/*Route::get('/detail', function () {
    return view('course.detail');
})->name('course.detail');*/

Route::get('/welcoming', function () {
    return view('product.welcoming');
});

Route::get('/paypal',function(){
    return view('myOrder');
});

// route for processing payment
Route::post('/paypal', [PayPalController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [PayPalController::class, 'getPaymentStatus'])->name('status');


require __DIR__.'/auth.php';
