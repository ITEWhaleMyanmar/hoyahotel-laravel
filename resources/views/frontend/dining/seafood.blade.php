@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row pb-5 pt-5">

            <div class="col-md-12">
                <img src="media/{{ $data[1]->media[0]->id . '/' .$data[1]->media[0]->file_name}}" alt=" Four Season Seafood Restaurant" class="img-fluid">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-3">
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="list-unstyled">
                            <li class="page-link border-0"><a href="{{  url('o-lounge') }}" class="text-dark">{{$data[0]->title}}</a></li>
                            <hr>
                            <li class="page-link border-0 link-active"><a href="{{ url('seafood') }}" class="text-white">{{$data[1]->title}}</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="col-md-9 content-col">
                <h3 class="font-weight-bold">{{$data[1]->title}}</h3>
                <hr>
                <p>{{ $data[1]->perex }}</p>
                <!-- <p><span class="font-weight-bold">Opening Hours: </span>Monday to Sunday, 07:00 – 23:30.</p>
                <p>For reservation, please call +95 09 0000000 or email <span
                        class="text-black-50">reservation@example.com</span></p> -->
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
