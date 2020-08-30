<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB;
use Image;
class StaffController extends Controller
{
    public function index(){
    	$data = Staff::all();
    	return view('admin.staff.view_staff', compact('data'));
    }

    public function create(){
    	return view('admin.staff.create_staff');
    }
     public function store(Request $request){
    	     $validatedData = $request->validate([
			'name' => 'required',
         'email' => 'required|unique:users',
         'contact' => 'required',
         'address' => 'required',
         'dob' => 'required',
         'gender' => 'required',
         'type' => 'required',
         'education' => 'required'

     ]);
      $dob = $request->dob;
      $date = date('Y-m-d',strtotime($dob));
		$data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'dob'=>$date,
			'gender'=>$request->gender,
			'type'=>$request->type,
			'education'=>$request->education,
		);
		

			$images = $request->file('image');
		if ($images) {
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/staff/'.$image_name);
			$data['image'] = 'public/picture/staff/'.$image_name;
			DB::table('staff')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Staff: Insert");
			return Redirect()->route('staff')->with($notification);
			}
		else{
			DB::table('staff')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("Staff: Insert");
			return Redirect()->route('staff')->with($notification);
		} 
    }
    public function edit($id){
    	 $data = Staff::find($id);
    
       return view('admin.staff.edit_staff',compact('data'));
    }
    public function update(Request $request,$id){
     $old = $request->old_img;
        $dob = $request->dob;
      $date = date('Y-m-d',strtotime($dob));
		$data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'dob'=>$date,
			'gender'=>$request->gender,
			'type'=>$request->type,
			'education'=>$request->education,
		);
      $images = $request->file('image');
      if ($images) {
			unlink($old);
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/staff/'.$image_name);
			$data['image'] = 'public/picture/staff/'.$image_name;
			DB::table('staff')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Staff: Update");
			return Redirect()->route('staff')->with($notification);
			}
			else{
			DB::table('staff')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("Staff: Update");
			return Redirect()->route('staff')->with($notification);

		}
    }
     public function delete($id){
       $data = DB::table('staff')->where('id',$id)->first();
      $img = $data->image;
      $success =  DB::table('staff')->where('id',$id)->delete();
      if ( $success) {
       unlink($img);
        $notification = array(
           'messege'=>"Delete data Successfully",
           'alert-type'=>"success",
        );
        UserActivity("Staff: Delete");
        return Redirect()->back()->with($notification);
      }
    }
}
