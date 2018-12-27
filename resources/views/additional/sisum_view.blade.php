@extends('layouts.app')

@section('content')
@include('includes.navbar')
<html>
   <div class="container">
    <div class="row justify-content-center">
     
   <head>
      <title>SI SUMMARY</title>
   </head>
   
   <body>
   <?php
    $user = auth()->user();
    
    echo $user->position;
    ?>
   
   <div class="tab">
		<button class="tablinks"><a href="home">Home</a></button>
  		<button class="tablinks"><a href="attendancesum">Attendance</a></button>
  		<button class="tablinks"><a href="geisum">GEI Summary</a></button>
  		<button class="tablinks"><a href="sisum">SI Summary</a></button>
  
  	</div>
	
	</div>
      <table border = 5>
           <tr>
            <th>  Employer ID </th>
            <th>  Employer Name	</th>
            <th>  Operation Name </th>
			 <th> Code </th>
			 <th> Package </th>
			 <th> Incentive Amount </th>
			 <th> Amount Qualified</th>
			 <th> Status </th>
        </tr>
    </thead>
    </body>
	
         @foreach($sisum as $sisum)
          <tr>
			<td> {{$sisum->emp_id}} </td>
			<td> {{$sisum->emp_name}} </td>
			<td> {{$sisum->operation_name}} </td>
			<td> {{$sisum->code}} </td>
			<td> {{$sisum->package}} </td>
			<td> {{$sisum->inc_amt}} </td>
			<td> {{$sisum->amt_qualified}} </td>
			<td> {{$sisum->status}} </td>
			
		  
          </tr>
         @endforeach
      </table>
   
   </body>
  @endsection  
</html>