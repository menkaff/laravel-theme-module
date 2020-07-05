<html dir="rtl" lang="fa-IR">

@include('front::layouts.head')

<body>



    @include('front::layouts.header')
    <div class="wrapper">
        <div class="container-fluid">
            @yield('profilebar')
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>
        

    </div>

   @include('front::layouts.footer')



</body>

</html>