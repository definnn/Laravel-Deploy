<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportViewController extends Controller
{
  
  //  public function __construct()
 //   {
  //      $this->middleware('auth');
  //  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
 
   
   public function index(){
	  
	    $user = auth()->user();
		$position=$user->position;
	
		$data = DB::select('select position from users');
		 $notification = DB::table('notification')
		->where('line_num', '=', $position )
		->get();
		
		 if($user->position != 'manager'){
		 $data = DB::select('select position from users');
		 $notification = DB::table('notification')
		->where('line_num', '=', $position )
		->where('position', '=', "supervisor")
	 ->get();}
		
		else {
		$data = DB::select('select position from users');
		 $notification = DB::table('notification')
	->where('line_num', '!=', $position )
	->where('position', '=', "manager")
    ->get();}
     
      return view('report_view',['notification'=>$notification]);
   }
   
   
   
}