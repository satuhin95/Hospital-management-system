<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bedtype;
use DB;
class BedtypeController extends Controller
{
    public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       $data = Bedtype::all();
       return view('admin.bedtype.view_bedtype',compact('data'));
    }
    public function create(){
      return view('admin.bedtype.create_bedtype');
   }
   public function store(Request $request){
      $validatedData = $request->validate([
         'name' => 'required|unique:bedtypes'

      ]);
		$data = array(
			'name'=>$request->name
		);
			DB::table('bedtypes')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Bedtype: Insert");
			return Redirect()->route('bedtype')->with($notification);
   }
   public function edit($id)
   {

     $data = Bedtype::find($id);
     return view('admin.bedtype.edit_bedtype',compact('data'));
   }
   public function update(Request $request, $id)
   {
     $data = array(
        'name'=>$request->name
     );
        DB::table('bedtypes')->where('id',$id)->update($data);
        $notification =array(
           'messege'=>'Data Update Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Bedtype: Update");
        return Redirect()->route('bedtype')->with($notification);
   }
   public function delete($id)
   {
     $category=Bedtype::find($id);
     $category->delete();
     $notification =array(
        'messege'=>'Data Delete Successfully',
        'alert-type'=>'success'
     );
     UserActivity("Bedtype: Delete");
     return Redirect()->back()->with($notification);
   }
}
