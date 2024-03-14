<?php

namespace App\Http\Controllers;

use App\Models\JobCandidateMapping;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    //
    public function allJobs(){
        $recentJobs = Jobs::paginate(8);

        foreach( $recentJobs as $recentJob){
            $skills = explode(',', $recentJob->tags);
            $recentJob->tags = $skills;
        }

        return view('Jobs.allJobs',compact('recentJobs'));
    }

    public function jobDetail($id){

        $job = Jobs::where('id',$id)->first();

        $skills = explode(',', $job->tags);
        $job->tags = $skills;

        return view('Jobs.jobDetail',compact('job'));
    }

    public function applyJob($id){

        $row = JobCandidateMapping::create([
            'job_id' => $id,
            'user_id' => Auth::id()
        ]);

        if($row){
            return view('Jobs.applySuccess');
        }
        else{
            return view('general.error');
        }

    }
}
