<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use DB;
class TestContorller extends Controller
{
   public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = Test::all();
      return view('admin.test.view_test',compact('data'));
   }
   public function create(){
     return view('admin.test.create_test');
  }
  public function store(Request $request){
     $validatedData = $request->validate([
        'name' => 'required|unique:tests',
        'price' => 'required'

     ]);
     $data = array(
        'name'=>$request->name,
        'price'=>$request->price
     );
        DB::table('tests')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Test: Insert");
        return Redirect()->route('test')->with($notification);
  }

  public function edit($id)
  {

    $data = Test::find($id);
    return view('admin.test.edit_test',compact('data'));
  }
  public function update(Request $request, $id)
  {
    $data = array(
      'name'=>$request->name,
      'price'=>$request->price
    );
       DB::table('tests')->where('id',$id)->update($data);
       $notification =array(
          'messege'=>'Data Update Successfully',
          'alert-type'=>'success'
       );
       UserActivity("Test: Update");
       return Redirect()->route('test')->with($notification);
  }
  public function delete($id)
  {
    $data=Test::find($id);
    $data->delete();
    $notification =array(
       'messege'=>'Data Delete Successfully',
       'alert-type'=>'success'
    );
    UserActivity("Test: Delete");
    return Redirect()->back()->with($notification);
  }
}
