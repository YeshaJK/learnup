<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnUp about</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    @include('layouts.links')
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
<body class="bg-light">

<?php /*require('INC/header.php') */?>
@include('layouts.header')
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">An electronic learning platform is an integrated set of interactive online services that provide trainers, learners, and others involved in education with information, tools, and resources to support and enhance education delivery and management.</p>
</div>

<div class="CONTAINER">

</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact6.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Subh Mehta</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact7.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Preet Patel</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact2.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Raj Barod</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact3.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Rishi Patel</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact4.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Vaishnavi Jariwala</h5>
            </div>

            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="{{URL('images/contact5.jpg')}}" class="w-100 d-block" >
                <h5 class="mt-2 ">Jiya Gheewala</h5>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<?php /*require('footer.php') */?>
@include('layouts.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
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
</html>
