@extends('Layout');


@section('content')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lebanese Food and Traditional Dishes</h2>
                        <p class="animate__animated animate__fadeInUp">Fusing spicy Arabic flavors with the colors and textures of Mediterranean cuisine, Lebanese food opens your palette to a world of fascinating flavors that get better with every bite.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Manakeesh</h2>
                        <p class="animate__animated animate__fadeInUp">Manakeesh are a Middle-eastern flatbread typically eaten for breakfast. Delicious and crispy homemade dough is topped with a za’atar topping or a blend of cheeses for two different variety of Manakeesh. </p>
                        {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a> --}}
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lebanese mezze</h2>
                        <p class="animate__animated animate__fadeInUp">The Lebanese Mezze is a selection of small dishes that are served as appetizers in the Middle East, North Africa, and Greece. Often the mezze is served as a part of multi-course meals, but it can also act as a series of snacks during a social engagement.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>Country food recipes</h2>
                    <h3>Tradition is embedded in Lebanese cuisine, so, while it may be hard to separate the two, some of the recipes in my blog, have been modernized. There are shortcuts you can take in my recipes so you don’t have to spend all day in the kitchen like my grandmothers did back in the homeland.</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Welcome to our online fundraising platform
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Allows charities to securely collect
                            and process donations.</li>
                        <li><i class="ri-check-double-line"></i>Enables nonprofits to operate more efficiently at
                            lower cost,</li>
                        <li><i class="ri-check-double-line"></i>Allows donors to quickly, easily and securely
                            support causes that are important to them.</li>
                    </ul>
                    <p class="fst-italic">
                        Help contribute to a good cause
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->




@stop
