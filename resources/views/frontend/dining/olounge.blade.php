@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row py-5">
            <!-- Slider -->
            <div class="">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 slide-images" src="images/o-lounge-slide-1.jpg" alt="O Lounge Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 slide-images" src="images/o-lounge-slide-2.jpg" alt="O Lounge Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 slide-images" src="images/o-lounge-slide-3.jpg" alt="O Lounge Slide  3">
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
    </div>
    <div class="container">
        <div class="row content-row">
            <div class="col-md-3">
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="list-unstyled">
                            <li class="page-link border-0 link-active"><a href="{{ url('o-lounge') }}" class="text-white">{{ $data[0]->title }}</a></li>
                            <hr>
                            <li class="page-link border-0"><a href="{{ url('seafood') }}" class="text-dark">{{ $data[1]->title }}</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="col-md-9 content-col">
                <h3 class="font-weight-bold">{{ $data[0]->title }}</h3>
                <hr>
                <p>{{ $data[0]->perex}}
                </p>
                <!-- <p><span class="font-weight-bold">Opening Hours: </span>Monday to Sunday, 07:00 – 23:30.</p>
                <p>For reservation, please call +95 09 0000000 or email <span class="text-black-50">reservation@example.com</span></p> -->
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
     var el = $('.dining');
        el.removeClass('text-dark');
        el.css({
            "font-weight": "bolder",
            "color": "#f39838"
        })

        $(function() {
            $(document).scroll(function() {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
</script>
@endsection
