<?php

use App\Http\Controllers\pdfGenerator;
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
    // return view('HomePage');
    return 'Hello world !!';
});

// HomePage
Route::view('templateOne', 'template1');
Route::view('templateTwo', 'template2');
Route::view('templateThree', 'template3');
Route::view('templateFour', 'template4');
Route::view('templateFive', 'template5');

Route::get('Template1',[pdfGenerator::class,'downloadTemplate1']);
Route::get('Template2',[pdfGenerator::class,'downloadTemplate2']);
Route::get('Template3',[pdfGenerator::class,'downloadTemplate3']);
Route::get('Template4',[pdfGenerator::class,'downloadTemplate4']);
Route::get('Template5',[pdfGenerator::class,'downloadTemplate5']);



