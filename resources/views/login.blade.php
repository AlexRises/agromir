<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css2/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css2/helper.css" rel="stylesheet">
    <link href="/css2/style.css" rel="stylesheet">

    <script src="/js/jQuery.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script src="/js/flashMessages.js"></script>

    <link rel="stylesheet" href="/css/app.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">

<div id="messages">

    @if($flash = session('messageError'))
        <div class="alert-error message-alert" role="alert">
            {{ $flash }}
        </div>
    @endif

    @if($flash = session('messageSuccess'))
        <div class="alert-success message-alert" role="alert">
            {{ $flash }}
        </div>
    @endif

    @include('layouts.errors')
</div>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Login</h4>

                            <form action="/login" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name ="password" class="form-control"
                                           placeholder="Password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                    <label class="pull-right">
                                        <a href="#">Forgotten Password?</a>
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="js2/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js2/lib/bootstrap/js/popper.min.js"></script>
<script src="js2/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js2/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="js2/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="js2/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom Java2Script -->
<script src="js2/custom.min.js"></script>

</body>

</html>