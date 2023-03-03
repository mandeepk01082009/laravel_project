<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<title>View</title>   
</head>
<body>
<div class="container-fluid bg-dark">
    <div class="container">
  <nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="#" style="color: white;">
    @if (session()->has('name'))
        {{session()->get('name')}}
    @else
        Guest
    @endif
  </a>
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
	<div class="container"> 
    <div class="row m-2">
      <form action=""  class="col-9 mt-2">
        <div class="form-group">
          <input type="search" name="search" class="form-control" value="{{$search}}" placeholder="Search by name or email">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{url('/customer')}}">
          <button type="button" class=" btn btn-primary">Reset</button>
        </a>
      </form>
      <div class="col-3">
        <a href="{{route('customer.create')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <a href="{{url('customer/trash')}}">
        <button class="btn btn-danger d-inline-block m-2 float-right">Go to trash</button>
        </a>
      </div>
    </div>  
   <table class="table" class="table">  
     <thead>
      <tr>
        <th>Sr.</th>
       <th>Name</th>
       <th>Email</th>
       <th>Gender</th>
       <th>DOB</th>
       <th>State</th>
       <th>Address</th>
       <th>Country</th>
       <th>Status</th>
       <th >Action</th>
       </tr>
     </thead>
     <tbody>
      @foreach ($customers as $customer)
       <tr>
         <td>{{$customer->customer_id}}</td>
         <td>{{$customer->name}}</td>
         <td>{{$customer->email}}</td>
         <td>
           @if($customer->gender == "M")
           Male
           @elseif($customer->gender == "F")
           Female
           @else
           Other
           @endif
         </td>
         <td>{{$customer->dob}}</td>
         <td>{{$customer->state}}</td>
         <td>{{$customer->address}}</td>
         <td>{{$customer->country}}</td>
         <td>
            @if($customer->status == 1)
            <a href="">
              <span class="badge badge-success">Active</span>
            </a>
           @else
           <a href="">
              <span class="badge badge-danger">Inactive</span>
            </a>
           @endif
         </td>
         <td>
          <a href="{{route('customer.delete', ['id' => $customer->customer_id])}}">
           <button class="btn btn-danger">Trash</button>
          </a>
          <a href="{{route('customer.edit', ['id' => $customer->customer_id])}}">
           <button class="btn btn-primary">Edit</button>
         </a>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table> 
   <div class="row">
     {{$customers->links()}}
   </div>
  </div>
</body>
</html>