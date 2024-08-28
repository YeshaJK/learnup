<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    <! html>
                    <htmlDOCTYPE lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>LEARN UP</title>
                        @include('layouts.links')

                        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
                        <style>

                            .a-form{
                                margin-top: -50px;
                                z-index: 2;
                                position: relative;
                            }

                            @media screen and (max-width:575px){
                                .a-form{
                                    margin-top: 0px;
                                    padding : 0 35px
                                }

                            }
                        </style>
                    </head>
                    <body class="bg-light">

                    @include('layouts.header')
                    <!-- Carousel -->
                    <div class="container-fluid">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa.jpg')}}" class="w-200 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa2.jpg')}}" class="w-100 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa1.jpg')}}" class="w-100 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa5.jpg')}}" class="w-100 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa8.jpg')}}" class="w-100 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa9.jpg')}}" class="w-100 d-block" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{URL('images/yaa7.jpg')}}" class="w-100 d-block" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Our course  -->
                    <h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR  COURSE</h2>
                    {{--@include('courselist')--}}

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                    <img src="{{URL('images/WB.JPG')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>WEB DEVLOPER</h5>
                                        <h6 class="mb-4"> ₹200 </h6>
                                        <div class="features mb-4">
                                            <h6 class="mb-1">LANGUAGE</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">ENGLISH</span>
                                        </div>
                                        <div class="facilities mb-4">
                                            <h6 class="mb-1">CREATE BY</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">MR.DAVE</span>
                                        </div>
                                        <div class="rating mb-4">
                                            <h6 class="mb-1">Rating</h6>
                                            <span class=" badge rounded-pill bg-light">
                                                   <i class="bi bi-star-fill text-warning"></i>
                                                   <i class="bi bi-star-fill text-warning"></i>
                                                   <i class="bi bi-star-fill text-warning"></i>
                                                   <i class="bi bi-star-fill text-warning"></i>
                                                   <i class="bi bi-star-fill text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-evenly mb-2">
                                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">ENROLL NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                    <img src="{{URL('images/WB7.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>GRAPHIC DESIGN</h5>
                                        <h6 class="mb-4">₹200 </h6>
                                        <div class="features mb-4">
                                            <h6 class="mb-1">LANGUAGE</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">ENGLISH </span>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">HINDI</span>
                                        </div>
                                        <div class="facilities mb-4">
                                            <h6 class="mb-1">CREATE BY</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">DR.MEHTA</span>
                                        </div>
                                        <div class="rating mb-4">
                                            <h6 class="mb-1">Rating</h6>
                                            <span class=" badge rounded-pill bg-light">
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-evenly mb-2">
                                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">BUY NOW</a>
                                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                    <img src="{{URL('images/MB1.PNG')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>DIGITAL MARKETING</h5>
                                        <h6 class="mb-4">₹200 </h6>
                                        <div class="features mb-4">
                                            <h6 class="mb-1">LANGUAGE</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">ENGLISH</span>

                                        </div>
                                        <div class="facilities mb-4">
                                            <h6 class="mb-1">CREATE BY</h6>
                                            <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base ">JOHN BURA</span>

                                        </div>
                                        <div class="rating mb-4">
                                            <h6 class="mb-1">Rating</h6>
                                            <span class=" badge rounded-pill bg-light">
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                               <i class="bi bi-star-fill text-warning"></i>
                                             </span>
                                        </div>
                                        <div class="d-flex justify-content-evenly mb-2">
                                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">BUY NOW</a>
                                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More COURSES >>></a>
                        </div>
                    </div>
                    <!-- OUR FACILITIES -->

                    <h2 class="mt-5 pt-4 text-center fw-bold h-font">CSS STUDENT ALSO LEARN</h2>
                    <div class="container">
                        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                <img src="{{URL('images/HTML.jpg')}}" alt="" width="80px">
                                <h5 class="mt-3">HTML</h5>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                <img src="{{URL('images/JS.jpg')}}" alt="" width="80px">
                                <h5 class="mt-3">JAVASCRIPT</h5>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                <img src="{{URL('images/C++.jpg')}}" alt="" width="80px">
                                <h5 class="mt-3">C++</h5>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                <img src="{{URL('images/CC.jpg')}}" alt="" width="80px">
                                <h5 class="mt-3">CLOUND COMPUTING </h5>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                <img src="{{URL('images/PHP.jpg')}}" alt="" width="80px">
                                <h5 class="mt-3">PHP</h5>
                            </div>
                            <div class="col-lg-12 text-center mt-5 ">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More COURSE>>></a>
                            </div>
                        </div>
                    </div>

                    <!-- Reach us  -->
                    <h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                                <iframe height="320px" class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14891.423514671922!2d72.86979682869094!3d21.078417675542294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfeae43a14ca95fb!2zMjHCsDA0JzQyLjMiTiA3MsKwNTInNDIuOCJF!5e0!3m2!1sen!2sin!4v1656390904967!5m2!1sen!2sin"   style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="bg-white p-4 rounded mb-4">
                                    <h5>Follow us</h5>
                                    <a href="#" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter"></i></span>
                                    </a>
                                    <a href="#" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook"></i></span>
                                    </a>
                                    <a href="#" class="d-inline-block mb-3">
                                     <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="bg-white p-4 rounded mb-4">
                                    <h5>Contact us</h5>
                                    <a href="tel: +919316714148" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>9316714148</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   @include('layouts.footer')
                    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            spaceBetween: 30,
                            effect: "fade",
                            loop: true,
                            autoplay : {
                                delay: 2500,
                                disableOnIntraction: false,
                            }
                        });

                        var swiper = new Swiper(".swiper-testimonials", {
                            effect: "coverflow",
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            slidesPerView: "3",
                            loop: true,
                            coverflowEffect: {
                                rotate: 50,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: false,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                            breakpoints: {
                                320:  {
                                    slidesPerView: 1,
                                },
                                640:  {
                                    slidesPerView: 1,
                                },
                                768:  {
                                    slidesPerView: 2,
                                },
                                1024:  {
                                    slidesPerView: 3,
                                },
                            }
                        });
                    </script>
                    </body>
                    </htmlDOCTYPE>
                </div>
            </div>
        </div>
    </div>
    </h2>
    </x-slot>
</x-app-layout>
