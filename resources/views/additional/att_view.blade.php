@extends('layouts.app')

@section('content')
@include('includes.navbar')
<html>
   <div class="container">
    <div class="row justify-content-center">
     
   <head>
      <title>View Works Records</title>
   </head>
   
   <body>
			<?php
				$user = auth()->user();
				echo "<p style='color:black; font-size:45px'>".$user->position."</p>";
			?>
   <br></br>

   	</div>

	 <div class="tab">
  		 <a class="btn btn-primary btn-lg"  href="discrepancy"> Discrepancy</a>
		 <a class="btn btn-success btn-lg" href="attendance"> Attendance</a>
		 <a class="btn btn-warning btn-lg" href="leave"> Leave</a>
  <br></br>
  <br></br>

 
				</div>

	   <table class="table table-bordered">

	     <tr class="table-active">
			<th>Line Number</th>
		    <th>Supervisor ID</th>
			<th>Supervisor Name</th>
			<th>Status</th>
		</th>
    </tr>
	    <div class="tab">
       
    </thead>
    <tbody>
         @foreach ($attendancesum as $attendancesum)
         <tr>
            <td>{{	$attendancesum->line_num }}</td>
            <td>{{ 	$attendancesum->sv_id}}</td>
			<td>{{ 	$attendancesum->sv_name}}</td>
			<td>{{ 	$attendancesum->status}}</td>
			
			
			
			</tr>
         @endforeach
		 </div>
      </table>
   
   </body>
  @endsection  
</html>