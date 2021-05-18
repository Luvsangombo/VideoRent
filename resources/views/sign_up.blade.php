@extends('master')
@section('content')
<div class="container">
<form action="sign-up" method="POST">
  {{@csrf_field()}}
  <div class="form-group">
    <label>Овог</label>
    <input type="text" class="form-control" placeholder="Овог" name="surname">
</div>
    <div class="form-group">
      <label>Нэр</label>
      <input type="text" class="form-control" placeholder="Нэр" name="name">
    </div>
  
    <div class="form-group">
        <label>Утасны дугаар</label>
        <input type="number" class="form-control" placeholder="утас" name="phone">
    </div>
    <div class="form-group">
        <label>E-mail хаяг</label>
        <input type="text" class="form-control" placeholder="е-майл" name="email">
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
      <label for="exampleFormControlTextarea1">Төрсөн огноо</label>
      <input type="text" class="form-control" placeholder="2000-06-18" name="date">
    </div>
  
    <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
  </form>
  @if(session('congratulation'))
  <h3 class="text-success">{{session('congratulation')}}</h3>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
@endsection