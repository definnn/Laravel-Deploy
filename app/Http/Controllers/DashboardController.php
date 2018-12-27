<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//  public function index(){
 //   $users = DB::select('select * from users');
//    return view('user',['users'=>$users]);
// }
   
   public function index(){
     $user = auth()->user();
     $position=$user->position;
     return view('user');

   }
   
   
   
}




