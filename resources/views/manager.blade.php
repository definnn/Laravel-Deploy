@extends('layouts.app')

@section('content')
@include('includes.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager Dashboard</div>
				
				

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
						<?php
							$user = auth()->user();
							echo $user->position;
							$value = Session::get('position');
							echo $value;
						?>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
