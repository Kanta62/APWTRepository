@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/style.css">
<img src="./Sources/makeup1.webp" alt="1" height="400px" width="1410px">

<h1><a style="color:black; margin-left:20px;">Welcome to our page- 
<span style="font-size: 60;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:palevioletred;"> 
GEM</span><span style="color:dimgray;"> beauty</span></a></h1><hr>


<p style="font-size: 30; font: weight 100px;; color:maroon; margin-left: 20px;"> {{$name}}</p>
<hr>
<h2 style="font-weight: bold;margin-left: 20px;">Services</h2>

@foreach($names as $n)

<li style="margin-left: 20px;">{{$n}}</li>

@endforeach


@endsection