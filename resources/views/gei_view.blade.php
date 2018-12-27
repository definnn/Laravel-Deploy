@extends('layouts.app2')

@section('content')
@include('includes.navbar')
<html>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:30px; font-family:Georgia;">GEI of Production Line Outcome</div>
                <div class="panel-body">
   <head>
      <title>View Employee Incentive </title>
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

	   <table class="table table-bordered" class="center">

	     <tr class="table-active" >
			<th>Date</th>
			<th>Line Number</th>
			<th>Output (%)</th>
		    <th>Total Working Hour (Hours)</th>
			<th>First Pass Yield(FPY%)</th>
			<th>Expected GEI</th>
			<th>Accumulated GEI</th>
		 </th>
		</tr>
	    <div class="tab">
 
<?php
   $user = auth()->user();
    $position=$user->position;
?>

@if ($position == 'manager') 
         @foreach ($gei as $gei)
         <tr>
			<td width="400">{{$gei->date}}</td>
			<td>{{$gei->line_num}}</td>
            <td>{{$gei->output}}</td>
            <td>{{$gei->tot_workhr}}</td>
			<td>{{$gei->fpy}}</td>
			<td>{{$gei->exp_gei}}</td>
			<td>{{$gei->acc_gei}}</td>
         </tr>
         @endforeach
      </table>
	  
		<form method="post" action="{action('DiscrepancyViewController@edit'}">
			<button class="btn btn-danger btn-lg" type="submit" style="position: fixed; right: 500;">Submit</button>
		</form>
@else
	@foreach ($gei as $gei)
         <tr>
			<td width="400">{{$gei->date}}</td>
			<td>{{$gei->line_num}}</td>
            <td>{{$gei->output}}</td>
            <td>{{$gei->tot_workhr}}</td>
			<td>{{$gei->fpy}}</td>
			<td>{{$gei->exp_gei}}</td>
			<td>{{$gei->acc_gei}}</td>
         </tr>
         @endforeach
		@endif
      </table>

     </div>
   </body>
                </div>
            </div>
        </div>
    </div>
</div>
   @endsection 

</html>