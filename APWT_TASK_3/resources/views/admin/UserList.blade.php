@extends('layouts.app3')
@section('content')
<link rel="stylesheet" href="./css/navbar.css">
<div class="container" style="margin-top: 80px;">
  <h2 class="text-center" style="color: #190033;">VIEW USER RECORDS</h2><hr>
           
  <table class="table table-bordered table-striped">
    <thead style="background: darkslateblue;color:azure;">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Customer Id</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($customers as $customer)
      <tr>
      <td>{{ $customer->id }}</td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->CustId }}</td>
      <td>{{ $customer->dob }}</td>
      <td>{{ $customer->gender }}</td>
      <td>{{ $customer->username }}</td>
      <td>{{ $customer->password }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->phone }}</td>
      <td>{{ $customer->address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection