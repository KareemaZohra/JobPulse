@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="home-banner">
{{--                    <img src="{{asset('assets/img/home_banner.jpg')}}" class="img-fluid" alt="banner">--}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
       <div class="spacer"></div>
        <h1 class="text-center">Our Top Companies</h1>
        <br><br>
        <div class="row">
            @foreach($topCompanies as $topCompany)
                <div class="col">
                    <div class="company-card text-center">{{$topCompany->name}}</div>
                </div>
            @endforeach
        </div>
        <div class="spacer"></div>
    </div>
    <div class="container">
        <h1 class="text-center">Recent Published Jobs</h1>
        <br><br>
        <div class="row">
            <div class="col-12">
                @foreach($jobsByCategory as $category)
                 <span class="badge bg-info text-dark">{{$category->category}}-{{$category->total}}</span>
                @endforeach
            </div>
        </div>
    </div>

@endsection
