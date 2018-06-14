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
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css2/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/staff.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/orders.css">
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

<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content card">
                    <div class="login-form">
                        <h4>Update Staff</h4>

                        <form action="{{route('storeUpdateStaff')}}" method="post">
                            {{ csrf_field() }}
                            @foreach($staff as $pp)
                            <div class="form-group">
                                <label>Name</label>
                                <input type ="text" name="name" class="form-control" value ="{{$pp->name_}}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Patronym</label>
                                <input type = "text" name="patronym" class="form-control" value ="{{$pp->patronym_}}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type = "text" name="surname" class="form-control" value ="{{$pp->surname_}}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type = "text" name="phone" class="form-control" value ="{{$pp->phone_}}"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Position - {{$pp->pos }} </label>

                            </div>
                            <div class="form-group">
                                <label>New Position</label>
                                <select name="position[]" id="product-add" required>
                                    @foreach($position as $in)
                                        <option value="{{$in->position}}">{{$in->position}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Payment</label>
                                <input type="number" name="payment" class="form-control" value ="{{$pp->payment_}}" required>
                            </div>

                            <div class="form-group">
                                <label>Branch - {{$pp->city}} </label>
                            </div>

                            <div class="form-group">
                                <label>New Branch</label>
                                <select name="branch[]" id="product-add" required>
                                    @foreach($branch as $b)
                                        <option value="{{$b->branch_id}}">{{$b->city}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" class="form-control" value ="{{$pp->address_}}" required>
                            </div>

                                <div class="form-group">
                                    <input type ="hidden" name="id" class="form-control" value ="{{$pp->id}}" required>
                                </div>


                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                            <a href = "/staff"><button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Go Back</button></a>
                            @endforeach
                        </form>
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
<!--Custom Java2Script -->
<script src="/js2/custom.min.js"></script>

</body>

</html>