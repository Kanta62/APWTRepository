@extends('/layouts.app2')
@section('content')
<div style="margin-top: 50px;margin-left: 1350px;">
    @if(Session::get('customer'))  
        <h3>lOGGED IN AS <a class="btn btn-danger" href="{{route('EditProfile')}}">{{Session::get('customer')}}</a></h3>
    @endif 
</div>
<div style="margin-top: 90px;margin-left: 400px;margin-right: 400px;">
<h1 style="font-size: 35px; color:#190033;text-align:center;font-weight:bold;"> MY PROFILE</h1><hr>
<table class="table table-border" style="font-size: 25px;">
    <tr>
        <th>Name</th>
        <td>{{$customer->name}}</td>
    </tr>
    <tr>
    <th>CustId</th>
        <td>{{$customer->CustId}}</td>
    </tr>
    <tr>
    <th>DOB</th>
        <td>{{$customer->dob}}</td>
    </tr>
    <tr>
    <th>Username</th>
        <td>{{$customer->username}}</td>
    </tr>
    <tr>
    <th>Email</th>
        <td>{{$customer->email}}</td>
    </tr>
    <tr>
    <th>Phone</th>
        <td>{{$customer->phone}}</td>
    </tr>
    <tr>
    <th>Address</th>
        <td>{{$customer->address}}</td>
    </tr>
</table>
<button name="submit" type="submit" id="submit" 
      style="padding: 5px; width: 100%; font-size: 15px; 
      background:#190033; color:aliceblue;" href="{{route('EditProfile')}}">EDIT</button>
</div>
@endsection
