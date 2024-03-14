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
                <h1 class="text-center">Jobs</h1>
                <br><br>
                <div class="row content-area">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Edit/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->name}}</td>
                                <td>
                                    {{$employee->role}}
                                </td>
                                <td>
                                    <a href="" type="button" class="btn btn-primary">Edit</a>
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
