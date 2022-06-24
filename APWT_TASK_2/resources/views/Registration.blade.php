@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="./css/navbar.css">
<div class="margin">
<div class="design">
<legend>Customer Registration</legend>
<form action="{{route('Registration')}}" id="reg" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</br>
    <div>
        <span>Name &nbsp;</span>
        <input type="text" name="name" value="{{old('name')}}" size="40"></br>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </br></br></div>
    <div>
        <span style="margin-left: 30px;">Id &nbsp;</span>
        <input type="text" name="id" value="{{old('id')}}" size="40"></br>
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </br></br></div>
    <div>
        <span>Date of Birth &nbsp;</span>
        <input type="date" name="dob" value="{{old('dob')}}" size="40"></br>
        </br></br></div>
    <div>
        <span>Email &nbsp;</span>
        <input type="text" name="email" value="{{old('email')}}" size="40"></br>
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </br></br></div>
    <div>
        <span>Phone &nbsp;</span>
        <input type="text" name="phone" value="{{old('phone')}}" size="40"></br>
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </br></br>
        </div>
    <div>
        <span>Address &nbsp;</span>
        <input type="text" name="address" value="{{old('address')}}" size="40"></br>
        @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </br></br>
        </div></div>
      <button name="submit" type="submit" id="submit" data-submit="...Sending">Submit</button>
</form>
</div>
@endsection