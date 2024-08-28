<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Up</title>
    @include('layouts.links')
</head>
<body class="bg-light">

@include('layouts.header')
<div class="my-5 px-4">
    <h1 class="fw-semibold h-font text-center"><b> CONTACT US</b></h1>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 ">
                <img src="{{URL('images/group.jpg')}}" class="w-100 h-28 d-block" >
                <!-- <iframe height="320px" class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14891.423514671922!2d72.86979682869094!3d21.078417675542294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfeae43a14ca95fb!2zMjHCsDA0JzQyLjMiTiA3MsKwNTInNDIuOCJF!5e0!3m2!1sen!2sin!4v1656390904967!5m2!1sen!2sin"   style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <h5>Address</h5>
                <a href="https://goo.gl/maps/gzzcjxhSTce5ZnYp6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i>  LEARN UP,SURAT
                </a>
                <h5>Contact us</h5>
                <a href="tel: +919316714148" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>9316714148</a>
                <h5 class="mt-4">Email</h5>
                <a href="mailto: heetborad33@gmail.com" class="d-inline-block text-decoration-none text-dark">kaniyawalyesha@gmail.com</a>
                <h5>Follow us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-3 ">
                    <i class="bi bi-facebook me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-3 p-2">
                    <i class="bi bi-instagram me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-3">
                    <i class="bi bi-twitter me-1"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ route('contactus.store') }}">
                    @csrf
                    <h4>FEEDBACK</h4>
                    <div class="mt-3">
                        <input type="hidden" id="id" name="id" class="form-control shadow-none" required>
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight:500;">Name</label>
                        <input type="text" id="name" name="name" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight:500;">Email</label>
                        <input type="email" id="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight:500;">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control shadow-none" required>
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight:500;">Message</label>
                        <textarea class="form-control shadow-none" id="message" name="message" rows="5" style="resize:none;" required></textarea>
                    </div>
                    <br><br><button type="submit" name="submit" class="btn btn-success">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>

