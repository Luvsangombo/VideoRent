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
          </tr>
        </thead>
        <tbody>
            @foreach($rents_list as $video)
          <tr>
            <th scope="row">{{$video->other}}</th>
            <td>{{$video->price}}</td>
            <td>{{$video->rentedDate}}</td>
            <td>{{$video->endDate}}</td>
            <td>{{$video->video_id}}</td>
            <td><a href="rents/{{$video->id}}">Устгах</a><td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @endif
@endsection