<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <link rel="shortcut icon" href="/images/logo_xs.png" type="image/x-icon">
    <link rel="icon" href="/images/logo_xs.png" type="image/x-icon">
    <title>
        {{config('app.name')}} | @yield('title')
    </title>
    <link href="/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" />
    <link href="/adminlte/css/AdminLTE.css" rel="stylesheet" />
    <link href="/adminlte/css/skins/_all-skins.min.css" rel="stylesheet" />
    <link href="/adminlte/css/custom.css" rel="stylesheet" />
    <link href="/fontawesome/f5/css/all.min.css" rel="stylesheet" />
    <link href="/fontawesome/css/font-awesome-animation.min.css" rel="stylesheet" />
    <script src="/js/jquery-3.5.1.slim.min.js"></script> @yield("head")
    <script type="text/javascript">
        @if(Auth::check())
         window.Laravel = <?php echo json_encode([
    'user_id' => Auth::user()->id,
]); ?>
        @endif    
    </script>
</head>