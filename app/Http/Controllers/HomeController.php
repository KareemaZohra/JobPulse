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

        $jobsByCategory = DB::table('jobs')
            ->select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->get();


        return view('home', compact('topCompanies','jobsByCategory'));
    }
}
