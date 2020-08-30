<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientTest;
use DB;
class PatientTestController extends Controller
{
  
   public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }

      $data = DB::table('patients')->get();
      return view('admin.patient.view_patient_test',compact('data'));
   }
   public function create(){
      $patient = DB::table('patients')->get();
      $test = DB::table('tests')->get();
     return view('admin.patient.create_patient_test',compact('patient','test'));
  }

  public function store(Request $request){
     $validatedData = $request->validate([
        'patient_id' => 'required',
        'test_id' => 'required'
     ]);

     $data = array(
        'patient_id'=>$request->patient_id,
        'test_id'=>$request->test_id
     );

        DB::table('patient_tests')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("PatientTeest: Insert");
        return Redirect()->back()->with($notification);
  }
  public function view($id){
     $data = DB::table('patient_tests')
                  ->join('patients','patient_tests.patient_id','patients.id')
                  ->join('tests','patient_tests.test_id','tests.id')
                  ->select('patient_tests.*','patients.name as pname','tests.name as tname','tests.price')
                  ->where('patient_tests.patient_id',$id)
                  ->get();
    return view('admin.patient.view',compact('data'));
  }
  public function PrintTest($id){
   $patient = DB::table('patients')->where('id',$id)->first();
   $data = DB::table('patient_tests')
   ->join('tests','patient_tests.test_id','tests.id')
   ->select('patient_tests.*','tests.name as tname','tests.price')
   ->where('patient_tests.patient_id',$id)
   ->get();
return view('admin.patient.print_test_view',compact('data','patient'));
  }

}
