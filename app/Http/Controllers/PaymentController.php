<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PaymentController extends Controller
{
     public function index(){
       if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       $data = DB::table('patientadmissions')
       				->join('patients','patientadmissions.patient_id','patients.id')
       				->select('patientadmissions.*','patients.name')
       				->where('release_date',null)
       ->get();
       return view('admin.payment.view_payment',compact('data'));
    }

    public function process($id){
    	$date = date('Y-m-d');
    	$data = array(
		'release_date'=>$date,
      );
    	DB::table('patientadmissions')->where('id',$id)->update($data);


    	$admission = DB::table('patientadmissions')->where('id',$id)->first();
    	$pid = $admission->patient_id;
    	$bid = $admission->bed_id;
    	$bed = DB::table('beds')
    			->join('bedtypes','beds.bed_type_id','bedtypes.id')
    			->select('beds.*','bedtypes.name as bname')
    		->where('beds.id',$bid)->first();

        // update bed status 
        DB::table('beds')->where('id', $admission->bed_id)->update(['status'=>0]);

    $patient = DB::table('patients')->where('id',$pid)->first();
   $test = DB::table('patient_tests')
   ->join('tests','patient_tests.test_id','tests.id')
   ->select('patient_tests.*','tests.name as tname','tests.price')
   ->where('patient_tests.patient_id',$pid)
   ->get();

    $doctor = DB::table('pescriptions')
               ->join('doctors','pescriptions.doctor_id','doctors.id')
               ->select('pescriptions.*','doctors.name as dname','doctors.fees')
               ->where('pescriptions.patient_id',$pid)
               ->get();
    	return view('admin.payment.view_invoice',compact('patient','test','doctor','bed','admission'));
    }

    public function AllInvoice(){
    	$data = DB::table('patientadmissions')
       				->join('patients','patientadmissions.patient_id','patients.id')
       				->select('patientadmissions.*','patients.name')
       				->whereNotNull('release_date')
       ->get();

        return view('admin.payment.all_invoice',compact('data'));
    }
    public function view($id){

    	$admission = DB::table('patientadmissions')->where('id',$id)->first();
    	$pid = $admission->patient_id;
    	$bid = $admission->bed_id;
    	$bed = DB::table('beds')
    			->join('bedtypes','beds.bed_type_id','bedtypes.id')
    			->select('beds.*','bedtypes.name as bname')
    		->where('beds.id',$bid)->first();



    $patient = DB::table('patients')->where('id',$pid)->first();
   $test = DB::table('patient_tests')
   ->join('tests','patient_tests.test_id','tests.id')
   ->select('patient_tests.*','tests.name as tname','tests.price')
   ->where('patient_tests.patient_id',$pid)
   ->get();

    $doctor = DB::table('pescriptions')
               ->join('doctors','pescriptions.doctor_id','doctors.id')
               ->select('pescriptions.*','doctors.name as dname','doctors.fees')
               ->where('pescriptions.patient_id',$pid)
               ->get();
    	return view('admin.payment.view_invoice',compact('patient','test','doctor','bed','admission'));
    }
}
