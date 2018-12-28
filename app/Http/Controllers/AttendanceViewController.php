<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttendanceViewController extends Controller
{
  
   public function index(){

     $user = auth()->user();
     $position=$user->position;
	
 if($user->position != 'manager'){
       $data = DB::select('select position from users');
	 $attendances = DB::table('attendances')
    ->where('line_num', '=', $position ) 
	->where('time_in', '!=', "00:00:00.000000")
	->where('leave', '=', '' )	
		->get();}
		
		else {
	$data = DB::select('select position from users');
	 $attendances = DB::table('attendances')
	->where('position', '=', $position )
	->where('time_in', '!=', "00:00:00.000000") 
	->where('leave', '=', '')
    ->get();}
	

      return view('attend_view',['attendances'=>$attendances]);
   }
}
