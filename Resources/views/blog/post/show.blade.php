@extends('theme::layout_canvas.master')
@section('title') {{ $title=trans('blog::messages.post_section') }}
@stop
@section('content')
<div class="text-right">


    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
					============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        <img src="{{$post->f_image}}" alt="{{$post->title}}">

                        <!-- Single Post
							============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
								============================================= -->
                            <div class="entry-title">
                                <h2>{{$post->title}}</h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
								============================================= -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i>
                                    {{jDate::forge($post -> created_at)->format('%d %B , %Y')}}
                                </li>
                                <li><a href="#"><i class="icon-user"></i> {{$post->user->fullname()}}</a></li>
                                <li><i class="icon-folder-open"></i>
                                    @foreach($post->categories as $category)
                                    <a href="/blog/category/show?id={{$category->id}}">{{$category->name}}</a>
                                    @if(!$loop->last)
                                    ,
                                    @endif
                                    @endforeach
                                </li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i>
                                        {{ $post->comments()->where('is_confirm',1)->get()->count() }} نظرات</a>
                                </li>
                                {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                            </ul>

                            <!-- Entry Content
								============================================= -->
                            <div class="entry-content notopmargin">

                                <!-- Entry Image
									============================================= -->
                                <div class="entry-image alignleft">

                                </div><!-- .entry-image end -->

                                {!! $post->content !!}
                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
									============================================= -->
                                {{-- <div class="tagcloud clearfix bottommargin">
                                    <a href="#">general</a>
                                    <a href="#">information</a>
                                    <a href="#">media</a>
                                    <a href="#">press</a>
                                    <a href="#">gallery</a>
                                    <a href="#">illustration</a>
                                </div><!-- .tagcloud end --> --}}

                                <div class="clear"></div>

                                <!-- Post Single - Share
									============================================= -->
                                {{-- <div class="si-share noborder clearfix">
                                    <span>Share this Post:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div>--}}
                                <!-- Post Single - Share End -->

                            </div>
                        </div><!-- .entry end -->


                        <!-- Comments
							============================================= -->
                        <div id="comments" class="clearfix">

                            <h3 id="comments-title">نظرات</h3>





                            <!-- Comments List
								============================================= -->
                            <ol class="commentlist clearfix">

                                @foreach($post->comments()->where('is_confirm',1)->get() as $comment)

                                <li class="comment even thread-even depth-1" id="li-comment-1">

                                    <div id="comment-1" class="comment-wrap clearfix">

                                        {{-- <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img alt=''
                                                        src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                        class='avatar avatar-60 photo avatar-default' height='60'
                                                        width='60' /></span>

                                            </div>

                                        </div> --}}

                                        <div class="comment-content clearfix">

                                            <div class="comment-author">{{$comment->user->fullname()}}<span><a href="#"
                                                        title="Permalink to this comment">
                                                        {{jDate::forge($comment -> created_at)->format('%d %B , %Y H:i')}}

                                                    </a></span></div>

                                            <p>{{$comment->content}}</p>

                                            {{-- <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a> --}}

                                        </div>

                                        <div class="clear"></div>

                                    </div>




                                </li>
                                @endforeach


                            </ol><!-- .commentlist end -->

                            <div class="clear"></div>

                            <!-- Comment Form
                                ============================================= -->
                            @if(Auth::check())
                            <div id="respond" class="clearfix">

                                <h3> <span>نظر</span> بدهید</h3>

                                <form class="clearfix" action="/blog/comment/store" method="post" id="commentform">

                                    @csrf

                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    {{-- <div class="col_one_third">
                                        <label for="author">Name</label>
                                        <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="col_one_third">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                            class="sm-form-control" />
                                    </div>

                                    <div class="col_one_third col_last">
                                        <label for="url">Website</label>
                                        <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                            class="sm-form-control" />
                                    </div> --}}

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label for="comment">متن نظر شما</label>
                                        <textarea name="content" cols="58" rows="7" tabindex="4"
                                            class="sm-form-control"></textarea>
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button name="submit" type="submit" id="submit-button" tabindex="5"
                                            value="Submit" class="button button-3d nomargin">ارسال</button>
                                    </div>

                                </form>

                            </div><!-- #respond end -->
                            @endif

                        </div><!-- #comments end -->

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                @include('theme::blog.includes.sidebar')
                <!-- .sidebar end -->

            </div>


        </div>

    </section><!-- #content end -->

</div>


@stop