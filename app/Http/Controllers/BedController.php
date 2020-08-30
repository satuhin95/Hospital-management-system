<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed;
use DB;
class BedController extends Controller
{
   public function index()
   {
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('beds')
            ->join('categories','beds.cat_id','categories.id')
            ->join('wards','beds.ward_id','wards.id')
            ->join('bedtypes','beds.bed_type_id','bedtypes.id')
            ->select('beds.*','categories.name as catname','wards.name as wardname','bedtypes.name as type')
         ->get();
      return view('admin.bed.view_bed', compact('data'));
   }
   public function create()
   {
      $cat = DB::table('categories')->get();
      $ward = DB::table('wards')->get();
      $type = DB::table('bedtypes')->get();
      return view('admin.bed.create_bed',compact('cat','ward','type'));
   }
   public function store(Request $request)
   {
      $validatedData = $request->validate([
         'price' => 'required',
         'cat_id' => 'required',
         'bed_type_id' => 'required',
         'ward_id' => 'required',
         'description' => 'required'

      ]);
      $data = array(
         'price' => $request->price,
         'cat_id' => $request->cat_id,
         'bed_type_id' => $request->bed_type_id,
         'ward_id' => $request->ward_id,
         'description' => $request->description,
      );
      DB::table('beds')->insert($data);
      $notification = array(
         'messege' => 'Data Insert Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Bed: Insert");
      return Redirect()->route('bed')->with($notification);
   }
   public function edit($id)
   {
      $cat = DB::table('categories')->get();
      $ward = DB::table('wards')->get();
      $type = DB::table('bedtypes')->get();
      $data = Bed::find($id);
      return view('admin.bed.edit_bed', compact('data','cat','ward','type'));
   }
   public function update(Request $request, $id)
   {
      $data = array(
         'price' => $request->price,
         'cat_id' => $request->cat_id,
         'bed_type_id' => $request->bed_type_id,
         'ward_id' => $request->ward_id,
         'description' => $request->description,
      );
      DB::table('beds')->where('id', $id)->update($data);
      $notification = array(
         'messege' => 'Data Update Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Bed: Update");
      return Redirect()->route('bed')->with($notification);
   }
   public function delete($id)
   {
      $data = Bed::find($id);
      $data->delete();
      $notification = array(
         'messege' => 'Data Delete Successfully',
         'alert-type' => 'success'
      );
      UserActivity("Bed: Delete");
      return Redirect()->back()->with($notification);
   }
}
