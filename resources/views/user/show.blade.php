@extends('user.layouts.master')
@section('content')
<div class="container">
  <h2>User Information</h2>

  

@if(Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
  
    
    <div class="form-group">
      <label for="name">User Name:</label>
      <input type="text" class="form-control" name="name" id="name" readonly=""  value="{{$user_info->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email Name:</label>
      <input type="email" class="form-control" name="email" id="email" readonly="" value="{{$user_info->email}}">
    </div>

    <div class="form-group">
      <label for="name">Phone Number:</label>
      <input type="text" class="form-control" name="phone_number" id="phone_number" readonly=""  value="{{$user_info->phone_number}}">
    </div>
    <div class="form-group">
      <label for="name">Blood Group:</label>
      <input type="text" class="form-control" name="blood_group" id="blood_group" readonly=""  value="{{$user_info->bloodGroup->group_name}}">
    </div>
    

    
    
  
</div>

@endsection