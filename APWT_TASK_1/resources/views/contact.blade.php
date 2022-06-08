@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="./css/style.css">
<table>
<th class="top">
<tr>
<h1>
<span style="font-size: 50; margin-left: 20px ;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:palevioletred;"> 
GEM</span><span style="color:dimgray;">beauty</span> Cosmetics</h1><hr>

<img src="./Sources/Map.png" alt="Map" style="width: 1410px;; height: 300px; object-position: right; object-fit: none;">
</br><hr>
<form style="margin-left: 20px;">
  <h2>CONTACT US</h2>
  <p>Name:</p> <input type="text" name="name" placeholder="Write your name here..">
  <p>Email:</p><input type="text" name="email" placeholder="Let us know how to contact you back..">
  <p>Message:</p><input type="text" name="msg" placeholder="What would you like to tell us.."></br>
  <br><input class="button" type="submit" name="submit" value="Send">
  
</form>
</tr>
</th>

</table>

@endsection