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

/**--------------------------------------------
 *               Sample 1 Routes
 *---------------------------------------------**/

Route::get('/', function () {
    return view('sample1.index');
})->name('index');

// *************sample 1************
Route::get('/sample2', function () {

    return view('sample2.index');
});
Route::get('/home', function () {

    return view('welcome');
});
Route::get('/about-us', function () {
    return view('sample1.aboutus');
})->name('aboutus');
Route::get('/contact', function () {
    return view('sample1.contact');
})->name('contact');
Route::get('/contactgegrid', function () {
    return view('sample1.contact_gegrid');
})->name('contactgegrid');
Route::post('/send-mail', [MailController::class, 'index'])->name('contactmail');

/**--------------------------------------------
 ******************Services Route for Sample 2************
 *---------------------------------------------**/

Route::get('/turbogenerator', function () {
    return view('sample1.services.turbogenerator');
})->name('turbogenerator');
Route::get('/turbine', function () {
    return view('sample1.services.turbine');
})->name('turbine');
Route::get('/compressor', function () {
    return view('sample1.services.compressor');
})->name('compressor');
Route::get('/gearbox', function () {
    return view('sample1.services.gearbox');
})->name('gearbox');
Route::get('/valve', function () {
    return view('sample1.services.valve');
})->name('valve');
Route::get('/pumps', function () {
    return view('sample1.services.pumps');
})->name('pumps');
Route::get('/blower', function () {
    return view('sample1.services.blower');
})->name('blower');
Route::get('/heat-Exchanger', function () {
    return view('sample1.services.heatExchanger');
})->name('heatExchanger');
Route::get('/alignment', function () {
    return view('sample1.services.alignment');
})->name('alignment');
Route::get('/retrofit-upgrade', function () {
    return view('sample1.services.retrofitUpgrade');
})->name('retrofitUpgrade');
Route::get('/design-system-study', function () {
    return view('sample1.services.designSystemStudy');
})->name('designSystemStudy');
Route::get('/training', function () {
    return view('sample1.services.training');
})->name('training');



/*---------------------------- END OF SECTION ----------------------------*/


/**--------------------------------------------
 *               Supply Route
 *---------------------------------------------**/

 Route::get('/parts', function () {
    return view('sample1.supply.parts');
})->name('parts');
Route::get('/tools', function () {
    return view('sample1.supply.tools');
})->name('tools');
Route::get('/relay-control-panels', function () {
    return view('sample1.supply.relayControlPanels');
})->name('relayControlPanels');
Route::get('/switchgears', function () {
    return view('sample1.supply.switchgears');
})->name('switchgears');
Route::get('/testing-equipment', function () {
    return view('sample1.supply.testing-equipment');
})->name('testing-equipment');
Route::get('/mv-motors', function () {
    return view('sample1.supply.mvMotors');
})->name('mvMotors');
// Route::get('/power-transformers', function () {
//     return view('sample1.powerTransformers');
// })->name('power-ransformers');


/*--------------- END OF SECTION --------------*/

/*--------------- END OF SAMPLE 1 ROUTES --------------*/



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


/**--------------------------------------------
 *               SAMPLE 2 ROUTES
 *---------------------------------------------**/





/*--------------- END OF SAMPLE 2 ROUTES --------------*/