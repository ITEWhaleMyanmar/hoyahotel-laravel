@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <img src="images/hotel-overview-main.jpg" alt="" class="img-fluid flex-fill">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="title-text col-md-12 text-center pt-5">
                <h3 class="underline-text pb-3">Overview</h3>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <p>
                    Hoya Group is a well-known, well-established
                    and highly respected corporation in Taiwan, with
                    nine hotels currently in operation. The highly
                    experienced Hoya International Resort Co., Ltd takes
                    justifiable pride not just in the superior standard
                    of its facilities but also its first-class customer
                    service and guest relations.

                </p>
            </div>
            <div class="col-md-6">
                <p>
                    The Hoya International Hotel Yangon comprise
                    120 well-appointed rooms designed to cater
                    for business executives and tourists as well as
                    a fully equipped Business Centre, two executive
                    floors comprising 34 luxury rooms and suites,
                    a gym and a shopping mall.

                </p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-6">
                <p class="font-weight-bold">The Hotel is right in the centre of all major areas:</p>
                <table class="table">
                    <tbody>
                        <tr>

                            <td>Inya Lake</td>
                            <td>8min</td>
                        </tr>
                        <tr>

                            <td>Yangon International Airport</td>
                            <td>20min</td>
                        </tr>
                        <tr>

                            <td>Shwedagon Pagoda</td>
                            <td>25min</td>
                        </tr>
                        <tr>

                            <td>Yangon Downtown</td>
                            <td>30min</td>
                        </tr>
                        <tr>

                            <td>Hlaingtharya</td>
                            <td>30min</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
     var el = $('.hotel-overview');
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
