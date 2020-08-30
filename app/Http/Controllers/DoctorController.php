<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use DB;
use Image;
class DoctorController extends Controller
{
    public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       $data = Doctor::all();
       return view('admin.doctor.view_doctor',compact('data'));
    }
    public function create(){
       $dept = DB::table('departments')->get();
      return view('admin.doctor.create_doctor',compact('dept'));
   }
   public function store(Request $request){
      $validatedData = $request->validate([
			'name' => 'required',
         'email' => 'required|unique:users',
         'contact' => 'required',
         'address' => 'required',
         'fees' => 'required',
         'dob' => 'required',
         'gender' => 'required',
         'qualification' => 'required',
         'designation' => 'required',
         'dept_id' => 'required'

      ]);
      $dob = $request->dob;
      $date = date('Y-m-d',strtotime($dob));
		$data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'fees'=>$request->fees,
			'dob'=> $date,
			'gender'=>$request->gender,
			'qualification'=>$request->qualification,
			'designation'=>$request->designation,
			'dept_id'=>$request->dept_id
      );


		$images = $request->file('image');
		if ($images) {
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/doctor/'.$image_name);
			$data['image'] = 'public/picture/doctor/'.$image_name;
			DB::table('doctors')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Doctor: Insert");
			return Redirect()->route('doctor')->with($notification);
			}
		else{
			DB::table('doctors')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("Doctor: Insert");
			return Redirect()->route('doctor')->with($notification);
		} 
   }
   public function edit($id){
      $data = Doctor::find($id);
      $dept = DB::table('departments')->get();
      return view('admin.doctor.edit_doctor',compact('data','dept'));
   }
   public function update(Request $request , $id){
      $old = $request->old_img;
      $dob = $request->dob;
      $date = date('Y-m-d',strtotime($dob));
		$data = array(
			'name'=>$request->name,
			'email'=>$request->email,
			'contact'=>$request->contact,
			'address'=>$request->address,
			'fees'=>$request->fees,
			'dob'=> $date,
			'gender'=>$request->gender,
			'qualification'=>$request->qualification,
			'designation'=>$request->designation,
			'dept_id'=>$request->dept_id
      );
      $images = $request->file('image');
      if ($images) {
			unlink($old);
			$image_name = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
			Image::make($images)->resize(300, 200)->save('public/picture/doctor/'.$image_name);
			$data['image'] = 'public/picture/doctor/'.$image_name;
			DB::table('doctors')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Doctor: Update");
			return Redirect()->route('doctor')->with($notification);
			}
			else{
			DB::table('doctors')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data update Successfully without images ',
				'alert-type'=>'success'
         );
         UserActivity("Doctor: Update");
			return Redirect()->route('doctor')->with($notification);

		}
   }
   public function delete($id){
      $data = DB::table('doctors')->where('id',$id)->first();
     $img = $data->image;

     $success =  DB::table('doctors')->where('id',$id)->delete();
     if ( $success) {
      unlink($img);
       $notification = array(
          'messege'=>"Delete data Successfully",
          'alert-type'=>"success",
       );
       UserActivity("Doctor: Delete");
       return Redirect()->back()->with($notification);
     }
   }
}
