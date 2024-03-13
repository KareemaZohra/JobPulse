<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

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
}
