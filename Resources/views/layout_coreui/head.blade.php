<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
	<meta name="author" content="Mehran NikNafs" />
  <meta name="keyword" content="موقوفات گنجعلی خان">
  <!-- Icons-->
  <link rel="icon" type="image/png" href="/images/logo.png" sizes="any" />
  <link href="/coreui/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
  <link href="/coreui/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <link href="/coreui/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/coreui/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="/coreui/css/style.css" rel="stylesheet">
  <link href="/coreui/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  <link href="/coreui/css/custom.css" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script> -->
  <!-- <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script> -->
  <!-- <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

    <link rel="shortcut icon" href="/images/logo_xs.png" type="image/x-icon">
    <link rel="icon" href="/images/logo_xs.png" type="image/x-icon"> -->

  <title>
      موقوفات گنجعلی خان | @yield('title')
  </title>



  <!-- <link href="/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />

    <link href="/adminlte/css/AdminLTE.css" rel="stylesheet" />
    <link href="/adminlte/css/skins/_all-skins.min.css" rel="stylesheet" />
    <link href="/fontawesome/css/font-awesome-animation.min.css" rel="stylesheet" />

    <link href="/adminlte/css/custom.css" rel="stylesheet" />


    <link href="/select2/select2.min.css" rel="stylesheet" />

   



    <script src="/sweetalert/sweetalert2.all.min.js"></script>
   

    

    <script src="/js/jquery-3.3.1.min.js"></script>

    <script src="/select2/select2.min.js"></script> -->

  <link href="/ladda/ladda-themeless.min.css" rel="stylesheet" />

  <link href="/fontawesome/css/all.min.css" rel="stylesheet" />


  <!-- CoreUI and necessary plugins-->
  {{-- <script src="/coreui/vendors/jquery/js/jquery.min.js"></script> --}}
  <script src="/js/jquery-3.3.1.min.js"></script>

  <script src="/sweetalert/sweetalert2.all.min.js"></script>




  <script src="/ladda/spin.min.js"></script>

  <script src="/ladda/ladda.min.js"></script>

  <script src="/coreui/vendors/popper.js/js/popper.min.js"></script>
  <script src="/coreui/vendors/bootstrap/js/bootstrap.min.js"></script>
  <script src="/coreui/vendors/pace-progress/js/pace.min.js"></script>
  <script src="/coreui/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
  <script src="/coreui/vendors/@coreui/coreui/js/coreui.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  {{-- <script src="/coreui/vendors/chart.js/js/Chart.min.js"></script> --}}
  {{-- <script src="/coreui/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script> --}}
  {{-- <script src="/coreui/js/main.js"></script> --}}




  @yield("head")



  <script type="text/javascript">
    @if(Auth::check())
         window.Laravel = <?php echo json_encode([
                'user_id' => Auth::user()->id,
            ]); ?>
        @endif
    
  </script>

  <meta name="csrf-token" content="{{ csrf_token() }}">


</head>