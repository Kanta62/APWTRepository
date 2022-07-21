<link rel="stylesheet" href="/css/delivery/homepage.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')
<body>

<table>

</table>


<div class="counter">
  <h1>Delivered Products:   <h2 style="font-size:77px;">
@php
  echo sizeof($data);
@endphp
</h2></h1>

</div>
<div class="card">
  <img src="{{URL::asset('/Sources/deliveryman.jpg')}}" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b> 
      @if(Session::has('delivery.name'))
     {{Session::get('delivery.name')}}
     @endif</b></h4> 
    <p>Sanofy: Delivery Man</p> 
  </div>
  </div>

</body>

@endsection