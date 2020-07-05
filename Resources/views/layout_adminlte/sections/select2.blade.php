<link href="/select2/select2.min.css" rel="stylesheet" />
<script src="/select2/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('.select2').select2();
        });


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