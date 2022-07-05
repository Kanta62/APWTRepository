@extends('/layouts.app1')
@section('content')
<link rel="stylesheet" href="./css/navbar.css">
<div class="margin">
<div class="design">
<legend>Customer Registration</legend>
<form action="{{route('Registration')}}" id="reg" method="post">
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
        <input type="text" name="name" value="{{old('name')}}" size="40"></br>
        <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="margin-left: 30px;color:#190033;font-size: 20px;">Id &nbsp;</span>
        <input type="text" name="CustId" value="{{old('CustId')}}" size="40"></br>
        <!-- @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
         --></br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Date of Birth &nbsp;</span>
        <input type="date" name="dob" value="{{old('dob')}}" size="40"></br>
        </br>
    </div>

    <div>
        <span style="color:#190033;font-size: 20px;">Gender &nbsp;&nbsp;&nbsp;&nbsp;</span>

                <input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="Female"> Female &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="Other"> Other &nbsp;&nbsp;&nbsp;</br>
</br> </div>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Username &nbsp;</span>
        <input type="text" name="username" value="{{old('username')}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    
    <div>
        <span style="color:#190033;font-size: 20px;">Password &nbsp;</span>
        <input type="password" name="password" value="{{old('password')}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    
    <div>
        <span style="color:#190033;font-size: 20px;">Confirm Password &nbsp;</span>
        <input type="password" name="confirmpass" value="{{old('confirmpass')}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>

    <div>
        <span style="color:#190033;font-size: 20px;">Email &nbsp;</span>
        <input type="text" name="email" value="{{old('email')}}" size="40"></br>
        <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
         </br>
    </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Phone &nbsp;</span>
        <input type="text" name="phone" value="{{old('phone')}}" size="40"></br>
        <!-- @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
      </br>
        </div>
    <div>
        <span style="color:#190033;font-size: 20px;">Address &nbsp;</span>
        <input type="text" name="address" value="{{old('address')}}" size="40"></br>
        <!-- @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
         -->
        </br>
        </div></div></br>
      <button name="submit" type="submit" id="submit" 
      style="padding: 5px; width: 28%; font-size: 15px; 
      background:#190033; color:aliceblue">Submit</button>
</form>
</div>
@endsection