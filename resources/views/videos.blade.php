@extends('master')
@section('content')
<br>
<div class='row'>
@foreach($videos as $video)
<div class="col-sm text-center">
    <a href="{{ url( 'view/'.$video->id )}}" >
    <h4>{{$video->name}}</h4>
    <img src="{{url($video->image_path)}}" width="400" height="400">
</div>
@endforeach
</div>

@endsection