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
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Role</th>
                            <th scope="col">View/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $Employee)
                            <tr>
                                <td>{{$Employee->employee->name}}</td>
                                <td>
                                    {{$Employee->employee->role}}
                                </td>
                                <td>
                                    <a href="" type="button" class="btn btn-primary">View</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="paginate">{!! $employees->links() !!}</div>

                </div>
            </div>
        </div>
    </div>
@endsection
