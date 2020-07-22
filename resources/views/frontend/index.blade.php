@extends('frontend.layout.app')
@section('content')
  <!-- Contact -->
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="flex-fill">
                <!-- Slider -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/hotel-overview-main.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/hotel-overview-main.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/hotel-overview-main.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container py-5">
        <div class="row pb-5 justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center underline-text mb-0">Current Special Offers</h3>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 pb-5 pt-2">
                    <!-- Slider -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/special-offer.jpg" alt="First slide">
                                <div class="card-body text-center special-offer-body">
                                    <h5 class="font-weight-bold">Current Special Offers</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, nobis?</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/special-offer.jpg" alt="Second slide">
                                <div class="card-body text-center special-offer-body">
                                    <h5 class="font-weight-bold">Current Special Offer</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, nisi!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/special-offer.jpg" alt="Third slide">
                                <div class="card-body text-center special-offer-body">
                                    <h5 class="font-weight-bold">Current Special Offer</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, similique!</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h5 class="text-center">Recommended on</h5>
                    <h4 class="text-center"><a href="https://tripadvisor.com"><span><img src="images/tripadvisor.png" alt="tripadvisor" class="tripadvisor"></span></a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

