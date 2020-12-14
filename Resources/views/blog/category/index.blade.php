@extends('theme::layout_canvas.master')
@section('title') {{ $title=trans('blog::messages.category_section') }}
@stop
@section('content')
<div class="text-right">
    @if($categories->isEmpty())
    <h3>
        {{ trans('blog::messages.empty') }}
    </h3>
    @endif

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Posts
					============================================= -->
                <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                    @foreach ($categories as $category)


                    <div class="entry clearfix">
                        {{-- <div class="entry-image">
                            <a href="{{$category->image}}" data-lightbox="image"><img class="image_fade"
                            src="{{$category->image}}" alt="{{$category->name}}"></a>
                    </div> --}}
                    <div class="entry-title">
                        <h2><a href="/blog/category?id={{$category->id}}">{{$category->name}}</a></h2>
                    </div>


                </div>


                @endforeach


            </div><!-- #posts end -->



        </div>

</div>

</section><!-- #content end -->

</div>


@stop