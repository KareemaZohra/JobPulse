@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner">
                    <img src="{{asset('/uploads/').'/'.$page->banner}}" alt="{{$page->name}}" width="1000" style="display: block;margin: auto">
                </div>
            </div>
        </div>

        <div class="row">
            <br><br>
            <h1 class="text-center" style="text-transform: uppercase">{{$page->name}}</h1>
            <br><br>
            <h3>{{$page->title}}</h3>
            <p>{{$page->description}}</p>
        </div>
    </div>

@endsection
