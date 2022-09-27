<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\QuestionsOptionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


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

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('topics', 'TopicController::class');
Route::get('questions', 'QuestionController::class');
Route::get('results', 'ResultsController::class');
Route::get('adminpanel', 'AdminPanelController::class');
Route::get('questionsOptions', 'QuestionsOptionsController::class');
Route::get('users', 'UserController::class');


