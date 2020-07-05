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


                        <div class="entry clearfix">

                            <div class="entry-title">
                                <h2>{{$page->title}}</h2>
                            </div>




                            <div class="entry-content notopmargin">


                                <div class="entry-image alignleft">
                                    @if($page->f_image)
                                    <a href="#"><img src="{{$page->f_image}}" alt="{{$page->title}}"></a>
                                    @endif
                                </div>


                            </div>
                        </div>


                    </div>

                </div>

                @if(strpos($page->title,'ارتباط')!== false || strpos($page->title,'تماس')!== false)
                <div class="col_half ">
                    <p>&nbsp;</p>
                    
                    <h3>با ما در تماس باشید</h3>
                    <div class="form-widget">
                        <div class="form-result">&nbsp;</div>
                        <form id="template-contactform" class="nobottommargin" action="include/form.php" method="post"
                            name="template-contactform" novalidate="novalidate">
                            <div class="form-process">&nbsp;</div>
                            <div class="col_one_third"><label for="template-contactform-name">نام
                                    <small>*</small></label> <input id="template-contactform-name"
                                    class="sm-form-control required" name="template-contactform-name" type="text"
                                    value="" /></div>
                            <div class="col_one_third"><label for="template-contactform-email">ایمیل
                                    <small>*</small></label> <input id="template-contactform-email"
                                    class="required email sm-form-control" name="template-contactform-email"
                                    type="email" value="" /></div>
                            <div class="col_one_third col_last"><label for="template-contactform-phone">شماره
                                    تماس</label> <input id="template-contactform-phone" class="sm-form-control"
                                    name="template-contactform-phone" type="text" value="" /></div>
                            <div class="clear">&nbsp;</div>
                            <div class="col_two_third"><label for="template-contactform-subject">موضوع
                                    <small>*</small></label> <input id="template-contactform-subject"
                                    class="required sm-form-control" name="subject" type="text" value="" />
                            </div>
                            <div class="clear">&nbsp;</div>
                            <div class="col_full"><label for="template-contactform-message">متن <small>*</small></label>
                                <textarea id="template-contactform-message" class="required sm-form-control" cols="30"
                                    name="template-contactform-message" rows="6">        </textarea></div>
                        </form>
                    </div>
                </div>
                <div class="col_half col_last">
                    <p>&nbsp;</p>
                    <p><a href="https://goo.gl/maps/gcBYxFCGZBscqEUt9" target="_blank" rel="noopener"><img
                                src="/uploads/map.png" alt="" /></a></p>
                </div>

                <div class="col_full">
                    <div class="row clear-bottommargin">
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon"><a href="#"><i class="icon-map-marker2"></i></a></div>
                                <h3>آدرس : <span class="subtitle">خیابان حافظ، خیابان جامی شمالی، پلاک 157 </span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon"><a href="#"><i class="icon-phone3"></i></a></div>
                                <h3>تلفن : <span class="subtitle">  034-91009593</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon"><a href="#"><i class="icon-email2"></i></a></div>
                                <h3>ایمیل : <span class="subtitle">info@ganjalikhan.com</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-linkedin2"></i></a>
                                </div>
                                <h3>صفحه شبکه اجتماعی <a
                                        href="https://www.linkedin.com/company/ganjalikhan-endowments/"> Linkedin </a>
                                    سازمان
                                    را دنبال کنید.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Info End -->
                <p>&nbsp;</p>
                @else
                {!! $page->content !!}
                @endif


            </div>

        </div>

    </section><!-- #content end -->

</div>


@stop