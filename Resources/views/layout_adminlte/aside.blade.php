<aside class=" main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-right info">
                <p>
                    {{Auth::user()->name.' '.Auth::user()->family}}
                </p>
                <span>

                    {{Auth::user()->get_top_role(true)}}
                </span>
            </div>
            <div class="pull-left image">
                <img alt="User Image" src="{{Auth::user()->image}}" onerror="this.src='/images/logo_xs.png'">
                </img>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">

            <li class="treeview @if (Request::is('admin')) active @endif">
                <a href="/admin">
                    <i class="fal fa-tachometer-alt">
                    </i>
                    <span>
                        داشبورد
                    </span>
                </a>
            </li>

            @if(Auth::user()->hasPermissionTo('admin/user'))
            <li class="treeview @if (Request::is('*/user*')) active @endif">
                <a href="/admin/user">
                    <i class="fal fa-user">
                    </i>
                    <span>
                        {{trans('user::messages.admins')}}
                    </span>
                </a>
            </li>
            @endif

            @if(Auth::user()->hasPermissionTo('admin/user/role'))
            <li class="treeview @if (Request::is('*/user/role*')) active @endif">
                <a href="/admin/user/role">
                    <i class="fal fa-user">
                    </i>
                    <span>
                        سطوح دسترسی
                    </span>
                </a>
            </li>
            @endif


            @if(Auth::user()->hasPermissionTo('admin/easyshop/setting'))
            <li class="treeview @if (Request::is('*/admin/easyshop/setting*')) active @endif">
                <a href="/admin/easyshop/setting">
                    <i class="fal fa-user">
                    </i>
                    <span>
                        تنظیمات
                    </span>
                </a>
            </li>
            @endif

            @if(Auth::user()->hasPermissionTo('admin/easyshop/chart'))
            {{-- <li class="treeview @if (Request::is('*/admin/easyshop/chart*')) active @endif">
                <a href="/admin/easyshop/chart">
                    <i class="fal fa-chart-bar">
                    </i>
                    <span>
                        نمودار ها
                    </span>
                    <i class="fa fa-play faa-horizontal animated pull-left text-red"></i>

                </a>
            </li> --}}
            @endif

            <li>
                <hr />
            </li>

            @if(Auth::user()->hasPermissionTo('admin/easyshop/buy/buyer'))
            <li class="treeview @if (Request::is('*/admin/easyshop/buy/buyer*')) active @endif">
                <a href="/admin/easyshop/buy/buyer">
                    <i class="fal fa-user">
                    </i>
                    <span>
                        {{trans('theme::routing.buyer')}}

                    </span>


                </a>
            </li>
            @endif

            @if(Auth::user()->hasPermissionTo('admin/easyshop/seller/seller_category'))
            <li class="treeview @if (Request::is('*/admin/easyshop/seller/seller_category*')) active @endif">
                <a href="/admin/easyshop/seller/seller_category">
                    <i class="fal fa-network-wired">
                    </i>
                    <span>
                        {{trans('theme::routing.seller_category')}}

                    </span>


                </a>
            </li>
            @endif

            @if(Auth::user()->hasPermissionTo('admin/easyshop/seller/seller'))
            <li class="treeview @if (Request::is('*/admin/easyshop/seller/seller*')) active @endif">
                <a href="/admin/easyshop/seller/seller">
                    <i class="fal fa-building">
                    </i>
                    <span>
                        {{trans('theme::routing.seller')}}

                    </span>


                </a>
            </li>
            @endif



            @if(Auth::user()->hasPermissionTo('admin/easyshop/seller/product_category'))
            <li class="treeview @if (Request::is('*/admin/easyshop/seller/product_category*')) active @endif">
                <a href="/admin/easyshop/seller/product_category">
                    <i class="fal fa-network-wired">
                    </i>
                    <span>
                        {{trans('theme::routing.product_category')}}
                    </span>


                </a>
            </li>
            @endif

            @if(Auth::user()->hasPermissionTo('admin/easyshop/seller/product'))
            <li class="treeview @if (Request::is('*/admin/easyshop/seller/product*')) active @endif">
                <a href="/admin/easyshop/seller/product">
                    <i class="fal fa-cubes">
                    </i>
                    <span>
                        {{trans('theme::routing.product')}}
                    </span>


                </a>
            </li>
            @endif



        </ul>



    </section>
    <!-- /.sidebar -->
</aside>