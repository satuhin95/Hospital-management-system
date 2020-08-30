<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfigAttendance;
use DB;
class ConfigAttendanceController extends Controller
{
     public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('config_attendances')->join('staff','config_attendances.user_id','staff.id')
      								->select('config_attendances.*','staff.name')->get();
      return view('admin.attendanceconfig.config_attendance',compact('data'));
   }
   public function create(){
   	$staff = DB::table('staff')->get();
   	 return view('admin.attendanceconfig.create_config',compact('staff'));
   }
   public function store(Request $request){
   	  $validatedData = $request->validate([
        'user_id' => 'required',
        'in_time' => 'required',
        'out_time' => 'required',
        'week_day' => 'required'

     ]);
     $data = array(
        'user_id'=>$request->user_id,
        'user_type'=>3,
        'in_time'=>$request->in_time,
        'out_time'=>$request->out_time,
        'week_day'=>$request->week_day
     );
        DB::table('config_attendances')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Config: Insert");
        return Redirect()->route('attendconfig')->with($notification);
   }

  public function edit($id){
    $staff = DB::table('config_attendances')->where('id',$id)->first();

      return view('admin.attendanceconfig.edit_config',compact('staff'));
  }
  public function update(Request $request,$id){
      $data = array(
        'user_id'=>$request->user_id,
        'user_type'=>3,
        'in_time'=>$request->in_time,
        'out_time'=>$request->out_time,
        'week_day'=>$request->week_day
     );

        DB::table('config_attendances')->where('id',$id)->update($data);
        $notification =array(
           'messege'=>'Data Update Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Config: Update");
        return Redirect()->route('attendconfig')->with($notification);
  }
  public function delete($id){
    DB::table('config_attendances')->where('id',$id)->delete();
     $notification =array(
           'messege'=>'Data Delete Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Config: Delete");
        return Redirect()->back()->with($notification);
  }
}
