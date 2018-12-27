<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Attendance extends Authenticatable
{
    use Notifiable;
	protected $primaryKey = 'time_in';
	protected $table = 'attendances';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'position', 'line_num', 'op_id', 'op_name', 'work_hr', 'sv_name', 'leave', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       // 'password', 'remember_token',
    ];
}
