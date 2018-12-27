<?php

namespace App\Http\Middleware;

use Closure;

class CheckPosition
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	 if ( ($request->position == admin() ) {
     // an admin
         $this->redirectTo = '/admin';
		 
     } elseif {( ($request->$position == manager() )
     // it's a manager
         $this->redirectTo = '/manager/home';
     }
	 
	 else {
     // it's a user
         $this->redirectTo = '/dashboard';
     }
        return $next($request);
    }
}
