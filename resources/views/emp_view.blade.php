@extends('layouts.app')

@section('content')
@include('includes.navbar')
<html>
   <div class="container">
    <div class="row justify-content-center">
     
   <head>
      <title>Attendance Summary</title>
   </head>
   
   <body>
   <?php
    $user = auth()->user();
    
    echo $user->position;
    ?>
      <table border = 5>
           <tr>
            <th> Line Number </th>
            <th> Employee ID	</th>
            <th> Supervisor Name </th>
			<th> Status </th>
        </tr>
    </thead>
    <tbody>
         @foreach($attendancesum as $attendancesum)
          <tr>
			<td> {{$attendancesum->line_num}} </td>
			<td> {{$attendancesum->sv_id}} </td>
			<td> {{$attendancesum->sv_name}} </td>
			<td> {{$attendancesum->status}} </td>
		  
          </tr>
         @endforeach
      </table>
   
   </body>
  @endsection  
</html>