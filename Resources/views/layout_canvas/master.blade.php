<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
@include('theme::layout_canvas.head')

<body class="stretched rtl">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@if(!Request::is("auth*"))
		@include('theme::layout_canvas.header')
		@endif

		@if(Request::is("/"))
		@include('theme::layout_canvas.slider')
		@endif

		@if(!Request::is("auth*"))
		@include('theme::layout_canvas.page_title')
		@endif

		@if(!Request::is("auth*"))
		@include('theme::layout_coreui.errorbox')
		@endif

		<!-- Content
		============================================= -->
		@yield('content')

		<!-- #content end -->

		@if(!Request::is("auth*"))
		@include('theme::layout_canvas.footer')
		@endif


	</div><!-- #wrapper end -->

	@include('theme::layout_canvas.footer_scripts')
	@yield('scripts')

</body>

</html>