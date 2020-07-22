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
                <img src="images/downtown.jpg" alt="Yangon Downtown" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">Yangon Downtown</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique dolorum voluptate, labore voluptatem aliquam dolores quae ipsum officiis temporibus commodi ab asperiores eaque, nam, nisi natus maxime dolorem! Incidunt sequi repudiandae libero tenetur beatae illum alias ipsa perspiciatis nisi nihil?</p>
            </div>
        </div>
        <div class="row justify-content-center rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">Shwedagon Pagoda</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit animi pariatur, officia beatae alias voluptatibus suscipit ratione quae magni, iusto, ea aperiam doloribus praesentium cum labore aspernatur iure quibusdam ex.</p>
            </div>
            <div class="col-md-6 cards">
                <img src="images/pagoda.jpg" alt="Shwedagon Pagoda" class="img-fluid">
            </div>

        </div>
        <div class="row justify-content-center rows">
            <div class="col-md-6 cards">
                <img src="images/inya.jpg" alt="Inya Lake" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">Inya Lake</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quaerat accusantium quod ipsum ipsam provident quia laudantium magni molestiae similique Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas error vel excepturi eos laboriosam neque hic molestias, dolores consectetur doloribus! Minus eveniet ex animi, nam culpa voluptate earum numquam amet.eefocus</p>
            </div>
        </div>
        <div class="row justify-content-center rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari"> People's Park</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati exercitationem iure cupiditate alias atque, voluptates nam adipisci laboriosam expedita quis.</p>
            </div>
            <div class="col-md-6 cards flex-fill">
                <img src="images/inya.jpg" alt="People' Park" class="img-fluid">
            </div>

        </div>
        <div class="row justify-content-center rows">

            <div class="col-md-6 cards">
                <img src="images/zoo.jpg" alt="Zoo" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">Yangon Zoological Garden</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, in, placeat similique ea, repellendus incidunt est odit aliquam velit omnis maiores. Debitis dicta ut neque? Corrupti eum veniam deleniti exercitationem.</p>
            </div>

        </div>
        <div class="row justify-content-center pb-5 rows mobile-view-rows">
            <div class="col-md-6 d-flex flex-column justify-content-center cards">
                <h4 class="pb-3 jomolhari">Aung San Market</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem cum perferendis nihil error pariatur obcaecati, eveniet doloribus corrupti ad, odio necessitatibus asperiores quam explicabo! Consectetur officia laborum culpa asperiores voluptatum!</p>
            </div>
            <div class="col-md-6 cards">
                <img src="images/aung-san-market.jpg" alt="Aung San Market" class="img-fluid">
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
