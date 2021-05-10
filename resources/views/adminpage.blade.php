@extends('admin_master')
@section('name')
<h3> {{ session( 'admin_name' )}} </h3>
<h4> Салбар: {{ session( 'admin_section' )}} </h4>
@endsection
@section('content')
    <h1> Hello </h1>
@endsection