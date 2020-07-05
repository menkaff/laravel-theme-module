<footer class="app-footer">
  <div>

    <span> &copy; تمامی حقوق برای موقوفات گنجعلی خان محفوظ میباشد.<br>
    </span>
  </div>
</footer>

@include('theme::layout_coreui.datatable')


<script src="/js/bootstrap-confirmation.min.js">

</script>
<script type="text/javascript">
  $('[data-toggle=confirmation]').confirmation({
rootSelector: '[data-toggle=confirmation]',
container: 'body',
btnOkLabel: 'آره پاکش کن',
btnCancelLabel: 'نه فعلا صبر کن!',
title: 'مطمئنی میخای پاکش کنی؟',
});


    $(function () {
$('[data-toggle="tooltip"]').tooltip();


})
</script>




@yield('scripts')