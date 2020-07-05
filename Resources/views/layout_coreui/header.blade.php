<header class="app-header navbar">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">
    <img class="navbar-brand-full" src="/images/logo.png" width="50" height="50" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="/coreui/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav navbar-nav d-md-down-none  ml-auto">

  </ul>
  <ul class="nav navbar-nav">
    @if(Request::is('admin*'))
    <li class="nav-item d-md-down-none">
      <?php
        $themeservice = new Modules\Theme\Services\ThemeService;
        $notifications_count=$themeservice->notifications_count();
        ?>
      <a class="nav-link" href="/admin/notifications">
        <i class="icon-bell"></i>
        <span class="badge badge-pill badge-danger">{{$notifications_count}}</span>
      </a>
    </li>
    @endif


    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img class="img-avatar" src="{{Auth::user()->image}}" onerror="this.src='/images/logo.png'">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        {{-- <div class="dropdown-header text-center">
          <strong>Account</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="fa fa-bell-o"></i> Updates
          <span class="badge badge-info">42</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fa fa-envelope-o"></i> Messages
          <span class="badge badge-success">42</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fa fa-tasks"></i> Tasks
          <span class="badge badge-danger">42</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fa fa-comments"></i> Comments
          <span class="badge badge-warning">42</span>
        </a>
        <div class="dropdown-header text-center">
          <strong>Settings</strong>
        </div> --}}
        <a class="dropdown-item" href="/profile">
          <i class="fa fa-user"></i> {{trans('theme::routing.profile')}}</a>
        {{-- <a class="dropdown-item" href="#">
          <i class="fa fa-wrench"></i> Settings</a>
        <a class="dropdown-item" href="#">
          <i class="fa fa-usd"></i> Payments
          <span class="badge badge-secondary">42</span>
        </a> --}}
        {{-- <a class="dropdown-item" href="#">
          <i class="fa fa-file"></i> Projects
          <span class="badge badge-primary">42</span>
        </a> --}}
        {{-- <div class="dropdown-divider"></div> --}}
        {{-- <a class="dropdown-item" href="#">
          <i class="fa fa-shield"></i> Lock Account</a> --}}
        <a class="dropdown-item" href="/auth/logout">
          <i class="fa fa-lock"></i> {{trans('theme::routing.logout')}}</a>
      </div>
    </li>
  </ul>

</header>