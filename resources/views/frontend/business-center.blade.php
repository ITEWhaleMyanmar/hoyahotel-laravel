@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row pb-5 pt-5">
            <div class="col-md-12">
                <img src="images/business-center.jpg" alt="Business Center" class="img-fluid">
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-3">
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="list-unstyled">
                            <li class="page-link border-0 link-active"><a href="fac-business-center.php" class="text-white">Business
                                    Center</a></li>
                            <hr>
                            <li class="page-link border-0"><a href="fac-shopping-complex.php" class="text-dark">Shopping
                                    Complex</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="col-md-9 content-col">
                <h3 class="font-weight-bold">Business Center</h3>
                <hr>
                <p class="pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus non in vitae
                    maiores deleniti debitis fugiat quis at nesciunt libero, accusamus quidem, nemo vero deserunt
                    cum quasi fuga tenetur nisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quas
                    voluptates. Asperiores blanditiis, vel culpa ipsam tenetur delectus, sed id voluptatum natus
                    placeat illo exercitationem, adipisci architecto dolorem facilis hic. lorem250</p>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas maiores, fugit, ducimus impedit,
                    perspiciatis quis at et nobis accusamus nulla atque debitis ab consequatur deserunt aperiam
                    provident qui praesentium assumenda!
                </p>
                <hr>
                <p><span class="font-weight-bold">Location: </span>Level 5</p>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
     var el = $('.facilities');
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
