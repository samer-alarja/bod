<?php
use  App\Http\Controllers\Panel;
use  App\Http\Controllers\Login;
use  App\Http\Controllers\menucontroller;
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

Route::get('/', [panel::class,"index"])->name('name.index');
Route::post('/check', [login::class,"check"]) -> name('name.login');

Route::get('/login', [login::class,"login"]);
Route::get('login/successlogin', [login::class,"successlogin"]);
Route::get('/login/logout',[login::class,"logout"]);

Route::get('/menucontroller/menue',[menucontroller::class,"menue"])-> name('name.menue');
Route::get('/menucontroller/menu',[menucontroller::class,"menu"])-> name('name.menu');
Route::get('/menu_item/{{$menus->id}}',[menucontroller::class,"title"]);

Route::get('/menucontroller/mensue',[menucontroller::class,"menueiteam"])-> name('name.menuiteam');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


