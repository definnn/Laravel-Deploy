
@extends('layouts.app2')

@section('content')
@include('includes.navbar')
<html>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:30px; font-family:Georgia;">Operator Attendance</div>
                <div class="panel-body">
   <head>
      <title>View Employee Attendance </title>
  </head>

  <body>
	<style>
			tr {
			  padding: 12px;
			  text-align: center;
			  height: 50px
			   }
			   
			 table{
				 margin: 0px auto;
				 margin-top: 7%;
			 }
	</style>		 
<br></br>
   	</div>

	 <div class="tab">
  		 <a class="btn btn-primary btn-lg"  href="discrepancy"> Discrepancy</a>
		 <a class="btn btn-success btn-lg" href="attendance"> Attendance</a>
		 <a class="btn btn-warning btn-lg" href="leave"> Leave</a>
  <br></br>
 
				</div>

	   <table class="table table-bordered">

	     <tr class="table-active">
			<th>Line Number</th>
		    <th>Operator ID</th>
			<th>Operator Name</th>
			<th>Time IN</th>
			<th>Task</th>
		</th>
    </tr>
	    <div class="tab">
       
    </thead>
    <tbody>
       
         @foreach ($attendances as $attendances)
         <tr>
            <td>{{$attendances -> line_num}}</td>
            <td>{{$attendances-> op_id}}</td>
			<td>{{$attendances-> op_name}}</td>
			<td>{{$attendances-> time_in}}</td>
			
	   <td><a href="{{action('DiscrepancyViewController@edit', $attendances-> time_in)}}" class="btn btn-warning">Edit</a></td>
	   
	     
         @endforeach

      </table>
     
   </body>
                </div>
         </div>
            </div>
        </div>
    </div>
</div>
   @endsection 

</html>