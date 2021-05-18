@php
use Carbon\Carbon;
$today_date = Carbon::now();
@endphp
@extends('admin_master')
@section('name')
<h3> {{ session( 'admin_name' )}} </h3>
<h4> Салбар: {{ session( 'admin_section' )}} </h4>
@endsection
@section('content')
<br>
<h2 class="text-center">Захиалгын жагсаалт</h2>
<br>
    @if($rents_list)
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Утас</th>
            <th scope="col">Үнэ</th>
            <th scope="col">Захиалсан огноо</th>
            <th scope="col">Дуусах огноо </th>
            <th scope="col">Киноны дугаар</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($rents_list as $video)
            @php
              if($today_date>$video->endDate)
                $diff=$today_date->diffInDays($video->endDate);
            @endphp
          <tr>
            <th scope="row">{{$video->other}}</th>
            @if($video->endDate<$today_date)
              <td class="text-danger">{{$video->price*$diff/10+$video->price}}</td>
             @else  <td>{{$video->price}}</td>
             @endif
            <td>{{$video->rentedDate}}</td>
            @if($video->endDate<$today_date)
            <td class="text-danger">{{$video->endDate}}</td>
           @else  <td>{{$video->endDate}}</td>
           @endif
          
            <td>{{$video->video_id}}</td>
            <td><a href="rents/{{$video->id}}">Устгах</a><td>
            <td><a href="rented/{{$video->id}}">Сунгах</a><td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @endif
@endsection