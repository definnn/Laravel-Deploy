<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpViewController extends Controller {
  public function index(){
      $notification = DB::select ('select * from notification');
      return view('emp_view',['notification'=>$notification]);
   }
}