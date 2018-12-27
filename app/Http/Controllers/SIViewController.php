<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SIViewController extends Controller
{
	 public function index(){
	    $user = auth()->user();
		$position=$user->position;
		
		 if($user->position != 'manager'){
       $data = DB::select('select position from users');
		$si = DB::table('si')
		->where('line_num', '=', $position )
		->where('position', '=', "supervisor")
	 ->get();}
		
		else {
		$data = DB::select('select position from users');
		$si = DB::table('si')
	->where('line_num', '!=', $position )
	->where('position', '=', "manager")
    ->get();}
      return view('si_view',['si'=>$si]);
   }
       public function update($id)
    {
		
        $attendances = Attendance::find($id);
        return view('discrepancy.update', compact('attendances', 'id'));
    }
   
}
