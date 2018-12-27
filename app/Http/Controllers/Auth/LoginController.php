<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{	
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Show the application's login form.
     * 
     * NOTE: Please comment/remove showLoginForm() in vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php
     *
     * @return \Illuminate\Http\Response
     */
	
    public function showLoginForm()
    {
        return view('auth.login');
    }

    use AuthenticatesUsers;

	
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
 //  protected $redirectTo = '/dashboard';
	protected function authenticated($request, $user)
{

	 $user = auth()->user();
     $position=$user->position;
     Session::put('position', $position);


    if($user->position == 'A01') {     
        $this->redirectTo = ('/discrepancy');
    } 
	
	else //($user->position = 'supervisor')
	{
       $this->redirectTo = ('/dashboard');
    }
    return redirect()->intended($this->redirectPath());
}
	
   public function show(Request $request)
   {
	}
		
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {	
	
    $this->middleware('guest')->except('logout');
    }
}
