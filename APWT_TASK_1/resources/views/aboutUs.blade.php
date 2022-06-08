@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/style.css">

<div class="about-section">
  <h1>About Us</h1>
  <p>"As a professional manufacturing leader in the cosmetic industry our services include bespoke products, private label, personalization, OEM and ODM. 
    GEM Cosmetics create beauty products in a highly professional way engaging businesses for overseas retailers, small brands and enterprises."</p>
  <h2 style="font-size: 35; color:darkorange;">"Everything we do, we do it for you." </h2>
</div>

<h2 style="text-align:center">Categories</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./Sources/item1.png" alt="item 1" style="width:100%">
      <div class="container">
        <h2>Foundation</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./Sources/item2.png" alt="item 2" style="width:100%">
      <div class="container">
        <h2>Eyeshadow Palette</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./Sources/item3.png" alt="item 3" style="width:100%">
      <div class="container">
        <h2>Mascara</h2> 
      </div>
    </div>
  </div>
</div> 

@endsection