<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jobs;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $topCompanies = User::take(5)->where('status','active')->get();

        $jobsByCategory = Jobs::select('category', DB::raw('count(*) as total'))
                                ->groupBy('category')
                                ->get();

        $recentJobs = Jobs::orderBy('created_at','DESC')->take(10)->paginate(5);

        foreach( $recentJobs as $recentJob){
            $skills = explode(',', $recentJob->tags);
            $recentJob->tags = $skills;
        }

        return view('home', compact('topCompanies','jobsByCategory','recentJobs'));
    }
}
