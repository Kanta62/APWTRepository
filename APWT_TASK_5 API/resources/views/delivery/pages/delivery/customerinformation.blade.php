<link rel="stylesheet" href="/css/delivery/changepicture.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')
<form action="#" method="post">
{{csrf_field()}}

<div class="form-group">
    <label for="i_name">Name</label>
    <input type="text" class="form-control" id="i_name" readonly name="i_name" value="{{$entity['i_name']}}" placeholder="Enter Name">
    @error('i_name')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="i_phone">Phone</label>
    <input type="text" class="form-control" id="i_phone" readonly name="i_phone" value="{{$entity['i_phone']}}"  placeholder="Enter Phone">
    @error('i_phone')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>

  <div class="form-group">
    <label for="i_address">Address</label>
    <input type="text" class="form-control" id="i_address" readonly name="i_address" value="{{$entity['i_address']}}"  placeholder="Enter Address">
    @error('i_address')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>


 
  
</form>

@endsection