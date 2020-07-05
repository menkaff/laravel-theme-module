<head>
    <link rel="shortcut icon" href="/images/logo_xs.png" type="image/x-icon">
    <link rel="icon" href="/images/logo_xs.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{config('app.name')}} | @yield('title')
    </title>
    </meta>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/fontawesome/f5/css/all.min.css" rel="stylesheet" />
    <link href="/front/css/custom.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/front.css') }}"> --}}

    {{-- Laravel Mix - Childs CSS File --}}
    @yield('mix_css')




    <script src="/js/jquery-3.1.0.min.js">

    </script>

    <script src="/bootstrap/js/bootstrap.min.js"></script>

</head>



<script type="text/javascript">
    @if(Auth::check())
     window.Laravel = <?php echo json_encode([
            'user_id' => Auth::user()->id,
        ]); ?>
    @endif

</script>
@yield('head')