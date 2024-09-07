<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtDecisionController;

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

Route::get('/testchat', function () {
    return view('chatboot');
});

Route::get('/decisions', [CourtDecisionController::class,'index'])->name('decisiontest.index');
Route::get('/viewtest', [CourtDecisionController::class,'testViewLayout'])->name('testview.index');
Route::get('/bydecision/{id}', [CourtDecisionController::class,'listbyid'])->name('decisionplus.showbyid');

Route::post('/chat', 'App\Http\Controllers\ChatController');


