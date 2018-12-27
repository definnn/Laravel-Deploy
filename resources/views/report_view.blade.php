@extends('layouts.app2')

@section('content')
@include('includes.navbar')
<html>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:30px; font-family:Georgia;">Report Summary</div>
                <div class="panel-body">
   <head>
      <title>Report Summary</title>
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
 
		</div>
				</div>

	   <table class="table table-bordered">

	     <tr class="table-active">
			<th>Line Number</th>
		    <th>Operator ID</th>
			<th>Supervisor Name</th>
			<th>Current Status</th>
		 </th>
    </tr>
	    <div class="tab">

<?php
   $user = auth()->user();
    $position=$user->position;
?>

@if ($position == 'manager')
         @foreach($notification as $notification)
          <tr>
			<td> {{$notification->line_num}} </td>
			<td> {{$notification->op_id}} </td>
			<td> {{$notification->sv_name}} </td>
			<td> {{$notification->cur_status}} </td>
		  
          </tr>
         @endforeach
      </table>
   
		<form method="post" action="{action('DiscrepancyViewController@edit'}">
				<button class="btn btn-danger btn-lg" type="submit" style="position: fixed; right: 500;">Submit</button>
		</form>

@else
	@foreach($notification as $notification)
          <tr>
			<td> {{$notification->line_num}} </td>
			<td> {{$notification->op_id}} </td>
			<td> {{$notification->sv_name}} </td>
			<td> {{$notification->cur_status}} </td>
		  
          </tr>
         @endforeach
		@endif
      </table>
   </body>
   
 </div>
            </div>
        </div>
    </div>
</div>
   @endsection 

</html>