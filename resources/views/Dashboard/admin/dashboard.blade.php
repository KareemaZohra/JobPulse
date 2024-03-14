@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="dashboard-menu">
                        @include('Dashboard.adminMenu')
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <button type="button" class="btn btn-primary">Admin</button>
                </div>
                <br><br>
                <h1 class="text-center">Dashboard</h1>
                <br><br>
                <div class="row content-area">
                    <div class="col-4">
                        <div class="company-card text-center">
                            <h2>Active Companies <br> {{$activeCompanies}}</h2>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="company-card text-center">
                            <h2>Inactive Companies <br> {{$inactiveCompanies}}</h2>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="company-card text-center">
                            <h2>Jobs Posted <br> {{$postedJobs}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
