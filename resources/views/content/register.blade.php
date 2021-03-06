@extends('home')

@section('styles')
@section('styles')
        <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
@endsection

@section('content')
<style>
    .create{
        background-image: url("{{ url('/') }}/assets/img/LoginBackground.jpg");
        height: 100vh;
        background-repeat: no-repeat;
        display: flex;
    }
</style>

<div class="create justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="card p-5" style="margin-bottom: 20%; border-color: #0cb0e6; border-width: thick;">
            <center>
            <h2 style="color:#133b7e">Create Account</h2>
            <h5 style="color:#133b7e">Get started with your new account</h5>
            </center>
            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                <br>
                <div class="form-group">
                    <!-- <label for="f_name">First Name</label> -->
                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" required>
                </div><br>
                <div class="form-group">
                    <!-- <label for=";_name">Last Name</label> -->
                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" required>
                </div><br>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div><br>
                <div class="form-group">
                    <!-- <label for="email">User Image</label> -->
                    <input type="file" class="form-control" id="user_image" name="user_image" required>
                </div><br>
                <div class="form-group">
                    <!-- <label for="username">Username</label> -->
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div><br>
                <div class="form-group">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <center>
                <button type="submit" class="btn btn-primary">Submit</button>
                </center>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ url('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ url('/') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ url('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
@endsection