
<base href="/public">

@extends('Layout')


@section('content')


    <div class="container mt-5">
        <section class="member-details mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="img-container">
                            <img src="/uploads/Recipe/{{ $Recipe->Thumbnail  }}" alt="team member"
                                class="img-full">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="member_designation">
                            <h2>{{ $Recipe->Name  }} </h2>
                            <span>{{ $Recipe->Country  }} </span>
                        </div>
                        <div class="member_desc">
                            <p>
                                {{ $Recipe->description  }}

                            </p>
                            <ul class="styled_list">
                                <li class=""><i style="color :#c01508;"
                                    class="fa fa-chevron-circle-right red-color" aria-hidden="true"></i> Preparation Time :
                                    <strong>{{$Recipe->PrepTime}} minutes</strong>
                                </li>
                                <li class=""><i style="color :#c01508;"
                                        class="fa fa-chevron-circle-right red-color" aria-hidden="true"></i> Coocking Time :
                                        <strong>  {{$Recipe->CoockingTime}} minutes</strong> </li>
                                <li class=""><i style="color :#c01508;"
                                        class="fa fa-chevron-circle-right red-color" aria-hidden="true"></i> Category :   <strong>{{$Recipe->CategoryName}}</strong> </li>

                            </ul>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li style="color:red;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                            <div class="carousel-inner">
                                @if($Recipe->Image != null)
                              <div class="carousel-item active">
                                <img class="d-block w-75 mx-auto" src="/uploads/Recipe/{{ $Recipe->Image  }}" alt="First slide">
                              </div>
                                @endif
                                @if($Recipe->Image2 != null)
                              <div class="carousel-item ">
                                <img class="d-block w-75 mx-auto" src="/uploads/Recipe/{{ $Recipe->Image2  }}" alt="Second slide">
                              </div>
                              @endif
                              @if($Recipe->Image3 != null)
                              <div class="carousel-item">
                                <img class="d-block w-75 mx-auto" src="/uploads/Recipe/{{ $Recipe->Image3  }}" alt="Third slide">
                              </div>
                              @endif
                            </div>
                            {{-- <a class="carousel-control-prev btn btn-primary"  href="#carouselExampleControls" role="button" data-slide="prev">
                              <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next">
                              <span  class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span  class="sr-only">Next</span>
                            </a> --}}
                          </div>

                        <div class="member_desc mt-5">
                            <h2>Ingredients<span style="margin-bottom:10px;float:right;font-size:15px;">Serving : <strong>{{ $Recipe->NumberOfServing  }}</strong></span></h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Ingredient as $Ing)
                                        <tr>
                                            <td><strong>{{$Ing->Milgram}}</strong></td>
                                            <td><strong>{{$Ing->ProductName}}</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="bg-image "
                            style=" background-image: url('/uploads/Recipe/{{ $Recipe->Image  }}');">
                            <div class="member_contact">
                                <div class="row">
                                    <div class="col-md-12  d-flex align-items-center justify-items-center text-center " style="height: 20vh;">
                                        <q style="font-style: italic;color:white;font-weight:bold;  text-align: justify;">There is no love sincerer than the love of food</q>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($RecipeVideo as $RC)
                        <div class="member_desc mt-5">
                            <h2>{{$RC->Title}}</h2>

                            <video width="768" height="480" controls>
                                <source src="/uploads/Video/{{$RC->video }}" type="video/mp4">
                                <source src="/uploads/Video/{{$RC->video }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <br> <br>
                            <p>{{$RC->description}}</p>

                        @endforeach



                </div>
            </div>
        </section>
    </div>
    <script>
        $('.carousel').carousel({
        interval: 2000
        })
    </script>
@stop
