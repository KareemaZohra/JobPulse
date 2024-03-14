@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="dashboard-menu">
                    @if($user->role=="admin")
                        @include('Dashboard.adminMenu')
                    @elseif($user->role=="company")
                        @include('Dashboard.companyMenu')
                    @else
                        @include('Dashboard.candidateMenu')
                    @endif
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <button type="button" class="btn btn-primary">
                        @if($user->role=="admin")
                            Admin
                        @elseif($user->role=="company")
                            Company
                        @else
                            Candidate
                        @endif
                    </button>
                </div>

                <div class="spacer"></div>
                <div class="row content-area">
                    <h1 class="text-center">Welcome to {{$user->role}} Dashboard!</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
