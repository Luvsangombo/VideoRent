@extends('admin_master')
@section('name')
<h3> {{ session( 'admin_name' )}} </h3>
<h4> Салбар: {{ session( 'admin_section' )}} </h4>
@endsection
@section('content')
<br>
<h2 class="text-center">Бүх киноны жагсаалт</h2>
<br>
    @if($video_list)
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Нэр</th>
            <th scope="col">Үнэ</th>
            <th scope="col">Зохиогч</th>
            <th scope="col">Хугацаа</th>
            <th scope="col">Захиалагдсан тоо </th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($video_list as $video)
          <tr>
            <th scope="row">{{$video->name}}</th>
            <td>{{$video->price}}</td>
            <td>{{$video->director}}</td>
            <td>{{$video->length}}</td>
            <td>{{$video->rented_times}}</td>
            <td><a href="adminvideos/{{$video->id}}">Устгах</a><td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @endif
@endsection