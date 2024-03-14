@extends('layouts.app')
@section('content')
    <div class="spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{$job->title}}</h1>
                <p>{{$job->description}}</p>
                <p>
                    <span>Skills : </span>
                    @foreach($job->tags as $tag)
                        <span class="badge bg-info text-dark">{{$tag}}</span>
                    @endforeach
                </p>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <button type="button" class="btn btn-info mb-3">{{$job->salary}}</button>
                <form action="/job/{{$job->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
@endsection
