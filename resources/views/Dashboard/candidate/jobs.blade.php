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
                <h1 class="text-center">Applied Jobs</h1>
                <br><br>
                <div class="row content-area">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Applying Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appliedJobs as $appliedJob)
                            <tr>
                                <td>{{$appliedJob->job->title}}</td>
                                <td>
                                    {{$appliedJob->created_at}}
                                </td>
                                <td>
                                    <a href="/job/{{$appliedJob->job->id}}" type="button" class="btn btn-primary">view</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="paginate">{!! $appliedJobs->links() !!}</div>

                </div>
            </div>
        </div>
    </div>
@endsection
