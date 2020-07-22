@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row pb-5 pt-5">

            <div class="col-md-12">
                <img src="images/seafood-restaurant.jpg" alt=" Four Season Seafood Restaurant" class="img-fluid">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-3">
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="list-unstyled">
                            <li class="page-link border-0"><a href="dining-o.php" class="text-dark">O Lounge</a></li>
                            <hr>
                            <li class="page-link border-0 link-active"><a href="dining-four.php" class="text-white">Four Seasons Seafood
                                    Restaurant</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="col-md-9 content-col">
                <h3 class="font-weight-bold">Four Season Sea Food Restaurant</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fugiat velit magni, totam quos
                    beatae quidem, eveniet laudantium aperiam earum consequatur dolorum minus sunt sapiente maxime
                    cumque? Quod, dolorem dolores.</p>
                <p><span class="font-weight-bold">Opening Hours: </span>Monday to Sunday, 07:00 – 23:30.</p>
                <p>For reservation, please call +95 09 0000000 or email <span
                        class="text-black-50">reservation@example.com</span></p>
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
