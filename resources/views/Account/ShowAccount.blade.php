@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="dashboard-menu">
                    @if(Auth::user()->role=="admin")
                        @include('Dashboard.adminMenu')
                    @elseif(Auth::user()->role=="company")
                        @include('Dashboard.companyMenu')
                    @else
                        @include('Dashboard.candidateMenu')
                    @endif
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <button type="button" class="btn btn-primary">
                        @if(Auth::user()->role=="admin")
                            Admin
                        @elseif(Auth::user()->role=="company")
                            Company
                        @else
                            Candidate
                        @endif
                    </button>
                </div>

                <div class="spacer"></div>
                <div class="row content-area">
                        <p>Name : {{$account->name}}</p>
                        <p>Email : {{$account->email}}</p>
                        <p>Account Status : {{$account->status}}</p>
                    <p>You enroled as : {{$account->role}}</p>
                    <a href="/account/edit/{{Auth::user()->id}}" class="btn btn-primary" style="width: 200px">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
