@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="dashboard-menu">
                @include('Dashboard.companyMenu')
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <button type="button" class="btn btn-primary">Company</button>
            </div>
            <br><br>
            <h1 class="text-center">Dashboard</h1>
            <br><br>
            <div class="row content-area">
                <div class="col-4">
                    <div class="company-card text-center">
                        <h2>Job Posts <br> {{$jobPosts}}</h2>
                    </div>
                </div>
                <div class="col-4">
                    <div class="company-card text-center">
                        <h2>Company Employees <br> {{$employees}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
