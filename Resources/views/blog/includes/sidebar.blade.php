<div class="sidebar nobottommargin col_last clearfix">
    <div class="sidebar-widgets-wrap">

        <?php
            $postservice = new Modules\Blog\Services\PostService;
            $recent_posts=$postservice->recent_posts();
            $projects=$postservice->projects();
            ?>

        <div class="widget widget-twitter-feed clearfix">

            <h4>آخرین مطالب</h4>
            <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                @foreach($recent_posts as $recent_post)
                <li>
                    <i class="icon-edit"></i>
                    <h5>{{$recent_post->title}}</h5>
                    <a href="/blog/post/{{make_slug($recent_post->title)}}" class="twitter-avatar" target="_blank">
                        <img src="{{$recent_post->f_image}}" alt="Envato" title="Envato"></a><span>
                        {{$recent_post->excerpt}}
                    </span>
                </li>
                @endforeach
            </ul>

            <a href="/blog/post" class="btn btn-secondary btn-sm fright">سایر مطالب</a>

        </div>

        <div class="widget clearfix">

            <h4>پروژه ها</h4>
            <div class="col-md-12 row">
                @foreach($projects as $project)
                <a href="/blog/post/make_slug({{$project->title}})"
                    style="height:100px;width:100px;background-image:url({{$project->f_image}});background-size:contain;background-repeat:no-repeat;">

                </a>
                @endforeach

            </div>

        </div>

        <div class="widget subscribe-widget clearfix">
            <h5>برای اطلاع از آخرین اخبار و اطلاعیه ها به ما بپیوندید</h5>
            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
                <div class="input-group divcenter">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="icon-email2"></i></div>
                    </div>
                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                        class="form-control required email" placeholder="آدرس ایمیل را وارد نمایید">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">اشتراک در خبرنامه</button>
                    </div>
                </div>
            </form>
        </div>







    </div>

</div>