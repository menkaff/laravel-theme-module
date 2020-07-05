<div class="sidebar">
  <nav class="sidebar-nav">
    @if (Request::is('admin*'))
    <ul class="nav">

      @if(Auth::user()->hasPermissionTo('admin'))
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="nav-icon icon-speedometer"></i> {{trans('theme::routing.admin')}}
        </a>
      </li>
      @endif
      @if(Auth::user()->hasPermissionTo('admin/coboj'))
      <li class="nav-item">
        <a class="nav-link">
          <i class="nav-icon icon-layers"></i>
          {{trans('theme::routing.coboj')}}
        </a>
        <ul class="nav-child">
          <li>
            <a class="nav-link" href="/admin/coboj/type">
              {{trans('theme::routing.coboj_type')}}</a>
          </li>
          <li>
            <a class="nav-link" href="/admin/coboj">
              {{trans('theme::routing.cobojs')}}</a>
          </li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->hasPermissionTo('admin/blog'))
      <li class="nav-item">
        <a class="nav-link">
          <i class="nav-icon icon-note"></i>
          {{trans('theme::routing.blog')}}
        </a>
        <ul class="nav-child">
          <li class="nav-item">
            <a class="nav-link" href="/admin/blog/post">
              {{trans('theme::routing.post')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/blog/page">
              {{trans('theme::routing.page')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/blog/category">
              {{trans('theme::routing.category')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/blog/menu">
              {{trans('theme::routing.menu')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/blog/comment">
              {{trans('theme::routing.comment')}}</a>
          </li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->hasPermissionTo('admin/user'))
      <li class="nav-item">
        <a class="nav-link">
          <i class="nav-icon fal fa-users"></i>
          {{trans('theme::routing.user')}}
        </a>

        <ul class="nav-child">
          <li class="nav-item">
            <a class="nav-link" href="/admin/user">
              مدیریت کاربران سایت</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/user/role">
              {{trans('theme::routing.role')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/user/permission">
              سطح دسترسی</a>
          </li>
        </ul>
      </li>
      @endif
      <li>
        <hr />
      </li>
      @if(Auth::user()->hasPermissionTo('admin/hbs/{subs?}'))
      <li class="nav-item">
        <a class="nav-link" href="/admin/hbs">
          <i class="nav-icon fal fa-hotel"></i>
          {{trans('theme::routing.hbs')}}</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="nav-icon fal fa-home"></i>
          {{trans('theme::routing.home')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/file-manager/fm-button">
          <i class="nav-icon fal fa-file"></i>
          {{trans('theme::routing.filemanager')}}</a>
      </li>

    </ul>
    @elseif(Request::is('profile*') || Request::is('hbs*') || Request::is('coboj*'))
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/profile">
          <i class="nav-icon fal fa-user"></i>
          پروفایل کاربری
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/coboj">
          <i class="nav-icon fal fa-umbrella"></i>
          تسهیلات
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/hbs/booking">
          <i class="nav-icon fal fa-hotel"></i>
          رزرو هتل
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="nav-icon fal fa-home"></i>
          {{trans('theme::routing.home')}}</a>
      </li>
    </ul>

    @endif
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>