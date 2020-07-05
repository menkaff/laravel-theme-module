<header class=" main-header">
    <!-- Logo -->
    <a class="logo" href="/{{Auth::user()->get_top_role()}}">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>
                {{config('app.name')}}
            </b>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>
                {{config('app.name')}}
            </b>
            System
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle" data-toggle="offcanvas" href="#" role="button">
            <i class="fa fa-list"></i>
            <span class="sr-only">
                Toggle navigation
            </span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img alt="User Image" class="user-image" src="{{Auth::user()->image}}"
                            onerror="this.src='/images/logo_xs.png'">
                        <span class="hidden-xs">
                            {{Auth::user()->name.' '.Auth::user()->family}}
                        </span>
                        </img>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img alt="User Image" class="img-circle" src="{{Auth::user()->image}}"
                                onerror="this.src='/images/logo_xs.png'">
                            <p>
                                {{Auth::user()->name.' '.Auth::user()->family}}
                                <br>
                                <span>

                                    دسترسی : {{Auth::user()->get_top_role(true)}}
                                </span>
                            </p>
                            </img>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a class="btn btn-danger btn-flat" href="/auth/logout">
                                    {{trans('user::messages.logout')}}
                                </a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info btn-flat" href="/profile">
                                    {{trans('user::messages.profile')}}
                                </a>
                            </div>

                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>