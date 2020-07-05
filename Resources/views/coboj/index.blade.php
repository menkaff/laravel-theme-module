@extends('theme::'.env('ADMIN_THEME').'.master')
@section('title') {{ $title=trans('coboj::messages.fill') }}
@stop
@section('content')


<div class="container clearfix">


    @foreach ($coboj_types as $type)
    <a href="/coboj/create?type_id={{$type->id}}" class="btn btn-info btn-lg">{{$type->name}}</a>
    @endforeach
    <hr />
    <h3>
        فرم های تسهیلات درخواست داده شده
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>
                    نوع تسهیلات
                </th>
                <th>تاریخ درخواست</th>
                <th>وضعیت</th>
                <th>دانلود</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cobojs as $coboj)
            <tr>
                <td>
                    {{$coboj->type->name}}
                </td>
                <td>
                    {{jDate::forge($coboj-> created_at)->format('%d %B, %Y')}}
                </td>
                <td>
                    {{$coboj->status_text()}}
                </td>
                <td>
                    <a href="/coboj/download?id={{$coboj->id}}" class="btn btn-success"> دانلود </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>



@stop

@section('scripts')
<script src="/modules/coboj/coboj_field_show.js"></script>
@endsection