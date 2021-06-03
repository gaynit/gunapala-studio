@extends('layouts.app')


@section('content')

     
      @include('admin.includes.errors')
      <div class="container">

<div class="panel panel-default">
      <div class="panel-heading">
      	Edit Blog Settings
      </div>

      <div class="panel-body">
      	<form action="/settingstore" method="POST">
      		
      		{{ csrf_field() }}

            <div class="form-group">
                  <label for="site_name">Site  Name</label>
                  <input type="text" name="name" value="{{ $name }}" placeholder="Enter Your Site Name" class="form-control">
            </div>
            <div class="form-group">
                  <label for="contact_number">Contact Number</label>
                  <input type="text" name="tel" value="{{ $tel }}" placeholder="Enter Your Contact Number" class="form-control">
            </div>
            <div class="form-group">
                  <label for="contact_email">Site Email</label>
                  <input type="email" name="email" value="{{ $email }}" placeholder="Enter Your Email" class="form-control">
            </div> 
            <div class="form-group">
            	<label for="address">Address</label>
            	<input type="text" name="address" value="{{ $address }}" placeholder="Enter Your Address" class="form-control">
            </div>

            <div class="from-group">
            	 <div class="text-right">
            	 	<button class="btn btn-success" type="submit">Blog Settings setup</button>
            	 </div>
            </div>



      	</form>
      </div>

  </div>
</div>
@stop