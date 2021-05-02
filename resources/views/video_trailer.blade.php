@extends('master')
@section('content')
<div class="container">
<br>
<h4>{{$video->name}}</h4>
<br>
<div class="row">
    <div class="col-sm">
<iframe width="560" height="315" src="{{$video->highlight_path}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-sm">
<h4>Танилцуулга: {{$video->description}}</h4>
<br>
<h4>Хугацаа: {{$video->length}} min </h4>
<h4>Үнэ: {{$video->price}} төгрөг </h4>
<br>
<form action="{{route('rent')}}" method="post">
    @csrf
    <input type='hidden' name="video_id" value="{{$video->id}}">
    <input type='hidden' name="price" value="{{$video->price}}">
    <input type='hidden' name="director" value="{{$video->director}}">
    <button class="btn btn-secondary" name="rent">Захиалах</button>
</form>

</div>
</div>
</div>
@endsection