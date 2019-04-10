 <link href="style.css" rel="stylesheet" type="type/css" href ="./css/euis.css">
<link rel="stylesheet" type="type/css" href ="{{asset('/css/app.cass') }}">
<link rel="stylesheet" type="type/css" href ="{{asset('/css/app.cass') }}">
<link rel="stylesheet" type="type/css" href ="./css/app.css">
 
<div class="a">
@extends('layout.layout') 
 
@section('title',$title) 
 
@section('sidebar') 
@parent
 <li>NAMA MAHASISWA</li> 
 @endsection 
 
@section('content') 
<p>{{ $konten }}</p> 
@stop 
</div>