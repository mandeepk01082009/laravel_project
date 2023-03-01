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
<body>
	<div class="container-fluid bg-dark">
    <div class="container">
	<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="#" style="color: white;">WsCube Tech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}" style="color:white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}" style="color:white">Register</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/customer')}}" style="color:white">Customer</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
	<form action="{{url('/')}}/register" method="post">
		@csrf	
<div class="container">
<div class="row">
	<div class="col-sm-12">
    <h1 class="text-center">Registration</h1>
<x-input type="text" name="name" label="Please enter your name"/>
<x-input type="email" name="email" label="Please enter your email"/>
<x-input type="password" name="password" label="Please enter your password"/>
<x-input type="password" name="password_confirm" label="Please Confirm your password"/>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
</body>
</html>