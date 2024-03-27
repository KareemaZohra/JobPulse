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
                <h1 class="text-center">Pages</h1>
                <br><br>
                <div class="row content-area">
                    <h3>Available pages</h3>
                    <ul>
                        @foreach($pages as $page)
                            <li><a href="/{{$page->key}}">{{$page->name}}</a></li>
                        @endforeach
                    </ul>
                    <a href="/page/create" type="button" class="btn btn-primary" style="width: 250px">Create New Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
