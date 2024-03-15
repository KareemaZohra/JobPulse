<?php

namespace App\Http\Controllers;

use App\Models\JobCandidateMapping;
use App\Models\Jobs;
use App\Models\Profiles;
use App\Models\User;
use App\Models\UserCompanyMapping;
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

    public function adminEmployees(){
        $employees = User::where('role','!=','company')->where('role','!=','admin')->paginate(5);

        return view('Dashboard.admin.employees',compact('employees'));
    }

    public function candidateDashboard(){
        $userId = Auth::id();
        $applied = JobCandidateMapping::where('user_id',$userId)->count();

        return view('Dashboard.candidate.dashboard',compact('applied'));
    }

    public function candidateJobs(){
        $userId = Auth::id();
        $appliedJobs = JobCandidateMapping::where('user_id',$userId)->with('Job')->paginate(5);

        return view('Dashboard.candidate.jobs',compact('appliedJobs'));
    }

    public function companyDashboard(){
        $userId = Auth::id();
       $jobPosts = Jobs::where('created_by',$userId)->count();
       $employees = UserCompanyMapping::where('employer_id',$userId)->count();

       return view('Dashboard.company.dashboard',compact('jobPosts','employees'));
    }

    public function companyJobs(){
        $userId = Auth::id();
        $jobs = Jobs::where('created_by',$userId)->withCount('candidates')->paginate(5);

        return view('Dashboard.company.jobs',compact('jobs'));
    }

    public function companyEmployees(){
        $userId = Auth::id();
        $employees = UserCompanyMapping::where('employer_id',$userId)->with('employee')->paginate(5);

        return view('Dashboard.company.employee',compact('employees'));
    }

    public function jobApplicants($id){
        $applicants = JobCandidateMapping::where('job_id',$id)->with('User')->paginate(5);

        return view('Dashboard.company.applicants',compact('applicants'));
    }

    public function ActionOnApplicant($id,$action){
        JobCandidateMapping::where('id',$id)->update([
            'status' => $action
        ]);
        return view('General.success');
    }
}
