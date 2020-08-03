@if(Auth::check())
<aside class=" main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-right info">
                <p>
                    {{Auth::user()->name.' '.Auth::user()->family}}
                </p>

            </div>
            <div class="pull-left image">
                <img alt="User Image" src="{{Auth::user()->image}}" onerror="this.src='/images/logo_xs.png'">
                </img>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        @include(env('MAIN_MODULE')."::adminlte.sidebar_menu");



    </section>
    <!-- /.sidebar -->
</aside>
@endif