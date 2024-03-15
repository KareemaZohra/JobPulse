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
                <h1 class="text-center">Dashboard</h1>
                <br><br>
                <div class="row content-area">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="company-card text-center">
                            <h2>Jobs Applied <br> {{$applied}}</h2>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
