<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show(){
        $userId = Auth::id();
        $user = User::where('id',$userId)->first();

        return view('Dashboard.home', compact('user'));
    }

    public function adminDashboard(){
       $activeCompanies = User::where('status','active')
                               ->where('role','company')
                               ->count();
        $inactiveCompanies = User::where('status','inactive')
                                ->where('role','company')
                                ->count();
        $postedJobs = Jobs::count();

        return view('Dashboard.admin.dashboard',compact('activeCompanies','inactiveCompanies','postedJobs'));
    }

    public function adminCompanies(){
        $companies = User::where('role','company')->paginate(5);

        return view('Dashboard.admin.companies',compact('companies'));
    }

    public function adminJobs(){
        $jobs = Jobs::paginate(5);

        return view('Dashboard.admin.jobs',compact('jobs'));
    }
}
