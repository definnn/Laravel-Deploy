<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GEIViewController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
     public function index(){
	    $user = auth()->user();
		$position=$user->position;
	
	 if($user->position != 'manager'){
       $data = DB::select('select position from users');
		 $gei = DB::table('gei')
		->where('line_num', '=', $position )
		->where('position', '=', "supervisor")
	 ->get();}
		
		else {
	$data = DB::select('select position from users');
	 $gei = DB::table('gei')
	->where('line_num', '!=', $position )
	->where('position', '=', "manager")
    ->get();}
	

      return view('gei_view',['gei'=>$gei]);
   }
}
