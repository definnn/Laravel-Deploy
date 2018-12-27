<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attendance;
use Illuminate\Http\Request;

class DiscrepancyViewController extends Controller
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
	$attendances = DB::table('attendances')
    ->where('line_num', '=', $position ) 
	->where('time_in', '=', "00:00:00.000000")
	->where('leave', '=', null )	
	->get();}
		
		else {
	$data = DB::select('select position from users');
	$attendances = DB::table('attendances')
//	->where('position', '=', $position )
	->where('time_in', '=', "00:00:00.000000") 
	->where('leave', '=', null )
    ->get();}
    
	return view('discrepancy.index',['attendances'=>$attendances]);
   }
	
	  
	   public function edit($id)
    {
		
        $attendances = Attendance::find($id);
        return view('discrepancy.edit', compact('attendances', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
		    'time_in'     =>  'required'
        ]);

		$attendances = Attendance::find($id);
		$attendances->time_in = $request->get('time_in');
        $attendances->save();
		
        return redirect()->route('discrepancy.index')->with('success', 'Data Updated');
		
    }
	
	
	
}
