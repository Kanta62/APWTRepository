@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="./css/navbar.css">
<div class="contact">  
<div class="contain">  
  <form action="{{route('Contact')}}" id="contact" method="post">
  {{csrf_field()}}
    <h3>Contact Form</h3>
    <h4>Contact us for any query</h4>
    <fieldset>
      <input placeholder="Your name" name="name" class="text" tabindex="1">
    </fieldset>
    @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset>
      <input placeholder="Your Email Address" name="email" class="email" tabindex="2">
    </fieldset>
    @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="phone" class="tel" tabindex="3">
    </fieldset>
    @error('phone')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset>
      <textarea placeholder="Type your message here...." name="msg"  tabindex="5"></textarea>
    </fieldset>
    @error('msg')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <fieldset>
      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
@endsection