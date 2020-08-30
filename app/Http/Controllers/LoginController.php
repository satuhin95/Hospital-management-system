<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
   public function index(){
      if (session('ses_id')) {
         return Redirect()->route('admin');
      }
      return view('admin.login');
   }
   public function Check(Request $request){
      $email = $request->email;
      $password = $request->password;
      $data = DB::table('users')->where('email',$email)->where('password',$password)->first();
      if($data){
         $id=$data->id;
         $name=$data->name;
         $email=$data->email;
         $type=$data->type;
         $image=$data->image;
   		$session_id = session()->getId();

         session(['ses_id'=>$id,'ses_name'=>$name,'ses_email'=>$email,'ses_session_id'=>$session_id,'ses_image'=>$image]);
         $notification = array(
            'messege'=>"User Login Successfully",
            'alert-type'=>"success",
         );
         UserActivity("User: Login");
         return Redirect()->route('admin')->with($notification);
      }
      else{
         $notification = array(
            'messege'=>"Email or password invalid",
            'alert-type'=>"error",
         );
         return Redirect()->back()->with($notification);
      }
   }
   public function logout(){
      UserActivity("User: Logout");
		session()->forget('ses_id');
		session()->forget('ses_name');
		session()->forget('ses_email');
		session()->forget('ses_session_id');
		session()->forget('ses_image');
		session()->flush();
      $notification = array(
         'messege'=>" Logout Successfully",
         'alert-type'=>"success",
      );
      return Redirect()->route('login')->with($notification);
	}
}
