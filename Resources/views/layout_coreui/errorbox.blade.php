<div class="col-md-12">
    @if(isset($errors->toArray()[0]))
    <script>
        $(document).ready(function () {
                Swal.fire({

          type: 'success',
          title: '{{trans("theme::routing.done")}}',
          confirmButtonText:
    '<i class="fal fa-check"></i>',
    confirmButtonColor: '#3085d6',
          timer: 150000
        })
    })
    </script>
    @elseif(count($errors->toArray())>0)
    <script>
        $(document).ready(function () {
                Swal.fire({

              type: 'error',
              title: 'مشکلاتی در فرم ارسالی وجود دارد',
              confirmButtonText:
    'باشه',
    confirmButtonColor: '#3085d6',
              timer: 150000
            })
        });
    </script>
    @endif
    @foreach($errors->all() as $error)
    <div class="alert @if(isset($errors->toArray()[0])) alert-success @else alert-danger @endif">
        {!!$error!!}
        <a class="close" data-dismiss="alert" href="#">
            ×
        </a>
    </div>
    @endforeach
</div>
