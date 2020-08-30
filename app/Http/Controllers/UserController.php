<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Image;
class UserController extends Controller
{
    public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       $user = User::all();
       return view('admin.users.view_user',compact('user'));
    }
    public function create(){
      return view('admin.users.create_user');
    }
    public function edit($id){
       $user = User::find($id);
    
       return view('admin.users.edit_user',compact('user'));
    }

    public function store(Request $request){
      $validatedData = $request->validate([
			'name' => 'required',
         'email' => 'required|unique:users',
         'contact' => 'required',
         'address' => 'required',
         'joining_date' => 'required',
         'gender' => 'required',
         'type' => 'required',
         'password' => 'required'

      ]);
      $joining_date = $request->joining_date;
      $date = date('Y-m-d',strtotime($joining_date));
		$data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'joining_date'=>$date,
			'gender'=>$request->gender,
			'type'=>$request->type,
			'password'=>$request->password,
		);
		$images = $request->file('image');
		if ($images) {
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/users/'.$image_name);
			$data['image'] = 'public/picture/users/'.$image_name;
			DB::table('users')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("User: Insert");
			return Redirect()->back()->with($notification);
			}
		else{
			DB::table('users')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("User: Insert");
			return Redirect()->back()->with($notification);
		} 
    }
    public function update(Request $request , $id){
      $old = $request->old_img;
      $data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'password'=>$request->password,
      );
      $images = $request->file('image');
      if ($images) {
			unlink($old);
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/users/'.$image_name);
			$data['image'] = 'public/picture/users/'.$image_name;
			DB::table('users')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully',
				'alert-type'=>'success'
         );
         UserActivity("User: Update");
			return Redirect()->back()->with($notification);
			}
			else{
			DB::table('users')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("User: Update");
			return Redirect()->back()->with($notification);

		}
    }

    public function delete($id){
       $data = DB::table('users')->where('id',$id)->first();
      //  return response()->json($data);
      $img = $data->image;

      $success =  DB::table('users')->where('id',$id)->delete();
      if ( $success) {
       unlink($img);
        $notification = array(
           'messege'=>"Delete data Successfully",
           'alert-type'=>"success",
        );
        UserActivity("User: Delete");
        return Redirect()->back()->with($notification);
      }
    }
    public function activity(){

       $data = DB::table('activity_log')
       ->join('users','activity_log.user_id','users.id')
		->select('activity_log.*','users.name','users.image')
		->get();

    return view('admin.users.user_activity',compact('data'));
    }
}
