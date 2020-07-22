@extends('frontend.layout.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row pb-5 pt-5">
                <div class="col-md-12">
                    <img src="images/room-deluxe.jpg" alt="Room Deluxe" class="img-fluid">
                </div>
            </div>
            <div class="row content-row">
            <div class="col-md-3">
                    <ul class="list-group">
                        <div class="list-group-item">
                            <h5>Standard Rooms</h5>
                            <ul class="list-unstyled">
                                <hr>
                                <li class="page-link border-0"><a href="room-superior.php" class="text-dark">Superior</a></li>
                                <hr>
                                <li class="page-link link-active border-0"><a href="room-deluxe.php" class="text-white">Deluxe</a></li>
                                <hr>
                                <li class="page-link border-0"><a href="room-premier.php" class="text-dark">Premier</a></li>
                            </ul>
                        </div>
                        <div class="list-group-item">
                            <h5>Executive Rooms</h5>
                            <ul class="list-unstyled">
                                <hr>
                                <li class="page-link border-0"><a href="room-executive-deluxe.php" class="text-dark">Executive
                                        Deluxe</a></li>
                                <hr>
                                <li class="page-link border-0"><a href="room-executive-business.php" class="text-dark">Executive
                                        Business</a></li>
                                <hr>
                                <li class="page-link border-0"><a href="room-hoya-suite.php" class="text-dark">Hoya Suite</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
                <div class="col-md-9 content-col">
                    <h3 class="font-weight-bold">Deluxe Room</h3>
                    <hr>
                    <p class="pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus non in vitae
                        maiores deleniti debitis fugiat quis at nesciunt libero, accusamus quidem, nemo vero deserunt
                        cum quasi fuga tenetur nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quas
                        voluptates. Asperiores blanditiis, vel culpa ipsam tenetur delectus, sed id voluptatum natus
                        placeat illo exercitationem, adipisci architecto dolorem facilis hic.</p>
                    <p>Superior Room offers:</p>
                    <ul>
                        <li>Views of the romantic Inya Lake, refreshing freeform pool or city</li>
                        <li>Cable TV</li>
                        <li>Wi-Fi connectivity</li>
                        <li>Spacious bathroom with bathtub and separate shower stall</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    var el = $('.rooms');
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
