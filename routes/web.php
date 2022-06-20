<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\CooladminController;

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

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
// Route::get('login',[HomeController::class,'home'])->name('welcome');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('index',[CooladminController::class,'index']);

Route::get('index2',[CooladminController::class,'index2']);

Route::get('index3',[CooladminController::class,'index3']);

Route::get('index4',[CooladminController::class,'index4']);

Route::get('inbox',[CooladminController::class,'inbox']);

Route::get('chart',[CooladminController::class,'chart']);

Route::get('table',[CooladminController::class,'table']);

Route::get('form',[CooladminController::class,'form']);

Route::get('calendar',[CooladminController::class,'calendar']);

Route::get('map',[CooladminController::class,'map']);

// Route::get('login',[CooladminController::class,'login']);

Route::get('register',[CooladminController::class,'register']);

Route::get('forget-pass',[CooladminController::class,'forgetpass']);

Route::get('button',[CooladminController::class,'button']);

Route::get('badge',[CooladminController::class,'badge']);

Route::get('tab',[CooladminController::class,'tab']);

Route::get('card',[CooladminController::class,'card']);

Route::get('alert',[CooladminController::class,'alert']);

Route::get('progressbar',[CooladminController::class,'progressbar']);

Route::get('modal',[CooladminController::class,'modal']);

Route::get('switch',[CooladminController::class,'switch']);

Route::get('grid',[CooladminController::class,'grid']);

Route::get('fontawesome',[CooladminController::class,'fontawesome']);

Route::get('typo',[CooladminController::class,'typo']);

Route::get('navigation',[CooladminController::class,'nav']);

Route::get('account',[CooladminController::class,'account']);

Route::get('adduser',[CooladminController::class,'adduser']);

Route::get('adduser',[CooladminController::class,'adduser']);

Route::post('adduser',[CooladminController::class,'useradd'])->name('useradd');

Route::get('/admin/home',[CooladminController::class,'dashboard']);

Route::get('viewuser',[CooladminController::class,'viewuser']);

Route::get('home',[CooladminController::class,'home']);

Route::get('edituser/{id}',[CooladminController::class,'edituser'])->name('edituser');

Route::post('edituser/{id}',[CooladminController::class,'postedituser'])->name('updateuser');

Route::delete('destroy/{id}',[CooladminController::class,'destroy'])->name('destroy');

Route::get('forgotpassword',[CooladminController::class,'forgotpassword']);

Route::post('forgotpassword',[CooladminController::class,'postforgot'])->name('forget.password.post');

Route::get('resetpassword/email/{email}',[CooladminController::class,'resetpassword']);

Route::post('resetpassword',[CooladminController::class,'postresetpassword'])->name('reset.password.post');