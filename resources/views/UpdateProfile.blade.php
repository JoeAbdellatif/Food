
@extends('Layout');


@section('content')

    <style>
        body {
            background: darkred
        }

        .form-control:focus {
            box-shadow: none;
            border-color: darkred
        }

        .profile-button {
            background: darkred;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: darkred
        }

        .profile-button:focus {
            background: darkred;
            box-shadow: none
        }

        .profile-button:active {
            background: darkred;
            box-shadow: none
        }

        .back:hover {
            color: darkred;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: darkred;
            color: #fff;
            cursor: pointer;
            border: solid 1px darkred
        }

        .iiiim {
            width: 15vw;
            height: 30vh;
        }

    </style>


    <br><br><br>
    <br><br><br>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row mt-5">

            <div class="col-md-4 border-right">
                @if(session()->get('useravatar') != null)
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                    class="rounded-circle mt-5 iiiim" src="uploads/avatar/{{ $user->avatar }}"><span
                    class="font-weight-bold">{{ $user->firstName }}</span><span
                    class="text-black-50">{{ $user->email }}</span><span>
                </span></div>
               @else
                @if(session()->get('usergender')== "Male")
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                        class="rounded-circle mt-5 iiiim" src="assets/img/Avatar/AvatarMale.jpg"><span
                        class="font-weight-bold">{{ $user->firstName }}</span><span
                        class="text-black-50">{{ $user->email }}</span><span>
                    </span></div>
                @else
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                    class="rounded-circle mt-5 iiiim" src="assets/img/Avatar/AvatarFemale2.png"><span
                    class="font-weight-bold">{{ $user->firstName }}</span><span
                    class="text-black-50">{{ $user->email }}</span><span>
                </span></div>
                @endif
               @endif

                <label for="birthdayDate" class="form-label">Change avatar</label>
                <input type="file" name="image" form="formmm" class="form-control " />
                <br>
            </div>
            <div class="col-md-8 border-right">
                <form method="POST" id="formmm" action="updateProfile" enctype="multipart/form-data">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">First Name</label><input
                                    type="text" class="form-control" name="firstName"
                                    value="{{ $user->firstName }}"></div>
                            <div class="col-md-6"><label class="labels">Last Name</label><input
                                    type="text" class="form-control" value="{{ $user->lastName }}" name="lastName">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Gender</label><input type="text"
                                    class="form-control" placeholder="Gender" readonly value="{{ $user->Gender }}">
                            </div>
                            <br>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                    class="form-control" placeholder="email" readonly value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </div>
                    @csrf
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>


    @stop


