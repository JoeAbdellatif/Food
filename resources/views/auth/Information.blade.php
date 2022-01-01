<!DOCTYPE html>
<html lang="en">
    @include('AssetComponent.Meta')

    <style>
        .SignupButtonn{
            width: 100% ;
            Background-color:#d9232d;
            color:white;
            font-weight: bold;
        }
        .SignupButton {
            width: 100% ;
            Background-color:white;
            color:#d9232d;
            font-weight: bold;
        }
        .SignupButton:hover {
            color:#d9232d;
        }
        .SignupButton > .active:hover {
            color:white;
        }
        .activee {

            Background-color:#d9232d;
            color:white;
        }
        .imggg{
            width: 40vw;
        }
        .btn:focus {
  box-shadow: none;
}

        #charity{
            display:block;
        }

    </style>
<body>
    @include('AssetComponent.Header')


    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-md-6 mt-5">
                <img class="imggg" src="assets/img/SignUpImage.png" />
            </div>
            <div class="col-md-6 mt-5">
                <div class="container mt-5">
                     <div id="charity" >

                        <form class="mt-5" action="SaveFormCharity" method="post" enctype="multipart/form-data">

                            <div class="row">
                              <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                  <label class="form-label" for="firstName"> Focus Area</label>
                                  <input type="text" id="firstName" value="{{ old('focusArea') }}"  name="focusArea" class="form-control " />

                                  <span style="color:red; background-color:transparent;">@error('focusArea'){{$message}} @enderror</span>
                                </div>

                              </div>
                              <div class="col-md-6 mb-4 d-flex align-items-center">

                                <div class="form-outline datepicker w-100">
                                    <label for="birthdayDate" class="form-label">Website</label>
                                  <input
                                    type="text"
                                    name="website"
                                    class="form-control "

                                  />

                                  <span style="color:red; background-color:transparent;">@error('website'){{$message}} @enderror</span>
                                </div>

                              </div>
                            </div>

                            <input type="hidden" id="Id" name="Id" value="{{session()->get('userid')}}" class="form-control " />

                            <div class="row">
                              <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="emailAddress">Registration Number</label>
                                  <input type="text" id="emailAddress" name="registrationNumber" value="{{ old('registrationNumber') }}" class="form-control " />

                                  <span style="color:red; background-color:transparent;">@error('registrationNumber'){{$message}} @enderror</span>
                                </div>

                              </div>
                              <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Tax Number</label>
                                  <input type="tel" id="phoneNumber" name="taxNumber" value="{{ old('taxNumber') }}"  class="form-control " />

                                  <span style="color:red; background-color:transparent;">@error('taxNumber'){{$message}} @enderror</span>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                  <div class="form-outline">
                                      <label class="form-label" for="emailAddress">Description</label>
                                    <textarea type="text" id="emailAddress" name="description" class="form-control " cols="40" rows="3"></textarea>

                                    <span style="color:red; background-color:transparent;">@error('description'){{$message}} @enderror</span>
                                  </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                  <div class="form-outline">
                                      <label class="form-label" for="phoneNumber">Address</label>
                                    <textarea type="text" id="phoneNumber" name="Address" class="form-control " cols="40" rows="3"></textarea>

                                    <span style="color:red; background-color:transparent;">@error('Address'){{$message}} @enderror</span>
                                  </div>

                                </div>
                              </div>


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


    @include('AssetComponent.Footer')

    @include('AssetComponent.Gotop')

</body>

</html>
