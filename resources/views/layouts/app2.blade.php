<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ESQUEL') }}</title>
    <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('clockman').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link href="https://bootswatch.com/4/simplex/bootstrap.css" rel="stylesheet">
	
</head>

 <style>
   #footer {
   position:fixed;
   text-align: center;
   bottom:0;
   width:100%;
   height:100px;   
} </style>

<!--<div id="footer"> Copyright &#x24B8; 2018 Esquel Malaysia Sdn. Bhd. All rights reserved.</div>-->
<body style="background-color:#FFFFFF;">

    <body onload="startTime()">

    

    <div id="app">
	
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ESQUEL') }} </a>
			
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> </ul>
	

					<!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::guard('admin')->check() || Auth::guard('manager')->check() || Auth::guard()->check())
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if (Auth::guard('admin')->check())
                                            Admin
                                        @elseif (Auth::guard('manager')->check())
                                            Manager
										@else
                                            {{ Auth::user()->name }} 
                                        @endif
                                        <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if (Auth::guard('admin')->check())
                                            <a class="dropdown-item" href="/admin/dashboard">Dashboard</a>
                                        @elseif   (Auth::guard('manager')->check())
                                            <a class="dropdown-item" href="/manager/dashboard">Dashboard</a> 
										@else   
                                            <a class="dropdown-item" href="/dashboard">Dashboard</a> 
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                            </li>
									
                        @else
                        <li class="nav-item dropdown">
                                <a id="linkDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Login') }}
                                    <span class="caret"></span>
                                </a>
<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                       <!--         <div class="dropdown-menu" aria-labelledby="linkDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        {{ __('User') }}
                                    </a>
										<a class="dropdown-item" href="{{ route('admin.login') }}">
											{{ __('Admin') }}
										</a>
											<a class="dropdown-item" href="{{ route('manager.login') }}">
												{{ __('Manager') }}
											</a>
                                </div>-->
                        </li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
				<div id="clockman"></div>
        <main class="py-4">
			@yield('content')
        </main>

	</div>
</body>
	
</html>
