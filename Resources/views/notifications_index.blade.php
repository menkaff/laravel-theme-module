@extends('theme::'.env('ADMIN_THEME').'.master')
@section('content')
<table class="table">
    <tr>
        <th> نوتیفیکیشن </th>
        <th> تاریخ </th>
    </tr>
    @foreach ($notifications as $notification)
    <tr>
        <td>
            @if($notification->is_seen)
            <i class="fa fa-circle text-success"></i>
            @else
            <i class="fa fa-circle text-danger"></i>
            @endif 
            {{$notification->content}} </h4>
        </td>
        <td>
            <i class="fa fa-calendar text-success"></i> {{jDate::forge($notification->created_at)->format('%Y %B %d')}}
        </td>
    </tr>
    @endforeach
</table>
@endsection