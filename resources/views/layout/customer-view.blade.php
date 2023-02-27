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
<body >
	<div class="container">
   <table class="table">
     <thead>
      <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Gender</th>
       <th>DOB</th>
       <th>State</th>
       <th>Country</th>
       <th>Status</th>
       </tr>
     </thead>
     <tbody>
      @foreach ($customers as $customer)
       <tr>
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
         <td>{{$customer->country}}</td>
         <td>{{$customer->status}}</td>
       </tr>
       @endforeach
     </tbody>
   </table> 
  </div>
</body>
</html>