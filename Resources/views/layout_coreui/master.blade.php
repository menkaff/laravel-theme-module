<html dir="rtl" lang="fal-IR">

@include('theme::layout_coreui.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

  @if(Request::is('admin*'))
  <style>
    header {
      background-color: #201f2b !important;
    }

    .sidebar {
      background-color: #282733 !important;
    }


    .sidebar .nav-link.active {
      color: #fff !important;
      background: #17a2b8 !important;
    }

    .sidebar .nav-link.active i {
      color: #fff !important;
    }

    .sidebar .nav-item .nav-link:hover {
      color: #fff !important;
      background: #17a2b8 !important;
    }

    .sidebar .nav-child .nav-link.active {
      color: #fff !important;
      background: #2f2e3c !important;
    }

    .sidebar .nav-child .nav-link:hover {
      color: #fff !important;
      background: #2f2e3c !important;
    }

    .sidebar .nav-link {
      color: #9899AC !important;
    }
  </style>
  @endif

  @include('theme::layout_coreui.header')

  <div class="app-body">

    @include('theme::layout_coreui.sidebar')
    <main class="main">
      <!-- Breadcrumb-->

      <section class="content-header">
        <?php $segment_url = '';
                $segments=Request::segments();
                $last=end($segments);
                
                ?>

        <h1>
          @if(Request::is('admin')) {{trans('theme::routing.'.$last)}}
          @elseif(Request::is('*admin*'))
          {{trans('theme::routing.'.$segments[1])}}
          @endif
        </h1>
        <ol class="breadcrumb">


          @foreach($segments as $segment)
          <?php 
                    $sth_url='';
                    $segment_url .= '/'.$segment; 
                        if($segment=='details'){
                        
                            if(app('request')->has('type_id'))
                            $sth_url='?id='.app('request')->input('type_id');
                        
                            if(app('request')->has('id')&&$last==$segment)
                            $sth_url='?id='.app('request')->input('id');

                            if(app('request')->has('id')&&($segment[count($segments)-2]=='category')&&($segment[count($segments)-1]=='edit')){
                                
                                $category=Modules\Store\Models\Field_Category::find(app('request')->input('id'));
                                $sth_url='?id='.$segment[count($segments)-2];
                            }
                            

                            if(app('request')->has('field_id'))
                            {
                                $type_id=Modules\Store\Models\Field::find(app('request')->input('field_id'))->type_id;
                                $sth_url='?id='.$type_id;      
                            }

                        }elseif($segment=='field'){
                            if(app('request')->has('type_id'))
                            $sth_url='/create?type_id='.app('request')->input('type_id'); 

                            if(app('request')->has('field_id'))
                            $sth_url='/edit?field_id='.app('request')->input('field_id'); 
                        }

                        ?>




          <li class="breadcrumb-item">
            <a href="{{ $segment_url.$sth_url }}">{{trans('theme::routing.'.$segment)}}</a>
          </li>
          @endforeach


        </ol>



      </section>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </main>

  </div>


  @include('theme::layout_coreui.footer')


</body>

</html>