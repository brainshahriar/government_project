<!doctype html>
<html lang="en">
<!-- Mirrored from lalmonirhatmunicipality.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 17:51:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('frontend.partials.header')

<body id="home-page">
    <header id="header">

        <div class="container">
            <div class="header-section">
                <!-- Header Logo Start  -->
                <div id="my-carousel" class="carousel face" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="index.html">
                                <img class="d-block img-fluid" src="img/logo-en.png" alt="">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="index.html">
                                <img class="d-block img-fluid" src="img/logo-en.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Logo End  -->
            </div>
        </div>
    </header>

    <header id="nav-bar" class="sticky-top">
    <div class="container">
        <div>
            @include('frontend.partials.navbar')
        </div>
    </div>
</header>
        @include('frontend.partials.noticeboard')



        @yield('content')


    @include('frontend.partials.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="Front/js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="Front/js/popper.min.js"></script>
    <script type="text/javascript" src="Front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Front/js/custom.js"></script>
    </body>


<!-- Mirrored from lalmonirhatmunicipality.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 17:51:57 GMT -->
</html>
