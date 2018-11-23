<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
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
        <div class="contact-form1">
            <div class="contact-w3-agileits">
            <h3>Sign Up</h3>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-sub-w3ls{{ $errors->has('first_name') ? ' is-invalid' : '' }}">
                        <input placeholder="Full Name"  type="text" id="name" class="form-control" name="name"  required autofocus>
                        @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif
                        </div>
                        <div class="form-sub-w3ls{{ $errors->has('username') ? ' is-invalid' : '' }}">
                        <input placeholder="Username"  type="text" id="username" class="form-control" name="username" required autofocus>
                        @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                        </div>
                        <div class="form-sub-w3ls{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <input placeholder="Email"  type="text" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        </div>
                        <div class="form-sub-w3ls{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input placeholder="Password"  type="password" id="password" class="form-control" name="password" required autofocus>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                            
                        </div>
                        <div class="form-sub-w3ls{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}">
                        <input placeholder="Confirm Password"  type="password" id="password_confirm" class="form-control" name="password_confirmation" required autofocus>
                        </div>

                        <div class="form-sub-w3ls">
                        <select name="sex" class="form-control" style="margin-top:1em;width: -webkit-fill-available;border-top: 0px;border-right: 0px;border-left: 0px;border-bottom: 1px solid #000;height: 2.5em">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                        </div>
                       
                    <div class="submit-w3l">
                        <input type="submit" value="Register">
                    </div>
                    <br><br>
                    <p class="p-bottom-w3ls">Have already an account? <a href="{{route('login')}}">Sign In</a></p>
                </form>
            </div>  
        </div>
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