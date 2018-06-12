

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css2/helper.css" rel="stylesheet">
    <link href="/css2/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">


    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->

            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- Messages -->



                    <!-- End Messages -->
                </ul>
                <!-- User profile and search -->

            </div>
            <!-- End Comment -->
            <!-- Messages -->

            <!-- End Messages -->
            <!-- Profile -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/users/5.jpg" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li><a href="/login"><i class="ti-user"></i>Login</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Register</h4>
                            <form method="POST" action="/register">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name = "email" type="email" class="form-control"
                                           placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <label>Choose your position: </label>
                                    <select name="position[]" id="product-add">
                                        @foreach($position as $pp)
                                            <option value="{{$pp->id}}">{{$pp->display_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name = "password" type="password" class="form-control"
                                           placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Password Confirrmation</label>
                                    <input id="password_confirmation"  name="password_confirmation" type="password"
                                           class="form-control" placeholder="Confirm your password" required>

                                </div>

                                <button type="submit"
                                        class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    Register</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="#"> Sign in</a></p>
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
<script src="/js2/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/js2/lib/bootstrap/js/popper.min.js"></script>
<script src="/js2/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/js2/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="/js2/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/js2/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="/js2/custom.min.js"></script>

</body>

</html>