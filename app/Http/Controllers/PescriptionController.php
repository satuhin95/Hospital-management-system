<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pescription;
use DB;
class PescriptionController extends Controller
{
   public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('patients')->get();
      return view('admin.pescription.view_pescription',compact('data'));
   }
   public function create(){
      $patient = DB::table('patients')->get();
      $doctor = DB::table('doctors')->get();
      return view('admin.pescription.create_pescription',compact('patient','doctor'));
  }
  public function store(Request $request){
     $validatedData = $request->validate([
        'patient_id' => 'required',
        'doctor_id' => 'required',
        'weight' => 'required',
        'height' => 'required',
        'bp' => 'required',
        'history' => 'required',
        'advice' => 'required'

     ]);
     $data = array(
        'patient_id'=>$request->patient_id,
        'doctor_id'=>$request->doctor_id,
        'weight'=>$request->weight,
        'height'=>$request->height,
        'bp'=>$request->bp,
        'history'=>$request->history,
        'advice'=>$request->advice
     );
   //   return response()->json($data);
        DB::table('pescriptions')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Pescription: Insert");
        return Redirect()->route('pescription')->with($notification);
  }
  public function view($id){
   $data = DB::table('pescriptions')
                  ->join('patients','pescriptions.patient_id','patients.id')
                  ->join('doctors','pescriptions.doctor_id','doctors.id')
                  ->select('pescriptions.*','doctors.name as dname','patients.name as pname')
                  ->where('pescriptions.patient_id',$id)
                  ->get();
   return view('admin.pescription.view',compact('data'));
}
public function DoctorBill($id){
   $patient = DB::table('patients')->where('id',$id)->first();
   $data = DB::table('pescriptions')
               ->join('doctors','pescriptions.doctor_id','doctors.id')
               ->select('pescriptions.*','doctors.name as dname','doctors.fees')
               ->where('pescriptions.patient_id',$id)
               ->get();
    return view('admin.pescription.doctor_bill',compact('patient','data'));
}





}