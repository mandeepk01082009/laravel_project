<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<title>Form</title>
</head>
<body >
	
<div class="container">
<div class="row mt-2">
<div class="col-md-9 col-md-offset-3" >
	<h4 class="text-center">ADD NEW RECORD | Laravel CRUD</h4>
	<hr>
	<form action="{{url('/')}}/customer" method="post">
    <!-- <form action="store" method="post"> -->
		@csrf	
<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
 </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name= "password"id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control" name="country" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" class="form-control" name="state" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  </div>
  <div class="form-group">
  	<label for="exampleFormControlTextarea1">Gender</label>
  	<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">F</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="O">
  <label class="form-check-label" for="inlineRadio2">O</label>
</div>
  </div>
  <div class="form-group">
  	<label for="exampleFormControlTextarea1">Date of Birth</label>
  	<input type="date" name="dob" class="form-control">
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>