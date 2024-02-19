<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Auth\Console;
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
      return view('front.index');
})->name('index');

Route::get('/home', function () {
 
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('front.aboutus');
})->name('aboutus');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');
Route::get('/contactgegrid', function () {
    return view('front.contact_gegrid');
})->name('contactgegrid');
Route::post('/send-mail',[MailController::class, 'index'])->name('contactmail');

Route::get('/pumps', function () {
    return view('front.pumps');
})->name('pumps');



Route::get('/cleareverything', function () {
    Artisan::call('cache:clear');
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('optimize');
    echo "Optimized<br>";
});