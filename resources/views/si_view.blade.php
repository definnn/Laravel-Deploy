@extends('layouts.app2')

@section('content')
@include('includes.navbar')
<html>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:30px; font-family:Georgia;">SI of Operator</div>
                <div class="panel-body">
   <head>
      <title>Skill Incentive </title>
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
			<th>Employee ID</th>
		    <th>Employee Name</th>
			<th>Operation Name</th>
			<th>Code</th>
			<th>Package</th>
			<th>Incentive Amount</th>
			<th>Amount Qualified</th>
		 </th>
    </tr>
	    <div class="tab">
       
<?php
   $user = auth()->user();
    $position=$user->position;
?>

@if ($position == 'manager')
         @foreach ($si as $si)
         <tr>
            <td>{{$si->emp_id}}</td>
            <td>{{$si->emp_name}}</td>
			<td>{{$si->operation_name}}</td>
			<td>{{$si->code}}</td>
			<td>{{$si->package}}</td>
			<td>{{$si->inc_amt}}</td>
			<td>{{$si->amt_qualified}}</td>
		
         </tr>
         @endforeach
      </table>
	  <form method="post" action="{action('DiscrepancyViewController@edit'}">
				<button class="btn btn-danger btn-lg" type="submit" style="position: fixed; right: 500;">Submit</button>
		</form>
@else
	@foreach ($si as $si)
         <tr>
            <td>{{$si->emp_id}}</td>
            <td>{{$si->emp_name}}</td>
			<td>{{$si->operation_name}}</td>
			<td>{{$si->code}}</td>
			<td>{{$si->package}}</td>
			<td>{{$si->inc_amt}}</td>
			<td>{{$si->amt_qualified}}</td>
		
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