<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SISUMViewController extends Controller
{
    public function index(){
      $sisum = DB::select ('select * from sisum');
      return view('sisum_view',['sisum'=>$sisum]);
   }
}
