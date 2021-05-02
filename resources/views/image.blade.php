@extends("master")
@section("content")

<div class="container">
    <br>
    <h3 class="text-center">Кино хайх <h3>
        <br>
        <form class="form-inline" action="search" method="post">
            {{@csrf_field()}}
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" name="name" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Хайх</button>
          </form>
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