<?php

use App\Http\Controllers\CourseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Lushidev\ApiLocation\Test;


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
Route::get('/courses',[CourseController::class,'index'])->name('courses');
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});




    // $this->ip = $_SERVER[REMOTE_ADDR];
    //     $client = new Client([
    //          'base_uri'  => getenv('API_URL_LOC'),
    //           'headers'   =>  [
    //                 $this->ip,
    //                 'access_key' => getenv('APILOC_KEY')
    //             ]
    //         ]);
    //  return echo "jocelin";




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


// Route::get('/', function () {
//     $test = new Test();

//     return $test->index();
// });