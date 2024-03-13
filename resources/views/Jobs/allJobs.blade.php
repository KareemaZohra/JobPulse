@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="job-banner">
                </div>
            </div>
        </div>
    </div>

    <div class="spacer"></div>
    <h1 class="text-center">Find Your Job</h1>
    <br><br>
    <div class="container">
        <div class="row">
            @include('Jobs.jobList')
        </div>
    </div>
    <div class="spacer"></div>
@endsection
