@extends('frontend.layouts.frontend-master')

@section('content')

<section id="main" class="mt-2 mt-md-3">
    <div class="container">
        <div class="form-row">
            <!-- Left Column Start -->
            <div class="col-md-3 order-md-1 order-2" id="left">
                <div>
@include('frontend.partials.left-sidebar')
</div>
            </div>
            <!-- Left Column End -->


            <!-- Content Column End -->
            <div class="col-md-6 order-md-2 order-1" id="content">
                <div>
                        <div>
    <!--Main Slider Start-->
    <div id="main-slider" class="carousel slide px-2 px-sm-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#main-slider" data-slide-to="0" aria-current="location"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
        </ol>
                    <div class="carousel-inner">
            <div class="carousel-item active">
                 <img class="d-block w-100" src="{{ asset('test.jpg') }}" alt="">
                
            </div>
                        </div>
        <a class="carousel-control-prev" href="#main-slider" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slider" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Main Slider Start-->


    <!--Sub Notice Start-->
    <div class="sub-notice my-3">
        <div>
            <a href="#">
                সকল সেবা এখন অনলাইনে । 
            </a>
        </div>
    </div>
    <!--Sub Notice End-->


    
    <!--Sub Notice Start-->
    <div class="welcome my-3">
        <div class="content-header mb-3">
            <h5 class="m-0 font-weight-bold">স্বাগতম</h5>
        </div>
        <div class="padding-15">
            saf
        </div>
    </div>
    <!--Sub Notice End-->


    <!--Service Start-->
    <div class="service my-3">

        <div class="content-header mb-3">
            <h5 class="m-0 font-weight-bold">আমাদের সেবাসমূহ</h5>
        </div>
        <div class="content">
            <div class="padding-15">
                <!--Service Item Start-->
                <div class="form-row">

                    <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-house-user"></i>
                                                        <div class="title">
                                                            হোল্ডিং কর
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-users"></i>
                                                        <div class="title">
                                                            উত্তরাধিকার সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-certificate"></i>
                                                        <div class="title">
                                                            চারিত্রিক সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-restroom"></i>
                                                        <div class="title">
                                                            বিয়ের সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">
                                                        <i class="fas fa-restroom"></i>
                                                        <div class="title">
                                                            পূণঃবিবাহ সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-briefcase"></i>
                                                        <div class="title">
                                                            ঠিকাধারী লাইসেন্স
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">
                                                        <i class="fas fa-signal"></i>
                                                        <div class="title">
                                                            ট্রেড লাইসেন্স
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="far fa-list-alt"></i>
                                                        <div class="title">
                                                            নাগরিক সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="far fa-file-image"></i>
                                                        <div class="title">
                                                            মৃত সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">

                                                        <i class="fas fa-save"></i>
                                                        <div class="title">
                                                            এতিম সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Service Item -->
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">
                                                        <i class="fas fa-money-check"></i>
                                                        <div class="title">
                                                            আয়ের সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <a href="#">
                                                <div class="card mt-2">
                                                    <div class="card-body text-center">
                                                        <i class="fas fa-receipt"></i>
                                                        <div class="title">
                                                            বেকারত্ব সনদ
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                </div>




            </div>
        </div>
    </div>
    <!--Service Item End-->

    

</div>
                </div>
            </div>
            <!-- Content Column End -->


            <!-- Right Column Start -->
@include('frontend.partials.right-sidebar')
            <!-- Right Column End -->

        </div>
    </div>
</section>

@endsection