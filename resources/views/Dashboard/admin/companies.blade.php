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
                <h1 class="text-center">Companies</h1>
                <br><br>
                <div class="row content-area">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Company Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$company->name}}</td>
                                <td>
                                    @if($company->status=="active")
                                        Active
                                    @else
                                        Pending
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="paginate">{!! $companies->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
