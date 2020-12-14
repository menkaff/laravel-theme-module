@extends('theme::layout_coreui.master')
@section('title') {{ $title=trans('coboj::messages.print') }}
@stop
@section('content')
<style>
    @font-face {
        font-family: iransans;
        src: url(/coreui/fonts/IRANSans-Light.ttf);
    }

    #pdf {
        background-image: url('/modules/coboj/sarbarg.png');
        background-size: contain !important;
        height: 1500px;
        width: 1000px;
        /* font-family: iransans; */
        background-position: top;
        background-repeat: no-repeat;
        margin-top:50px;
    }

    #pdfcontent {
        padding-top: 400px;
        padding-right: 200px;
        padding-left: 200px;
    }
</style>
<h3 class="text-center">
    تا لحظاتی دیگر فرم تسهیلات شما ارسال می شود
</h3>
<div id="pdf" class="text-justify">
    <div id="pdfcontent">
        <h1> {{$type->name}} </h1>
        {!! $dom !!}
    </div>
</div>
@endsection
@section('scripts')


<script src="/modules/coboj/jspdf.min.js">
</script>

<script src="/modules/coboj/html2canvas.min.js">
</script>

<script src="/modules/coboj/coboj_print.js">
</script>
@endsection