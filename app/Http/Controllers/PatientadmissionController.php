<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patientadmission;
use DB;
class PatientadmissionController extends Controller
{
   public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('patientadmissions')
               ->join('patients','patientadmissions.patient_id','patients.id')
               ->join('beds','patientadmissions.bed_id','beds.id')
               ->join('bedtypes','beds.bed_type_id','bedtypes.id')
               ->select('patientadmissions.*','patients.name as pname','beds.bed_type_id','bedtypes.name as bname')
      ->get();
      return view('admin.admission.view_admission',compact('data'));
   }
   public function create(){
      $patient = DB::table('patients')->get();
      $bed = DB::table('beds')
                  ->join('bedtypes','beds.bed_type_id','bedtypes.id')
                  ->select('beds.*','bedtypes.name')
      ->where('status',0)->get();
     return view('admin.admission.create_admission',compact('patient','bed'));
  }
  public function store(Request $request){
   $validatedData = $request->validate([
      'patient_id' => 'required',
      'bed_id' => 'required',
      'admission_fee' => 'required',
      'reference_doctor' => 'required'

   ]);
   $data = array(
      'patient_id'=>$request->patient_id,
      'bed_id'=>$request->bed_id,
      'admission_fee'=>$request->admission_fee,
      'reference_doctor'=>$request->reference_doctor,
   );
      DB::table('patientadmissions')->insert($data);

       DB::table('beds')->where('id', $request->bed_id)->update(['status'=>1]);
      DB::table('patients')->where('id',$request->patient_id)->update(['type'=>1]);
      $notification =array(
         'messege'=>'Data Insert Successfully',
         'alert-type'=>'success'
      );
      UserActivity("Patient Admission: Insert");
      return Redirect()->route('admission')->with($notification);
}
}
