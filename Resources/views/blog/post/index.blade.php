@extends('theme::layout_canvas.master')
@section('title') {{ $title=trans('blog::messages.post_section') }}
@stop
@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
                ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
                    ============================================= -->
                <div id="posts">

                    @if($posts->isEmpty())
                    <h3>
                        {{ trans('blog::messages.empty') }}
                    </h3>
                    @else

                    @foreach($posts as $post)

                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="{{$post->f_image}}" data-lightbox="image"><img class="image_fade"
                                    src="{{$post->f_image}}" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="/blog/post/show?id={{$post->id}}">{{$post->title}}</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i>
                                {{jDate::forge($post -> created_at)->format('%d %B , %Y')}}
                            </li>
                            <li><a href="#"><i class="icon-user"></i> {{$post->user->fullname()}}</a></li>
                            <li><i class="icon-folder-open"></i>
                                @foreach($post->categories as $category)
                                <a href="#">{{$category->name}}</a> ,
                                @endforeach
                            </li>
                            <li><a href="/blog/post/show?id={{$post->id}}#comments"><i class="icon-comments"></i>
                                    {{ $post->comments()->where('is_confirm',1)->count() }} نظرات</a>
                            </li>
                            {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                        </ul>
                        <div class="entry-content">
                            <p>{!! $post->excerpt !!}</p>
                            <a href="/blog/post/show?id={{$post->id}}" class="more-link">ادامه مطلب</a>
                        </div>
                    </div>

                    @endforeach




                    <!-- Pagination
                    ============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-secondary float-left">&larr; قدیمی تر</a>
                            <a href="#" class="btn btn-outline-dark float-right">جدیدتر &rarr;</a>
                        </div>
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->


                @endif
            </div>


            <!-- Sidebar
                ============================================= -->
            @include('theme::blog.includes.sidebar')
            <!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->

</div>


@stop