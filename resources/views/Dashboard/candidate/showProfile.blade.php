@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="dashboard-menu">
                    @include('Dashboard.candidateMenu')
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <button type="button" class="btn btn-primary">Candidate</button>
                </div>
                <br><br>
                <h1 class="text-center">Your Resume</h1>
                <br><br>
                <div class="row content-area">
                   @if($profile)
                        <div class="col-12">
                            <h3>Personal Details : </h3>
                            <p> Name : {{$profile->name}}</p>
                            <p> Nationality : {{$profile->nationality}}</p>
                            <p> Age : {{$profile->age}}</p>
                            <p> LinkedIn Profile : {{$profile->LinkedinLink}}</p>
                        </div>

                        <h3>Academic Details : </h3>

                       <div class="col-6">
                           <p>Degree : <span style="text-transform: uppercase">{{$profile->DegreeName}}</span></p>
                           <p>University : {{$profile->university}}</p>
                           <p>CGPA : {{$profile->cgpa}}</p>
                           <p>Passing Year : {{$profile->passingYear}}</p>
                       </div>

                       <div class="col-6">
                           <p>Board Exam : <span style="text-transform: uppercase">{{$profile->HSC}}</span></p>
                           <p>College : {{$profile->college}}</p>
                           <p>GPA : {{$profile->gpa}}</p>
                           <p>Passing Year : {{$profile->HSCpassingYear}}</p>
                       </div>

                        <h3>Professional Details : </h3>

                       <div class="col-12">
                           <p>Company : {{$profile->companyName}}</p>
                           <p>Designation : {{$profile->Designation}}</p>
                           <p>Joining Date : {{$profile->JoiningDate}}</p>
                           <p>Leaving Date : {{$profile->LeavingDate}}</p>
                           <p> Skill-set : {{$profile->skills}}</p>
                       </div>

                    @else
                       <p>You don't have a resume readied. <a href="/profile/create">Create One</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
