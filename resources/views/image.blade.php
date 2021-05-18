@extends("master")
@section("content")

<div class="container">
    <br>
    <h3 class="text-center">Кино хайх <h3>
        <br>
        <form class="form-inline" action="search" method="post">
            {{@csrf_field()}}
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" name="name" placeholder="хайх">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Хайх</button>
          </form>
          <h3 class='text-center'> Хамгийн их үзэлттэй кинонууд </h3>
          <div class="row">
              
            @foreach($videos as $video)
            <a href="view/{{$video->id}}">
            <div class="col-sm">
                <br>
            <h2 class="text-center">{{ $video->name}}<h2>
                <br>
            <img src="{{url($video->image_path)}}" width="350" height="350">
            </div>
            </a>
            @endforeach
        </div>
        <br>
        <h3 class='text-center'>Киноны төрлүүд </h3>
<div class="row">
@foreach($posts as $post)
<a href="videos/{{$post->id}}">
<div class="col-sm">
    <br>
<h2 class="text-center">{{ $post->name}}<h2>
    <br>
<img src="{{url('storage/category/'.$post->imagePath) }}" width="350" height="600">
</div>
@endforeach
</div>
</div>
@endsection