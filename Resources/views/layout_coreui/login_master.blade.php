<!DOCTYPE html>

<html dir="rtl" lang="fal-IR">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Mehran NikNafs" />
    <meta name="keyword" content="">
    <title>
         | @yield('title')
    </title>
    <!-- Icons-->
    <link href="/coreui/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/coreui/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/coreui/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/coreui/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/coreui/css/style.css" rel="stylesheet">
    <link href="/coreui/vendors/pace-progress/css/pace.min.css" rel="stylesheet">


</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">

                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div class="col_full">
                                <img src="/canvas/images/logo.png">
                            </div>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/coreui/vendors/jquery/js/jquery.min.js"></script>
    <script src="/coreui/vendors/popper.js/js/popper.min.js"></script>
    <script src="/coreui/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/coreui/vendors/pace-progress/js/pace.min.js"></script>
    <script src="/coreui/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="/coreui/vendors/@coreui/coreui/js/coreui.min.js"></script>
</body>

</html>