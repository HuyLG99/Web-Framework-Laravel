<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
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
    return view('Home.admin');
});

Route::get('/users', function (){

    $users = DB::table('users')->get();//lay toan bo dữ liệu từ bảng user, nhớ bổ sung namespace cho DB,
    //tạm thời chưa học nên lấy dữ liệu tại file web.php nhưng sau này viết tại controller
    //var_dump($users);
    return view('users.index',  ['users' => $users]);
});


Route::get('/checkfail', function (){
    echo "checkfail page";
    return view('home.admin');
});
Route::get('checkage/{age?}', function ($age) {
    echo $age;
    return view('home.admin');
})->middleware(\App\Http\Middleware\CheckAge::class);

Route::resource('users', UserController::class);
Route::get('users/create', function () {
    return view('users.create');
});


Route::resource('profiles', ProfileController::class);


Route::get('profiles/create', function () {
    return view('profiles.create');
});

Route::resource('products', ProductController::class);



Route::get('products/create', function () {
    return view('product.create');
});


Route::resource('orders', OrderController::class);
