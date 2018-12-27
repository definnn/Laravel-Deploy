@extends('layouts.app')

@section('content')
@include('includes.navbar')
<html>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size:27pt; font-family:cooper black; text-align:left;">HELLO

				<?php
					$user = auth()->user();
					//echo $user->position;
					echo $user->name;
				?>
				
				</div>
				
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif

		<br></br>
		<br></br>
		
			<h3 style="font-size:24pt; font-family:comic sans MS; text-align:center; color:darkslategray;"> <b>INCENTIVE MANAGEMENT WEB PAGE</b> </h3>
			<p style="font-size:14pt; font-family:arial; text-align:center; color:gray;">~You do your work, everyone get their pay~</p>


            </div>
        </div>
    </div>
</div>
@endsection
</html>
