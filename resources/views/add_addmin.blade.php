@extends('master')
@section('content')
<div class="container">
<form action="addAdmin" method="POST">
  {{@csrf_field()}}
    <div class="form-group">
      <label>Нэр</label>
      <input type="text" class="form-control" placeholder="Нэр" name="name">
    </div>
    <div class="form-group">
        <label>Утасны дугаар</label>
        <input type="number" class="form-control" placeholder="утас" name="phone">
    </div>
    <div class="form-group">
        <label>Section id</label>
        <input type="number" class="form-control" placeholder="section_id" name="section_id">
    </div>
    <div class="form-group">
        <label>Хэрэглэгчийн нэр</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="form-group">
        <label>Нууц үг</label>
        <input type="password" class="form-control" placeholder="password" name="password">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Хаяг</label>
      <input type="text" class="form-control" placeholder="БГД 34 6а" name="address">
    </div>
  
    <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
  </form>
  @if(session('congratulation'))
  <h3 class="text-success">{{session('congratulation')}}</h3>
  @endif
</div>
@endsection