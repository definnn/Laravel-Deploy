@extends('layouts.app')

@section('content')
@include('includes.navbar')
<html>
   <div class="container">
    <div class="row justify-content-center">
     
   <head>
      <title>GEI SUMMARY</title>
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
            <th> Supervisor ID </th>
            <th>	Output	</th>
            <th> Total Working Hour </th>
			 <th> FPY </th>
			 <th> Efficiency </th>
			 <th> Expected Amount </th>
			 <th> Accumulated Amount </th>
        </tr>
    </thead>
    <tbody>
         @foreach($geisum as $geisum)
          <tr>
			<td> {{$geisum->sv_id}} </td>
			<td> {{$geisum->output}} </td>
			<td> {{$geisum->tot_workhr}} </td>
			<td> {{$geisum->fpy}} </td>
			<td> {{$geisum->eff}} </td>
			<td> {{$geisum->exp_amt}} </td>
			<td> {{$geisum->acc_amt}} </td>
			
		  
          </tr>
         @endforeach
      </table>
   
   </body>
  @endsection  
</html>