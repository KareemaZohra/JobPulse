<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
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

Auth::routes();

Route::get('/',[HomeController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/all',[JobsController::class,'allJobs']);
Route::get('/job/{id}',[JobsController::class,'jobDetail']);

Route::get('/dashboard',[DashboardController::class,'show']);

Route::get('/dashboard/admin/dashboard',[DashboardController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/dashboard/admin/companies',[DashboardController::class,'adminCompanies'])->name('admin.companies');
Route::get('/dashboard/admin/jobs',[DashboardController::class,'adminJobs'])->name('admin.jobs');

