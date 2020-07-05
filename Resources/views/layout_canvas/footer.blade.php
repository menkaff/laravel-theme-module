<!-- Footer
		============================================= -->
<footer id="footer" class="dark">

	<div class="container">

		<!-- Footer Widgets
				============================================= -->
		<div class="footer-widgets-wrap clearfix">

			<div class="col_two_third">

				<div class="col_one_third">

					<div class="widget clearfix">

						<img src="/canvas/images/footer-widget-logo.png" alt="" class="footer-logo">
						<p><strong>موقوفات گنجعلی خان</strong></p>
						<p>وقف سکوی عروجیست که ویژگی ماندگاریش توانی به انسان می بخشد که تا ملکوت پیش رود </p>

						<div
							style="background: url('{{URL::to('/')}}/canvas/images/world-map.png') no-repeat center center; background-size: 100%;">
							<address>
								<strong>تماس با ما :</strong><br>
								آدرس: خیابان حافظ، خیابان جامی شمالی، پلاک 157 <br>

							</address>
							<abbr title="Phone Number"><strong>تلفن:</strong></abbr> 91009593-034<br>
							<abbr title="Email Address"><strong>ایمیل:</strong></abbr> info@ganjalikhan.com
						</div>

					</div>

				</div>

				<div class="col_one_third">

					<div class="widget widget_links clearfix">
						<?php
							$cobojservice = new Modules\Coboj\Services\CobojService;
							$types=$cobojservice->type_all();
							?>
						<h4>تسهیلات</h4>

						<ul>
							@foreach($types as $type)
							<li><a href="/coboj/create?type_id={{$type->id}}">{{$type->name}}</a></li>
							@endforeach
						</ul>

					</div>

				</div>

				<div class="col_one_third col_last">

					<div class="widget clearfix">
						<?php
									$postservice = new Modules\Blog\Services\PostService;
									$recent_posts=$postservice->recent_posts();
									?>
						<h4>مطالب اخیر</h4>

						<div id="post-list-footer">
							@foreach($recent_posts as $recent_post)
							<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4><a
												href="/blog/post/show?id={{$recent_post->id}}">{{$recent_post->title}}</a>
										</h4>
									</div>
									<ul class="entry-meta">
										<li> {{jDate::forge($recent_post -> created_at)->format('%d %B, %Y')}}
										</li>
									</ul>
								</div>
							</div>

							@endforeach


						</div>
					</div>

				</div>

			</div>

			<div class="col_one_third col_last">


				<div class="widget subscribe-widget clearfix">
					<h5>برای اطلاع از آخرین اخبار و اطلاعیه ها به ما بپیوندید</h5>
					<div class="widget-subscribe-form-result"></div>
					<form id="widget-subscribe-form" action="#" method="post" class="nobottommargin">
						<div class="input-group divcenter">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="icon-email2"></i></div>
							</div>
							<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
								class="form-control required email" placeholder="اشتراک در خبرنامه">
							<div class="input-group-append">
								<button class="btn btn-success" type="submit">اشتراک</button>
							</div>
						</div>
					</form>
				</div>

				<div class="widget clearfix" style="margin-bottom: -20px;">

					<div class="row">

						<div class="col-lg-6 clearfix bottommargin-sm">
							<a href="/blog/page/%D8%A7%D8%B1%D8%AA%D8%A8%D8%A7%D8%B7-%D8%A8%D8%A7-%D9%85%D8%A7"
								class="social-icon si-dark si-colored si-linkedin nobottommargin"
								style="margin-right: 10px;">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
							<a href="/blog/page/%D8%A7%D8%B1%D8%AA%D8%A8%D8%A7%D8%B7-%D8%A8%D8%A7-%D9%85%D8%A7"><small
									style="display: block; margin-top: 3px;"><strong>
										{{-- شبکه اجتماعی مارا دنبال کنید --}}
									</strong>
							</a>
						</div>


					</div>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	<!-- Copyrights
			============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				&copy; تمامی حقوق برای موقوفات گنجعلی خان محفوظ میباشد.<br>
			</div>



		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->