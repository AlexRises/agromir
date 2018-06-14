<?php
use App\Role;
$role = new Role();

?>

<!doctype html>
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
    <link rel="stylesheet" href="/css/staff.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/orders.css">
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
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b><img src="/images/logo.png" alt="homepage" class="dark-logo" /></b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span><img src="/images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                {{--<ul class="navbar-nav mr-auto mt-md-0">--}}
                    {{--<!-- This is  -->--}}
                    {{--<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>--}}
                    {{--<li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>--}}
                    {{--<!-- Messages -->--}}



                    {{--<!-- End Messages -->--}}
                {{--</ul>--}}
                <!-- User profile and search -->

            </div>
            <!-- End Comment -->
            <!-- Messages -->

            <!-- End Messages -->
            <!-- Profile -->
            <
        </nav>
    </div>

</div>
<!-- End header header -->
<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Profile <span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        @if (Auth::check())
                            <li>{{Auth::user()->email}}</li>
                        @endif
                        <li><a href="/logout">Logout</a></li>

                    </ul>
                </li>
                @if(!$role->isAgr())
                    <li class="nav-label">Staff</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Staff</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/staff">Staff</a></li>

                        </ul>
                    </li>
                @endif

                @if($role->isCeo() or $role->isVice())
                    <li class="nav-label">Technic</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Technic <span class="label label-rouded label-warning pull-right">6</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/technic">Technic</a></li>

                        </ul>
                    </li>
                @endif
                @if(!$role->isAgr())
                    <li class="nav-label">Orders</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Invoice <span class="label label-rouded label-danger pull-right">6</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/invoice">Invoices</a></li>
                            @if(!$role->isAcc())
                                <li><a href="/new_invoice">Make new Invoice</a></li>
                                <li><a href="/invoice_add">Make new Ordrer</a></li>
                            @endif

                        </ul>
                    </li>
                @endif

                <li class="nav-label">Products</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Products</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/products">Products</a></li>
                    </ul>
                </li>
                @if($role->isCeo() or $role->isAgr())
                    <li class="nav-label">Plant Cultures</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Plant Culture</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/plant_culture">Plant Cultures</a></li>
                            <li><a href="/prod_plant_culture"> Spent Products for Cultures</a></li>
                            <li><a href="/predict">Predict</a></li>

                        </ul>
                    </li>
                @endif
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Orders</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <div class="card">
        <div class="card-body">

            <div class="table-responsive m-t-40">
                @if($role->isCeo() or $role->isVice())
    <form action="/new_invoice">

        <button class="btn btn-primary btn-flat m-b-30 m-t-30" onclick="" >
            <i class="fas fa-plus"></i>
            <span>Добавить новый инвойс</span>
        </button>
    </form>

    <form action="/invoice_add">

        <button class="btn btn-primary btn-flat m-b-30 m-t-30" onclick="" >
            <i class="fas fa-plus"></i>
            <span>Добавить продукты для заказа</span>
        </button>
    </form>
                @endif


            <div class="table-heading-black">
                <div class="table-section-small">#</div>
                <div class="table-section-small">Part</div>
                <div class="table-section-small">Date of Delivery</div>
                <div class="table-section-small">Price</div>
                <div class="table-section-small">Amount</div>
                <div class="table-section-small">Unit</div>
                <div class="table-section-small">Sum</div>
                <div class="table-section-small">Branch</div>

            </div>
            <ul class="table-list">
                @foreach($invoice as $in)
                    <li class="table-list-item {{$in->invoice_id}}">
                        <div class="table-section-small">{{ $in->invoice_id or '?' }}</div>
                        <div class="table-section-small">{{ $in->part or '?'}}</div>
                        <div class="table-section-small">{{ $in->date_of_delivery}}</div>
                        <div class="table-section-small">{{ $in->price}}</div>
                        <div class="table-section-small">{{ $in->amount}}</div>
                        <div class="table-section-small">{{ $in->unit}}</div>
                        <div class="table-section-small">{{ $in->sum}}</div>
                        <div class="table-section-small">{{ $in->provider}}</div>

                    </li>
                @endforeach
            </ul>



            {{--@include('popup.popup-order-add')--}}
            {{--@include('popup.popup-order-add')--}}

            {{--{!! $orders->render() !!}--}}

            </div>
        </div>
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
    <!-- End footer -->
    <!-- End Page wrapper  -->
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


    <script src="/js2/lib/datatables/datatables.min.js"></script>
    <script src="/js2/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="/js2/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="/js2/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="/js2/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="/js2/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="/js2/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="/js2/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="/js2/lib/datatables/datatables-init.js"></script>
</body>
</html>


