<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel='icon' href="{{asset('/images/Logo_PU_(RGB).png')}}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>

    <div class="main">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable fade show text-center">
                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                {{session('success')}}
            </div>
        @endif


        @if(session('error'))
            <div class="alert alert-danger alert-dismissable fade show text-center">
                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                {{session('error')}}
            </div>
        @endif
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/images/Logo_PU_(RGB).png" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I already remember</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Forget Password</h2>
                        <form method="POST" class="register-form" id="login-form" action="/logstore">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>