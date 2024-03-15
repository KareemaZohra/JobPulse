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
                <h1 class="text-center">Create Profile</h1>
                <br><br>
                <form action="/profile/create" method="POST">
                    @csrf
                    <div class="row content-area">

                    <div class="col-6">
                        <p>1. Personal Information</p>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                            <input type="text" name="cName" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Nationality</label>
                            <input type="text" name="nationality" class="form-control" id="exampleFormControlInput2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" id="exampleFormControlInput3">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">LinkedIn Profile</label>
                            <input type="text" name="linkedin" class="form-control" id="exampleFormControlInput4">
                        </div>
                    </div>

                    <div class="col-6"></div>

                    <p>2. Academic Information</p>

                    <div class="col-6">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="degree">
                                <option selected>Choose Degree</option>
                                <option value="bsc">B.Sc</option>
                                <option value="msc">M.Sc</option>
                                <option value="honours">Honours</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput5" class="form-label">University</label>
                            <input type="text" name="university" class="form-control" id="exampleFormControlInput5">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput6" class="form-label">CGPA</label>
                            <input type="text" name="cgpa" class="form-control" id="exampleFormControlInput6">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput7" class="form-label">Passing Year</label>
                            <input type="date" name="uniPassYear" class="form-control" id="exampleFormControlInput7">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="boardExam">
                                <option selected>Choose Board Exam</option>
                                <option value="bsc">HSC</option>
                                <option value="msc">SSC</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput8" class="form-label">School/College</label>
                            <input type="text" name="college" class="form-control" id="exampleFormControlInput8">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput9" class="form-label">GPA</label>
                            <input type="text" name="gpa" class="form-control" id="exampleFormControlInput9">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput10" class="form-label">Passing Year</label>
                            <input type="date" name="colgPassYear" class="form-control" id="exampleFormControlInput10">
                        </div>
                    </div>

                    <p>3. Career Information (only fill out the field that matches you)</p>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput11" class="form-label">Your Last Company</label>
                            <input type="text" name="company" class="form-control" id="exampleFormControlInput11">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput12" class="form-label">Designation</label>
                            <input type="text" name="designation" class="form-control" id="exampleFormControlInput12">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput13" class="form-label">Joining Date</label>
                            <input type="date" name="joinDate" class="form-control" id="exampleFormControlInput13">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput14" class="form-label">Leaving Date</label>
                            <input type="date" name="leaveDate" class="form-control" id="exampleFormControlInput14">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="exampleFormControlInput15" class="form-label">Skills (write with comma)</label>
                        <input type="text" name="skills" class="form-control" id="exampleFormControlInput15">
                    </div>

                    <div class="row">
                        <button class="btn btn-primary" type="submit" style="width: 300px; display: block;margin: auto">Save</button>
                    </div>

                </div>

                </form>
            </div>
        </div>
    </div>
@endsection
