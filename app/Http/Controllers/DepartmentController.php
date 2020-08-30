<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use DB;
class DepartmentController extends Controller
{
    public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = Department::all();
       return view('admin.department.view_dept',compact('data'));
    }
    public function create(){
      return view('admin.department.create_dept');
    }
    public function store(Request $request){
      $validatedData = $request->validate([
         'title' => 'required|unique:departments',
         'description' => 'required'
      ]);
		$data = array(
			'title'=>$request->title,
			'description'=>$request->description
		);
			DB::table('departments')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Departments: Insert");
			return Redirect()->route('department')->with($notification);
 }
 public function edit($id){
   $data = Department::find($id);
    return view('admin.department.edit_dept',compact('data'));
 }
 public function update(Request $request,$id){
   $data = array(
      'title'=>$request->title,
      'description'=>$request->description
   );
      DB::table('departments')->where('id',$id)->update($data);
      $notification =array(
         'messege'=>'Data Update Successfully',
         'alert-type'=>'success'
      );
      UserActivity("Department: Update");
      return Redirect()->route('department')->with($notification);
 }
 public function delete($id){
    DB::table('departments')->where('id',$id)->delete();
    $notification = array(
       'messege'=>"Delete data Successfully",
       'alert-type'=>"success",
    );
    UserActivity("Department: Delete");
    return Redirect()->back()->with($notification);

}
}
