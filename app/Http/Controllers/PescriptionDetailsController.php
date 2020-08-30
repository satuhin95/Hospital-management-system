<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PescriptionDetails;
use DB;
class PescriptionDetailsController extends Controller
{
   public function CreateDetails($id){
      $id = $id;
       return view('admin.pescriptiondetails.create_details',compact('id'));
   }
   public function StoreDetails(Request $request, $id){
      
       $validatedData = $request->validate([
          'medicine' => 'required',
          'dose' => 'required',
          'suggestion' => 'required'
       ]);
      $data = array(
         'medicine'=>$request->medicine,
         'dose'=>$request->dose,
         'suggestion'=>$request->suggestion,
         'pescription_id'=>$id
      );
      //  return response()->json($data);
      DB::table('pescription_details')->insert($data);
      $notification =array(
         'messege'=>'Data Insert Successfully',
         'alert-type'=>'success'
      );
      UserActivity("Pescription Details: Insert");
      return Redirect()->route('pescription')->with($notification);
   }
   public function DetailsView($id){
      $data = DB::table('pescriptions')
                     ->join('doctors','pescriptions.doctor_id','doctors.id')
                     ->join('patients','pescriptions.patient_id','patients.id')
                     ->select('pescriptions.*','doctors.name as dname','doctors.qualification','doctors.designation','doctors.email','doctors.contact','patients.name as pname','patients.chief_complain','patients.age','patients.gender')
                     ->where('pescriptions.id',$id)
                     ->first();

       $data1 = DB::table('pescription_details')->where('pescription_id',$id)->get();

                     //  return response()->json($data1);
                    
                     return view('admin.pescriptiondetails.final_view',compact('data','data1'));
   }
}
