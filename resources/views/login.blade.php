@extends('master')
@section('content')
<div class="container">
  @if(isset($msj))
  <h3 class="text-success">{{$msj}}</h3>
  @endif
  @if(session('success'))
  <h3 class="text-success">{{session('success')}}</h3>
  @endif


    <form method="post" action="login">
      {{@csrf_field()}}
        <div class="form-group">
          <label>Хэрэглэгчийн нэр</label>
          <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="sign-in">Нэвтрэх</button>
      </form>
      <a href="{{url('sign-up')}}"><button type="submit" class="btn btn-primary" name="sign-up">Бүртгүүлэх</button>
        @if(session('notFound'))
        <h3 class="text-danger">{{session('notFound')}}</h3>
        @endif
</div>
@endsection