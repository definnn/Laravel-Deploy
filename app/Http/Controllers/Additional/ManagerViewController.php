<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManagerViewController extends Controller
{
    public function index(){
      $attendancesum = DB::select ('select * from attendancesum');
      return view('att_view',['attendancesum'=>$attendancesum]);
   }
}
