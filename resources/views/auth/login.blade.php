<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="{{url('/')}}/login_register_form/web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="{{url('/')}}/login_register_form/web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{url('/')}}/login_register_form/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
        <!-- web font -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- //web font -->
    </head>
    <body>
    <h1></h1>
    <br>
    <h1></h1>
    <div class="main-agileits">
    <!--form-stars-here-->
            <div class="form-w3-agile">
                <h2>Login</h2>
                <form action="{{ route('login') }}" id="sign_in" method="POST">
                        @csrf
                    <div class="form-sub-w3{{ $errors->has('username') ? ' is-invalid' : '' }}">
                        <input id="username" type="text" name="username" class="form-control" value="{{ old('username') }}"  placeholder="Username " required autofocus>
                       
                     @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-sub-w3{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                    
                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <p class="p-bottom-w3ls">Haven't already an account?<a href="{{route('register')}}">  Sign Up here</a>
                        <br><br>
                    <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                    </a>
                    </p>
                    <div class="submit-w3l">
                        <button type="submit">LOGIN</button> 
                    </div>
                </form>
            </div>
    <!--//form-ends-here-->
    </div>

    <script type="text/javascript" src="{{url('/')}}/login_register_form/web/js/jquery-2.1.4.min.js"></script>
        <!-- pop-up-box -->  
            <script src="{{url('/')}}/login_register_form/web/js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!--//pop-up-box -->
        <script>
            $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
                                                                            
            });
        </script>
    </body>
</html>