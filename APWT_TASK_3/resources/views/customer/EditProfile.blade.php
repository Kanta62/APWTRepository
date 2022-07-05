@extends('/layouts.app2')
@section('content')
<link rel="stylesheet" href="./css/navbar.css">
<div style="margin: 100px;margin-left: 450px;font-size: 20px;">
<legend style="font-size: 40px; margin-left: 130px;color:indigo;">Edit Profile</legend>
<form action="{{route('EditProfile')}}" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

<div class="pad">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</br></div>

    <div>
        <span style="color:#190033;font-size: 20px;">Name &nbsp;</span>
        <input type="text" name="name" value="{{$customer->name}}" size="40"></br>
        <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="margin-left: 30px;color:#190033;font-size: 20px;">Id &nbsp;</span>
        <input type="text" name="CustId" value="{{$customer->CustId}}" size="40"></br>
        <!-- @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Date of Birth &nbsp;</span>
        <input type="date" name="dob" value="{{$customer->dob}}" size="40"></br>
        </br>
    </div>

    <div>
        <span style="color:#190033;font-size: 20px;">Username &nbsp;</span>
        <input type="text" name="username" value="{{$customer->username}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    
    <div>
        <span style="color:#190033;font-size: 20px;">Email &nbsp;</span>
        <input type="text" name="email" value="{{$customer->email}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Phone &nbsp;</span>
        <input type="text" name="phone" value="{{$customer->phone}}" size="40"></br>
        <!-- @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
      </br>
        </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Address &nbsp;</span>
        <input type="text" name="address" value="{{$customer->address}}" size="40"></br>
        <!-- @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
        </br>
    </div></br>
      <button name="submit" type="submit" id="submit" 
      style="padding: 5px; width: 55%; font-size: 15px; 
      background:#190033; color:aliceblue">Add</button>
</form>
</div>
@endsection