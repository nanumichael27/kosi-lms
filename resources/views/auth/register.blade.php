<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Sign In</title>
</head>

<body id="sign-loginWrapper">
    <main class="sign-login">
        <div class="left-side"></div>
        <div class="right-side">
            <svg viewBox="0 0 381 362" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M489 117.5C489 252.534 379.534 362 244.5 362C109.466 362 0 252.534 0 117.5C0 -17.5336 109.466 -127 244.5 -127C379.534 -127 489 -17.5336 489 117.5ZM53.007 117.5C53.007 223.259 138.741 308.993 244.5 308.993C350.259 308.993 435.993 223.259 435.993 117.5C435.993 11.7413 350.259 -73.993 244.5 -73.993C138.741 -73.993 53.007 11.7413 53.007 117.5Z" fill="#F2994A" />
            </svg>

        </div>
        <div class="signLogin-form">
            <h1 class="text-center  mb-5">Sign in</h1>
            <!-- GOOGLE -->
            <a href="dashboard.html" class="d-flex align-items-center btn btn-light d-block w-100 mb-3 google">
                <img src="img/google.svg" alt="">
                <span>Sign Up with Google</span>
            </a>
            <!-- FACEBOOK -->
            <a href="coursepage.html" class="d-flex justify-content-evenly btn btn-light align-items-center d-block w-100 mb-3 facebook">
                <img src="img/download.png" alt="">
                <span>Sign Up with Facebook</span>
            </a>
            <p class="my-4 text-light text-center">or</p>
            @if ($errors->any())
            <center>
                @foreach($errors->all() as $error)
                <div class="alert alert-info">
                    <strong>Warning!</strong> {{ $error }}.
                </div>
                @endforeach
            </center>
            @endif
            <!-- FORM -->
            <form action="{{route('register')}}" method="POST">
                @csrf
                <!-- FULL NAME -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <input type="text" name="name" id="full-name" class="form-control" placeholder="Full Name" value="{{old('name')}}">
                    </div>
                </div>
                <!-- EMAIL -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                    </div>
                </div>
                <!-- PASSWORD -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend input-password">
                            <div class="input-group-text">
                                <span><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="eye-toggler">
                            <i class="fa fa-eye-slash" id="eye"></i>
                        </div>
                    </div>
                </div>
                <!-- PASSWORD CONFIRM -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend input-password">
                            <div class="input-group-text">
                                <span><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                        <input type="password" name="password_confirmation" id="confirm-password" class="form-control" placeholder="Confirm password">
                        <div class="eye-toggler">
                            <i class="fa fa-eye-slash" id="eye"></i>
                        </div>
                    </div>
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="form-group d-flex justify-content-center">
                    <input type="submit" value="continue" class="btn btn-warning button w-100">
                </div>
            </form>
            <div class="signLogin-redirect text-center mt-4">
                <small class="text-light">already have an account? <a href="{{route('login')}}">Log In</a></small>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>