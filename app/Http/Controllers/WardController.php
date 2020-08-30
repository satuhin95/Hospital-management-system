<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
use DB;

class WardController extends Controller
{
   public function index()
   {
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = Ward::all();
      return view('admin.ward.view_ward', compact('data'));
   }
   public function create()
   {
      return view('admin.ward.create_ward');
   }
   public function store(Request $request)
   {
      $validatedData = $request->validate([
         'name' => 'required|unique:wards'

      ]);
      $data = array(
         'name' => $request->name
      );
      DB::table('wards')->insert($data);
      $notification = array(
         'messege' => 'Data Insert Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Ward: Insert");
      return Redirect()->route('ward')->with($notification);
   }
   public function edit($id)
   {

      $data = Ward::find($id);
      return view('admin.ward.edit_ward', compact('data'));
   }
   public function update(Request $request, $id)
   {
      $data = array(
         'name' => $request->name
      );
      DB::table('wards')->where('id', $id)->update($data);
      $notification = array(
         'messege' => 'Data Update Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Ward: Update");
      return Redirect()->route('ward')->with($notification);
   }
   public function delete($id)
   {
      $data = Ward::find($id);
      $data->delete();
      $notification = array(
         'messege' => 'Data Delete Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Ward: Delete");
      return Redirect()->back()->with($notification);
   }
}
