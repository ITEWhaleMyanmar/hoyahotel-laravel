@extends('frontend.layout.app')
@section('content')
<div class="content">
    <div class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pb-3 underline-text">Contact Us</h3>
                </div>
            </div>
            <div class="row pt-5 justify-content-center">
                <div class="col-md-4 text-center info-cards">
                    <div class="card card-body h-100">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <h4 class="py-2">Address</h4>
                        <p>Insein Rd. Hlaing Township, Yangon, Myanmar</p>
                    </div>
                </div>
                <div class="col-md-4 text-center info-cards">
                    <div class="card card-body h-100">
                        <i class="fas fa-envelope fa-2x"></i>
                        <h4 class="py-2">Email</h4>
                        <p>hoya@info.com</p>
                    </div>
                </div>
                <div class="col-md-4 text-center info-cards">
                    <div class="card card-body h-100">
                        <i class="fas fa-phone fa-2x"></i>
                        <h4 class="py-2">Phone</h4>
                        <p>+95 09 1234456789</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pt-5 justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="row">
                            <div class="col text-center">
                                <p class="py-3">Please fill out the form below if you have any
                                    queries and we will reply as soon as possible
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select class="form-control form-control-own-styles">
                                    <option value="Booking Enquiry">Booking Enquiry</option>
                                    <option value="General Enquiry">General Enquiry</option>
                                    <option value="Feedback">Feedback</option>
                                </select>
                                <input type="text" class="form-control my-3 form-control-own-styles" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control mb-3 form-control-own-styles" placeholder="Email Address">
                                <input type="number" class="form-control mb-3 form-control-own-styles" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea type="" class="form-control form-control-own-styles" rows="7" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-md-4">
                                <button class="btn btn-block submit-button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.2039049335!2d96.12176258572033!3d16.865804881706772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36cdaf0f7eb06fc5!2seWhale%20Myanmar!5e0!3m2!1sen!2smm!4v1573701268152!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
        var el = $('.contact-us');
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
