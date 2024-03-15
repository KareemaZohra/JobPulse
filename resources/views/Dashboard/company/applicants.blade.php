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
                <h1 class="text-center">See The Apllicants</h1>
                <br><br>
                <div class="row content-area">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Apply Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applicants as $applicant)
                            <tr>
                                <td>{{$applicant->user->name}}</td>
                                <td>
                                    {{$applicant->created_at}}
                                </td>
                                <td>
                                    <a href="/dashboard/candidate/profile/{{$applicant->user->id}}" type="button" class="btn btn-primary">Applicant Profile</a>
                                    <a href="/applicant/{{$applicant->id}}/{{"selected"}}" type="button" class="btn btn-success">Select</a>
                                    <a href="/applicant/{{$applicant->id}}/{{"rejected"}}" type="button" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="paginate">{!! $applicants->links() !!}</div>

                </div>
            </div>
        </div>
    </div>
@endsection
