<style>
    table.dbt thead th {
        position: relative;
        background-image: none !important;
    }

    table.dbt thead th.sorting:after,
    table.dbt thead th.sorting_asc:after,
    table.dbt thead th.sorting_desc:after {
        position: absolute;
        top: 12px;
        right: 8px;
        display: block;
        font-family: FontAwesome;
    }

    table.dbt thead th.sorting:after {
        content: "\f0dc";
        color: #000;
        font-size: 0.8em;
        padding-top: 0.12em;
    }

    table.dbt thead th.sorting_asc:after {
        content: "\f0de";
        color: #000;
    }

    table.dbt thead th.sorting_desc:after {
        content: "\f0dd";
        color: #000;
    }
</style>
<link rel="stylesheet" type="text/css" href="/datatable/datatables.min.css" />

<script type="text/javascript" src="/datatable/datatables.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />



<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> --}}
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>


<script>
    $(function () {
        $(".dbt").DataTable({
            "dom": 'Bfrtip',
            "buttons": [
                // 'copyHtml5',
                'excelHtml5',
                // 'pdfHtml5',
                // 'csvHtml5',
                
            ],
            "language": {
                "lengthMenu": "نمایش _MENU_ در هر صفحه",
                "zeroRecords": "چیزی پیدا نشد",
                "info": "نمایش صفحه _PAGE_ از _PAGES_",
                "infoEmpty": "موردی وجود ندارد",
                "infoFiltered": "(filtered from _MAX_ total records)",
                
                "decimal":        "",
        "emptyTable":     "اطلاعاتی در جدول وجود ندارد",
        
        "infoFiltered":   "(فیلتر شده از _MAX_ کل مجموعه)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "نمایش _MENU_ موارد",
        "loadingRecords": " در حال بارگزاری...",
        "processing":     "در حال پردازش...",
        "search":         "جستجو : ",
        "paginate": {
            "first":      "اولین صفحه",
            "last":       "آخرین صفحه",
            "next":       "صفحه بعدی",
            "previous":   "صفحه قبلی"
        },
        "aria": {
            "sortAscending":  ": مرتب سازی صعودی",
            "sortDescending": ": مرتب سازی نزولی"
        }
    
            }
        });
        
      });
    
</script>