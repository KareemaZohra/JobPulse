<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getCandidateProfile($id){
        $profile = Profiles::where('user_id',$id)->first();

        return view('Dashboard.candidate.showProfile',compact('profile'));
    }

    public function getProfileCreateForm(){
        return view('Dashboard.candidate.createProfile');
    }

    public function createProfile(Request $request){
        $input = $request->all();
        $user_id = Auth::id();

        $profile = Profiles::create([
            'name' => $input['cName'],
            'nationality' => $input['nationality'],
            'age'=> $input['age'],
            'LinkedinLink' => $input['linkedin'],
            'DegreeName' => $input['degree'],
            'university' => $input['university'],
            'cgpa' => $input['cgpa'],
            'passingYear' => $input['uniPassYear'],
            'HSC' => $input['boardExam'],
            'college' => $input['college'],
            'gpa' => $input['gpa'],
            'HSCpassingYear' => $input['colgPassYear'],
            'companyName' => $input['company'],
            'Designation' => $input['designation'],
            'JoiningDate' => $input['joinDate'],
            'LeavingDate' => $input['leaveDate'],
            'skills' => $input['skills'],
            'user_id' => $user_id
        ]);

        if($profile){
            return redirect()->route('candidate.profile');
        }
        else{
            return view('general.error');
        }

    }
}
