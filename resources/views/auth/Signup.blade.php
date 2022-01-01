
@extends('Layout');


@section('content')

<style>
    label{
        color:white;
    }
    .SignupButtonn {
        width: 100%;
        Background-color: #d9232d;
        color: white;
        font-weight: bold;
    }
</style>
    <br><br><br>

    <div class="container mb-5 " style="height:80vh;background-image: url('assets/img/Signin2.jpg'); background-repeat: no-repeat; ">
        <div class="row">
            <div class="col-md-6 mt-5">

            </div>
            <div class="col-md-5 mt-5">
                <div class="container">


                    <div id="user">
                        <form action="SignupForm" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="firstName">First Name*</label>
                                        <input type="text" id="firstName" value="{{ old('firstname') }}"
                                            name="firstname" class="form-control " />
                                        <span
                                            style="font-weight:bold; color:white; background-color:#d9232d;">@error('firstname'){{ $message }}
                                            @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Last Name*</label>
                                        <input type="text" id="lastName" value="{{ old('lastname') }}" name="lastname"
                                            class="form-control " />
                                        <span
                                            style="font-weight:bold; color:white; background-color:#d9232d;">@error('lastname'){{ $message }}
                                            @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="" class="form-label">Avatar</label>
                                        <input type="file" name="image" class="form-control " />
                                        <span
                                            style="font-weight:bold; color:white;  background-color:#d9232d;">@error('image'){{ $message }}
                                            @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="mb-2 pb-1">Gender* </label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="Female"
                                            {{ old('gender') == 'Female' ? 'checked=' . '"checked"' : '' }} />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="Male" {{ old('gender') == 'Male' ? 'checked=' . '"checked"' : '' }} />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>
                                    <br>
                                    <span
                                        style="font-weight:bold; color:white;  background-color:#d9232d;">@error('gender'){{ $message }}
                                        @enderror</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Email*</label>
                                        <input type="email" id="emailAddress" name="email" value="{{ old('email') }}"
                                            class="form-control " />

                                        <span
                                            style="font-weight:bold; color:white;  background-color:#d9232d;">@error('email'){{ $message }}
                                            @enderror</span>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Password*</label>
                                        <input type="password" id="emailAddress" name="password"
                                            class="form-control " />

                                        <span
                                            style="font-weight:bold; color:white; background-color:#d9232d;">@error('password'){{ $message }}
                                            @enderror</span>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-2 ">
                                <input class="btn btn SignupButtonn" type="submit" value="Submit" />
                            </div>
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop

