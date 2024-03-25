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
                    <form action="/account/update" method="POST">
                        @csrf
                        Name : <input type="text" name="name" value="{{$account->name}}">
                        Email : <input type="email" name="email" value="{{$account->email}}">
                        <button class="btn btn-primary" style="width: 200px">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
