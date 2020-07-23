@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row pb-5 pt-5">
            <div class="col-md-12">
                <img src="media/{{ $data[0]->media[0]->id . '/' .$data[0]->media[0]->file_name}}" alt="Bed and Breakfast" class="img-fluid">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-3">
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="list-unstyled">
                            <li class="page-link border-0 link-active"><a href="{{ url('breakfast') }}" class="text-white">{{$data[0]->title}}</a></li>
                            <hr>
                            <li class="page-link border-0"><a href="{{ url('happy-hour') }}" class="text-dark">{{$data[1]->title}}</a></li>
                            <hr>
                            <li class="page-link border-0"><a href="{{ url('booking') }}" class="text-dark">{{$data[2]->title}}</a></li>
                            <hr>
                            <li class="page-link border-0"><a href="{{ url('voucher') }}" class="text-dark">{{$data[3]->title}}</a></li>
                            <hr>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="col-md-9 content-col">
                <h3 class="font-weight-bold">{{$data[0]->title}}</h3>
                <hr>
                <p class="pt-3">{{$data[0]->perex}}</p>
                <br>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas maiores, fugit, ducimus impedit,
                    perspiciatis quis at et nobis accusamus nulla atque debitis ab consequatur deserunt aperiam
                    provident qui praesentium assumenda!
                </p> -->

                <a href="reserve-now.php">
                    <button class="btn reserve-now-btn">RESERVE NOW</button>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
      var el = $('.specials');
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
