
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <link rel="icon" href="{{asset('cyberdome.png')}}">
    <title>Petty Case Management System | Login</title>
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css")}}">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/font-icons/entypo/css/entypo.css")}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/neon-core.css")}}">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/neon-theme.css")}}">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/neon-forms.css")}}">
    <link rel="stylesheet" href="{{ asset("templates/html/neon/assets/css/custom.css")}}">
    <script src="{{ asset("templates/html/neon/assets/js/jquery-1.11.3.min.js")}}"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">
<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>
<div class="login-container">

    <div class="login-form">
        
        <div class="login-content">
            <a href="index.html" class="logo">
                <img src="{{asset('logo.png')}}" width="220" alt="" />
            </a>
            <p class="description">Dear user, log in to access the admin area!</p>
            
            <div class="form-login-error">
                @include('layouts.errors-and-messages')
            </div>
            
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                
                <div class="form-group">
                    
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>
                        
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email|UserName" autocomplete="off" />
                 
                    
                    </div>
                       
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    
                </div>
                
                <div class="form-group">
                    
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>
                        
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                    </div>
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Login In
                    </button>
                </div>
                
                <!-- Implemented in v1.1.4 -->
                <!-- <div class="form-group">
                    <em>- or -</em>
                </div> -->
                
               <!--  <div class="form-group">
                
                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
                        Login with Facebook
                        <i class="entypo-facebook"></i>
                    </button>
                    
                </div> -->
                
                <!-- 
                
                You can also use other social network buttons
                <div class="form-group">
                
                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
                        Login with Twitter
                        <i class="entypo-twitter"></i>
                    </button>
                    
                </div>
                
                <div class="form-group">
                
                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
                        Login with Google+
                        <i class="entypo-gplus"></i>
                    </button>
                    
                </div> -->
                
            </form>
            
            
            <div class="login-bottom-links">
                
                <a href="extra-forgot-password.html" class="link">Forgot your password?</a>
                
                <br />
                
                <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
                
            </div>
            
        </div>
        
    </div>
    
</div>


    <!-- Bottom scripts (common) -->
    <script src="{{ asset("templates/html/neon/assets/js/gsap/TweenMax.min.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/bootstrap.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/joinable.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/resizeable.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/neon-api.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/jquery.validate.min.js")}}"></script>
    <script src="{{ asset("templates/html/neon/assets/js/neon-login.js")}}"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="{{ asset("templates/html/neon/assets/js/neon-custom.js")}}"></script>
    <!-- Demo Settings -->
    <script src="{{ asset("templates/html/neon/assets/js/neon-demo.js")}}"></script>

</body>
</html>





