@if(!Request::is('/') && !Request::is('*auth*'))
<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <?php $segment_url = '';
                    $segments=Request::segments();
                    $last=end($segments);
                    
                    ?>

        <h1>
            @if(isset($segments[0]))
            {{trans('theme::routing_front.'.$segments[0])}}
            @endif
        </h1>
        <span> {{trans('theme::routing_front.'.$segments[0].'_desc')}} </span>

        <ol class="breadcrumb">


            @foreach($segments as $segment)
            <?php
                        $segment_url .= '/'.$segment;
                            
    
                            ?>




            <li class="breadcrumb-item">
                <a href="{{ $segment_url }}">

                    @if(langHas('theme::routing_front.'.$segment))
                    {{trans('theme::routing_front.'.$segment)}}
                    @else
                    {{$segment}}
                    @endif

                </a>
            </li>
            @endforeach


        </ol>



    </div>
</section>
@endif