<html dir="rtl" lang="fal-IR">

@include('theme::layout_adminlte.sections.head')

<body class="hold-transition skin-blue sidebar-mini">


    @include('theme::layout_adminlte.sections.header')
    @include('theme::layout_adminlte.sections.aside')
    <div class="wrapper">
        <div class="content-wrapper" style="padding:10px;">

            <section class="content-header2">
                <?php $segment_url = '';
                $segments=Request::segments();
                $last=end($segments);
                
                ?>

                <h1>
                    @if(Request::is('admin')) {{trans('theme::routing.'.$last)}} @elseif(Request::is('*admin*'))
                    {{trans('theme::routing.'.$segments[1])}}
                    @elseif(Request::is('reseller')) {{trans('theme::routing.reseller')}}
                    @elseif(Request::is('*reseller*'))
                    {{trans('theme::routing.'.$segments[1])}}
                    <small>
                        {{trans('theme::routing.'.$last)}}
                    </small> @endif
                </h1>
                <nav aria-label="breadcrumb">
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




                        <li class="breadcrumb-item @if($loop->last) active @endif">
                            <a href="{{ $segment_url.$sth_url }}">{{trans('theme::routing.'.$segment)}}</a>
                        </li>
                        @endforeach


                    </ol>
                </nav>



            </section>
            @include('theme::layout_adminlte.components.errorbox')
            @yield('content')
        </div>
    </div>

    @include('theme::layout_adminlte.sections.footer')

</body>

</html>