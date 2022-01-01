
@extends('Layout');


@section('content')

<br><br><br>

<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($categories as $cat)
                    <li data-filter=".{{$cat->CategoryName}}"><img style="" src="/uploads/Category/{{$cat->Image}}" /></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($Recipe as $row)
            <div class="col-lg-4 col-md-6 portfolio-item {{$row->CategoryName}} ">
                <div class="portfolio-wrap">
                    <img src="/uploads/Recipe/{{ $row['Thumbnail'] }}" class="img-fluiddd" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $row['Name'] }}</h4>
                        <p>{{ $row['Country'] }}</p>

                        <div class="portfolio-links">
                            <a href="/RecipeDetails/{{$row['id']}}"
                                class="btn btn-dangerr btn-block" >View</a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
</div>
{{-- </div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container-fluid">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic carousel</h4>
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="col-lg-4 col-md-6 portfolio-item ">
                                    <div class="portfolio-wrap">
                                        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" class="img-fluiddd" alt="">
                                        <div class="portfolio-info">
                                            <h4>Burger</h4>
                                            <p>Ktir taybe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                            <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<Script>
$(document).ready(function() {

$(".owl-carousel").owlCarousel({

autoPlay: 3000,
items : 4,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],
center: true,
nav:true,
loop:true,
responsive: {
600: {
items: 4
}
}






});

});
    </script>
@stop
