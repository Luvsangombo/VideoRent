@extends('master')
@section('content')
<div class="container">
<form action="video" method="POST">
  {{@csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlSelect1">Төрөл</label>
        <select class="form-control" name="type" value='1' >
          <option value='1'>BlueRay</option>
          <option value='3'>DVD</option>
          <option value='4'>CD</option>
        </select>
      </div>
    <div class="form-group">
      <label>Нэр</label>
      <input type="text" class="form-control" placeholder="Нэр" name="name">
    </div>
    <div class="form-group">
        <label>Зохиогч</label>
        <input type="text" class="form-control" placeholder="Зохиогч" name="director">
    </div>
    <div class="form-group">
        <label>Хугацаа</label>
        <input type="number" class="form-control" placeholder="Хугацаа" name="length">
    </div>
    <div class="form-group">
        <label>Үнэ</label>
        <input type="number" class="form-control" placeholder="үнэ" name="price">
    </div>
    <div class="form-group">
        <label>Зураг</label>
        <input type="text" class="form-control" placeholder="image url " name="image">
    </div>
    <div class="form-group">
        <label>Highlight</label>
        <input type="text" class="form-control" placeholder="highlight" name="highlight">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">танилцуулга</label>
      <textarea class="form-control" name='des' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  
    <button type="submit" class="btn btn-primary">Хадгалах</button>
  </form>
  @if(session('congratulation'))
  <h3 class="text-success">{{session('congratulation')}}</h3>
  @endif
</div>
@endsection