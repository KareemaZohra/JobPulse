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
                <h1 class="text-center">See All Your Job Posts</h1>
                <br><br>
                <div class="row content-area">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Publish Date</th>
                            <th scope="col">Edit/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->title}}</td>
                                <td>
                                    {{$job->updated_at}}
                                </td>
                                <td>
                                    <a href="/job/{{$job->id}}" type="button" class="btn btn-primary">view</a>
                                    <a href="/job/{{$job->id}}/applicants" type="button" class="btn btn-primary">Applicants - {{$job->candidates_count}}</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="paginate">{!! $jobs->links() !!}</div>

                </div>
            </div>
        </div>
    </div>
@endsection
