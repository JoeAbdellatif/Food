
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
                <div class="container mt-5">


                    <div id="user">
                        <form class="mt-5" action="Login" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="phoneNumber">Email</label>
                                        <input type="text" id="email" name="email" class="form-control " />
                                        <span
                                            style="color:red; background-color:transparent;">@error('email'){{ $message }}
                                            @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Password</label>
                                        <input type="password" id="emailAddress" name="password"
                                            class="form-control " />
                                        <span
                                            style="color:red; background-color:transparent;">@error('password'){{ $message }}
                                            @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <a href="/Signup" style="color:White;font-weight:bold;">Don't have an account?</a>
                            <div class="mt-4 pt-2">
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
