<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Models\Announcement;
use App\Models\chat;
use App\Models\User;

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

Route::get('/', App\Http\Controllers\Admin\UsersController::class, 'index')->name('index');
Route::get('/dashboard', [App\Http\Controllers\Admin\UsersController::class, 'dashboard'])->middleware(['auth','verified','admin'])->name('dashboard');
Route::post('/submitplan-{id}', [App\Http\Controllers\Admin\UsersController::class, 'submitplan'])->middleware(['auth','verified','admin'])->name('submitplan');
Route::get('/usermanagement', [App\Http\Controllers\Admin\UsersController::class, 'usermanagement'])->middleware(['auth','verified','admin'])->name('usermanagement');
Route::get('/withdrawalrequest', [App\Http\Controllers\Admin\UsersController::class, 'withdrawalrequest'])->middleware(['auth','verified','admin'])->name('withdrawalrequest');
Route::get('/deletewithdrawrequest-{id}', [App\Http\Controllers\Admin\UsersController::class, 'deletewithdrawrequest'])->middleware(['auth','verified','admin'])->name('deletewithdrawrequest');
Route::get('/donewithdrawrequest-{id}', [App\Http\Controllers\Admin\UsersController::class, 'donewithdrawrequest'])->middleware(['auth','verified','admin'])->name('donewithdrawrequest');
Route::get('/rewardrequest', [App\Http\Controllers\Admin\UsersController::class, 'rewardrequest'])->middleware(['auth','verified','admin'])->name('rewardrequest');
Route::get('/investmentrequest', [App\Http\Controllers\Admin\UsersController::class, 'investmentrequest'])->middleware(['auth','verified','admin'])->name('investmentrequest');
Route::get('/editinvestmentrequest-{id}', [App\Http\Controllers\Admin\UsersController::class, 'editinvestmentrequest'])->middleware(['auth','verified','admin'])->name('editinvestmentrequest');
Route::get('/deleteinvestmentrequest-{id}', [App\Http\Controllers\Admin\UsersController::class, 'deleteinvestmentrequest'])->middleware(['auth','verified','admin'])->name('deleteinvestmentrequest');
Route::post('/submitinvestmentrequest-{id}', [App\Http\Controllers\Admin\UsersController::class, 'submitinvestmentrequest'])->middleware(['auth','verified','admin'])->name('submitinvestmentrequest');

Route::post('/add-history', [App\Http\Controllers\Admin\UsersController::class, 'addhistory'])->middleware(['auth','verified','admin'])->name('add-history');

Route::get('/investmentaccounts', [App\Http\Controllers\Admin\UsersController::class, 'investmentaccounts'])->middleware(['auth','verified','admin'])->name('investmentaccounts');
Route::post('/updateTrc', [App\Http\Controllers\Admin\UsersController::class, 'updateTrc'])->middleware(['auth','verified','admin'])->name('updateTrc');
Route::post('update-rp', [App\Http\Controllers\Admin\UsersController::class, 'updaterp'])->middleware(['auth','verified','admin'])->name('update-rp');
Route::post('update-announcement', [App\Http\Controllers\Admin\UsersController::class, 'updateannouncement'])->middleware(['auth','verified','admin'])->name('update-announcement');
Route::post('update-psp', [App\Http\Controllers\Admin\UsersController::class, 'updatepsp'])->middleware(['auth','verified','admin'])->name('update-psp');
Route::post('update-usdtprice', [App\Http\Controllers\Admin\UsersController::class, 'updateusdtprice'])->middleware(['auth','verified','admin'])->name('update-usdtprice');
Route::post('update-minwithdrawal', [App\Http\Controllers\Admin\UsersController::class, 'updateminwithdrawal'])->middleware(['auth','verified','admin'])->name('update-minwithdrawal');
Route::post('update-companyTO', [App\Http\Controllers\Admin\UsersController::class, 'updatecompanyTO'])->middleware(['auth','verified','admin'])->name('update-companyTO');
Route::post('update-wtbr', [App\Http\Controllers\Admin\UsersController::class, 'updatewtbr'])->middleware(['auth','verified','admin'])->name('update-wtbr');
Route::get('activate', [App\Http\Controllers\Admin\UsersController::class, 'activate'])->middleware(['auth','verified','admin'])->name('activate');
Route::get('deactivate', [App\Http\Controllers\Admin\UsersController::class, 'deactivate'])->middleware(['auth','verified','admin'])->name('deactivate');




// Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->middleware(['auth','verified'])->name('register');;

Route::post('user-dashboard-graph', [App\Http\Controllers\User\UsersController::class, 'userdashboardgraph'])->middleware(['auth','verified','locked'])->name('user-dashboard-graph');
Route::get('user-dashboard', [App\Http\Controllers\User\UsersController::class, 'dashboard'])->middleware(['auth','verified','locked'])->name('user.dashboard');
Route::post('investusdt', [App\Http\Controllers\User\UsersController::class, 'investusdt'])->middleware(['auth','verified'])->name('investusdt');
Route::get('investptop-{id}', [App\Http\Controllers\User\UsersController::class, 'investptop'])->middleware(['auth','verified'])->name('investptop');
Route::get('viewptop-{id}', [App\Http\Controllers\User\UsersController::class, 'viewptop'])->middleware(['auth','verified'])->name('viewptop');
Route::get('chat', [App\Http\Controllers\User\UsersController::class, 'chat'])->middleware(['auth','verified'])->name('chat');
Route::post('investptop_', [App\Http\Controllers\User\UsersController::class, 'investptop_'])->middleware(['auth','verified'])->name('investptop_');
Route::post('appeal', [App\Http\Controllers\User\UsersController::class, 'appeal'])->middleware(['auth','verified'])->name('appeal');
Route::get('invest', [App\Http\Controllers\User\UsersController::class, 'invest'])->middleware(['auth','verified'])->name('invest');
Route::get('withdrawal', [App\Http\Controllers\User\UsersController::class, 'withdrawal'])->middleware(['auth','verified'])->name('withdrawal');
Route::post('submitwithdrawrequest', [App\Http\Controllers\User\UsersController::class, 'submitwithdrawrequest'])->middleware(['auth','verified'])->name('submitwithdrawrequest');
Route::get('contact', [App\Http\Controllers\User\UsersController::class, 'contact'])->middleware(['auth','verified'])->name('contact');
Route::get('reward', [App\Http\Controllers\User\UsersController::class, 'reward'])->middleware(['auth','verified'])->name('reward');



// Route::get('/plans', App\Http\Controllers\Admin\UsersController::class, 'plans')->name('plans');
// Route::view('noti','user.noti',[
//     'data' => 1
// ]);

// Route::view('rchat','user.rchat',[
//     'data' => chat::where('reqid',1)->get()
// ]);
Route::post('user/change', [App\Http\Controllers\Admin\UsersController::class, 'changePassword'])->middleware(['auth','verified'])->name('change_password');
Route::get('change-password',[App\Http\Controllers\Admin\UsersController::class, 'gotochangepassword'])->middleware(['auth','verified'])->name('changepassword');


// Route::get('UserDetails/{user}', [App\Http\Controllers\Admin\UsersController::class, 'userDetails'])->middleware(['auth','verified','locked','admin'])->name('user-details');

Route::namespace('App\Http\Controllers\Admin')->group(function(){
    Route::resource('users',UsersController::class)->except(['show','create','store']);
});

Route::get('user/mig', function () {
    Artisan::call("migrate");
});
Route::get('user/dbsd', function () {
    Artisan::call("db:seed");
});
Route::get('user/dbwp', function () {
    Artisan::call("db:wipe");
});

Route::get('/cc', function () {
    Artisan::call("cache:clear");
});


require __DIR__.'/auth.php';
