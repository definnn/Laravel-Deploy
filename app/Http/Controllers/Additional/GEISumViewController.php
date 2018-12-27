<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GEISumViewController extends Controller
{
	 public function index(){
	    $user = auth()->user();
		$position=$user->position;
	
		$data = DB::select('select position from users');
		$geisum = DB::table('geisum')
		->where('line_num', '=', $position )
		->get();
	
      return view('geisum_view',['geisum'=>$geisum]);
   }
}
