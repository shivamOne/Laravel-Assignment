<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Website;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Mail;
use App\Http\Controllers\UploadFileController;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\urlcontroller;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\CookieController;

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
    return view('welcome');
});

//ca2
// Problem 1 - Addition purposes...
Route::view("/login", "users");
Route::post("/users", [UsersController::class, 'getData']);

//Problem 2 (First Part) - For uploading user information
Route::view("/docs", "user-docs");
Route::post("/upload-docs", [DocsController::class, 'getData']);

// Problem 2 (Second Part) - For uploading document of user
Route::get('/uploadfile', [UploadFileController::class, 'index']);
Route::post('/uploadfile', [UploadFileController::class, 'showUploadFile']);

// Problem 3 - For sending mail.
// Mail is send from -
// Mail sent to -
Route::get('/email', [Website::class, 'index']);

// Alternative - Problem 3
Route::view("/sendmessage", "mail-form");
Route::post("/sendmessage", [MailController::class, 'getData']);

//ca2
Route::get('/google/bar', [urlcontroller::class, 'index']);


Route::get('/register', function () {
    return view('register');
});
//Route::post('/user/register', array('uses' => 'UserRegistration@postRegister'));
Route::get('/user/register', [UserRegistration::class, 'postRegister']);
Route::post('/user/register', [UserRegistration::class, 'postRegister']);


Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');
Route::get('/cookie/remove', 'CookieController@deleteCookie');
Route::get('/test', function () {
    return 'Welcome to Laravel class';
});
Route::get('/test2', function () {
    return view('test2');
});

Route::get('/profile', function () {
    return view('greeting', ['name' => 'Kiranpal']);
});

// Controllers

Route::get('/start', [TestController::class, 'index']);
Route::get('/first', [UserController::class, 'index']);

// Loops - Blade
Route::get('/loops', [LoopsController::class, 'index']);

Route::Get('/users/profile', function () {
    //
})->name('profile');
