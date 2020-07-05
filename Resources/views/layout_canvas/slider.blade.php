<!-- Slider
		============================================= -->
<section id="slider" class="slider-element revslider-wrap slider-parallax clearfix">
	<div class="slider-parallax-inner">
		<div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider"
			style="padding:0px;">

			<div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
				<?php
							$postservice = new Modules\Blog\Services\PostService;
							$slides=$postservice->slides();
							?>
				<ul>


					@foreach ($slides as $slide)
					<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500"
						data-thumb="{{$slide->f_image}}" data-delay="10000" data-saveperformance="off"
						data-title="{{$slide->title}}">
						<!-- MAIN IMAGE -->
						<img src="{{$slide->f_image}}" alt="kenburns6" data-bgposition="left top" data-kenburns="on"
							data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100"
							data-bgpositionend="center center" />
					</li>
					@endforeach

				</ul>
			</div>
		</div>
	</div>
</section>