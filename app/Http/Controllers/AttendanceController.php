<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Attendance;
use DB;
class AttendanceController extends Controller
{
   public function index(){
    $data = DB::table('staff')->get();
   	return view('admin.attendance.attendance',compact('data'));
   }
   public function view($id){
    $data = DB::table('attendances')->where('user_id',$id)->get();

   return view('admin.attendance.view_attendance',compact('data'));
   }
    public function create(){
    	$data = DB::table('config_attendances')
    		->join('staff','config_attendances.user_id','staff.id')
    		->select('config_attendances.*','staff.name')
    	->where('user_type',3)->get();

   	  return view('admin.attendance.create_attendance',compact('data'));
   }

   public function store(Request $request){
   
   				$outtime = $request->out_time;
           $intime = $request->in_time;
           $date= date('Y-m-d');
           $user_type=3;
			foreach ($request->out_time  as $key=>$value) {
        
         $out_time= $outtime[$key];
         $in_time= $intime[$key];

         DB::insert("insert into attendances (user_id, in_time, out_time ,user_type, date) 
         values('$key','$in_time','$out_time','$user_type','$date')"); 
				
      }
      $notification = array(
        'messege' => 'Data Insert Successfully',
        'alert-type' => 'success'
     );
     UserActivity("Attendance: Insert");
     return Redirect()->back()->with($notification);

    }


}
