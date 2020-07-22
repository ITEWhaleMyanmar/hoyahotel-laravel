<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid py-4 fixed-top shadow-box">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Hoya Logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item pr-1">
                <a class="nav-link text-dark home" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark hotel-overview" href="{{url('/hotel-overview')}}">OVERVIEW</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark rooms" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ROOMS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item dropdown-item-edited">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Standard Rooms</li>
                            <ul class="list-unstyled pb-3">
                                <li class="py-3 text-black-50 dropdown-list"><a
                                href="{{url('/superior-room')}}">Superior</a></li>
                                <li class="text-black-50 dropdown-list"><a href="{{url('/deluxe-room')}}">Deluxe</a>
                                </li>
                                <li class="py-3 text-black-50 dropdown-list"><a
                                        href="{{url('/premier-room')}}">Premier</a></li>
                            </ul>
                            <li class="font-weight-bold">Executive Rooms</li>
                            <ul class="list-unstyled pb-3">
                                <li class="py-3 text-black-50 dropdown-list"><a
                                        href="{{url('/executive-deluxe')}}">Executive Deluxe</a>
                                </li>
                                <li class="text-black-50 dropdown-list"><a
                                        href="{{url('/executive-business')}}">Executive Business</a>
                                </li>
                                <li class="py-3 text-black-50 dropdown-list"><a href="{{url('/hoya-suite')}}">Hoya
                                        Suite</a></li>
                            </ul>
                        </ul>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark facilities" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FACILITIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item dropdown-item-edited">
                        <ul class="list-unstyled">
                            <li class="dropdown-list py-3"><a href="{{url('/business-center')}}">Business
                                    Center</a>
                            </li>
                            <li class="dropdown-list pb-3"><a href="{{url('/shopping-complex')}}">Shopping
                                    Complex</a>
                            </li>


                        </ul>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark dining" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    DINING
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item dropdown-item-edited">
                        <ul class="list-unstyled">
                            <li class="dropdown-list py-3"><a href="{{url('/o-lounge')}}">O Lounge</a>
                            </li>
                            <li class="dropdown-list pb-3"><a href="{{url('/seafood')}}">Four Seasons Seafood
                                    Restaurant</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark specials" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SPECIALS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item dropdown-item-edited">
                        <ul class="list-unstyled">
                            <li class=" dropdown-list py-3"><a href="{{url('/breakfast')}}">Bed &
                                    Breakfast</a>
                            </li>
                            <li class=" dropdown-list pb-3"><a href="{{url('/happy-hour')}}">Happy Hour</a>
                            </li>
                            <li class=" dropdown-list pb-3"><a href="{{url('/booking')}}">Advanced Booking</a>
                            </li>
                            <li class=" dropdown-list pb-3"><a href="{{url('/voucher')}}">Hotel Voucher</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark things-to-do" href="{{url('/things-to-do')}}">THINGS TO DO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark contact-us" href="{{url('/contact-us')}}">CONTACT
                    US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white reserve-now ml-3 reserve-now" href="{{url('/reserve')}}">RESERVE NOW</a>
            </li>
        </ul>
    </div>
</nav>
