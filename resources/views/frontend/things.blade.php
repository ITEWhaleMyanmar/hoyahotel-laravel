@extends('frontend.layout.app')
@section('content')

<div class="content">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-12 text-center">
                <h3 class="jomolhari underline-text pb-3">Things To Do</h3>
                <p class="text-center pt-5">First time in Yangon? Don&#39;t know
                    how to plan your trip? Contact our
                    Concierge for more detail. Our
                    affiliated Travel Company can assist
                    you with transport and sightseeing
                    requests.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row justify-content-center rows">
            <div class="col-md-6 cards">
                <img src="media/{{ $data[0]->media[0]->id . '/' .$data[0]->media[0]->file_name}}" alt="Yangon Downtown" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[0]->title}}</h4>
                <p>{{ $data[0]->perex }}</p>
            </div>
        </div>
        <div class="row justify-content-center rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[1]->title}}</h4>
                <p>{{$data[1]->perex}}</p>
            </div>
            <div class="col-md-6 cards">
                <img src="media/{{ $data[1]->media[0]->id . '/' .$data[1]->media[0]->file_name}}" alt="Shwedagon Pagoda" class="img-fluid">
            </div>

        </div>
        <div class="row justify-content-center rows">
            <div class="col-md-6 cards">
                <img src="media/{{ $data[2]->media[0]->id . '/' .$data[2]->media[0]->file_name}}" alt="Inya Lake" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[2]->title}}</h4>
                <p>{{$data[2]->perex}}</p>
            </div>
        </div>
        <div class="row justify-content-center rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[3]->title}}</h4>
                <p>{{$data[3]->perex}}</p>
            </div>
            <div class="col-md-6 cards flex-fill">
                <img src="media/{{ $data[3]->media[0]->id . '/' .$data[3]->media[0]->file_name}}" alt="People' Park" class="img-fluid">
            </div>

        </div>
        <div class="row justify-content-center rows">

            <div class="col-md-6 cards">
                <img src="media/{{ $data[4]->media[0]->id . '/' .$data[4]->media[0]->file_name}}" alt="Zoo" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[4]->title}}</h4>
                <p>{{$data[4]->perex}}</p>
            </div>

        </div>
        <div class="row justify-content-center pb-5 rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">{{$data[5]->title}}</h4>
                <p>{{$data[5]->perex}}</p>
            </div>
            <div class="col-md-6 cards">
                <img src="media/{{ $data[5]->media[0]->id . '/' .$data[5]->media[0]->file_name}}" alt="Aung San Market" class="img-fluid">
            </div>


        </div>

    </div>
</div>
@endsection
@section('script')
<script>
        var el = $('.things-to-do');
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
