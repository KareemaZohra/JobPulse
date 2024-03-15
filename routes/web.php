<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
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
Route::post('/job/{id}',[JobsController::class,'applyJob']);

Route::get('/dashboard',[DashboardController::class,'show']);

Route::get('/dashboard/admin/dashboard',[DashboardController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/dashboard/admin/companies',[DashboardController::class,'adminCompanies'])->name('admin.companies');
Route::get('/dashboard/admin/jobs',[DashboardController::class,'adminJobs'])->name('admin.jobs');
Route::get('/dashboard/admin/employees',[DashboardController::class,'adminEmployees'])->name('admin.employees');

Route::get('/dashboard/candidate/dashboard',[DashboardController::class,'candidateDashboard'])->name('candidate.dashboard');
Route::get('/dashboard/candidate/jobs',[DashboardController::class,'candidateJobs'])->name('candidate.jobs');

Route::get('/dashboard/candidate/profile/{id}',[ProfileController::class,'getCandidateProfile']);
Route::get('/profile/create',[ProfileController::class,'getProfileCreateForm']);
Route::post('/profile/create',[ProfileController::class,'createProfile']);

Route::get('/dashboard/company/dashboard',[DashboardController::class,'companyDashboard'])->name('company.dashboard');
Route::get('/dashboard/company/jobs',[DashboardController::class,'companyJobs'])->name('company.jobs');
Route::get('/dashboard/company/employees',[DashboardController::class,'companyEmployees'])->name('company.employees');
Route::get('/job/{id}/applicants',[DashboardController::class,'jobApplicants']);
Route::get('/applicant/{id}/{action}',[DashboardController::class,'ActionOnApplicant']);

