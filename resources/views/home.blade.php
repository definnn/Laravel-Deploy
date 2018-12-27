@extends('layouts.app')

@section('content')
@include('includes.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

				
				
				
				 <body>


	<div class="tab">
		
		<button class="tablinks"><a href="home">Home</a></button>
  		<button class="tablinks"><a href="attendancesum">Attendance</a></button>
  		<button class="tablinks"><a href="geisum">GEI Summary</a></button>
  		<button class="tablinks"><a href="sisum">SI Summary</a></button>
  
  	</div>


	   	</div>

	
     
   </body>
				
				
		
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<table border = 3>
    INCENTIVE MANAGEMENT WEB PAGE
	~You do your work, everyone get their pay~
</table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
