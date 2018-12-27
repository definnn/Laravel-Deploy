@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="row">
	<div class="col-md-12">
		<br />
  <h3>Edit Record</h3>
		<br />
  @if(count($errors) > 0)

		<div class="alert alert-danger">
			 <ul>
			 @foreach($errors->all() as $error)
			  <li>{{$error}}</li>
			 @endforeach
			 </ul>
  @endif

		<form method="post" action="{{action('DiscrepancyViewController@update', $id)}}">
		   {{csrf_field()}}
		   <input type="hidden" name="_method" value="PATCH" />
		   <div class="form-group">
		   <label for="time_in">TIME IN</label>
			<input type="text" name="time_in" class="form-control" value="{{$attendances-> time_in}}" placeholder="Clocking time in />
		   </div>
		   <div class="form-group">
			<input type="submit" class="btn btn-primary" value="Edit" />
		   </div>
		</form>
  
		</div>
	</div>

@endsection