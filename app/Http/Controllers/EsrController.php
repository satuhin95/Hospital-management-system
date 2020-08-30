<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Esr;
use DB;
class EsrController extends Controller
{
    	public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('patient_tests')
      	->join('patients','patient_tests.patient_id','patients.id')
      	->select('patient_tests.*','patients.name')
      ->where('test_id',4)->get();
       return view('admin.test.esr.view_esr',compact('data'));
   }
   public function create($id){

     return view('admin.test.esr.create_esr',compact('id'));
  }
  public function store(Request $request){

     $data = array(
        'patient_test_id'=>$request->id,
        'value'=>$request->value
     );
        DB::table('esrs')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Test Esr: Insert");
        return Redirect()->back()->with($notification);  
}
  public function view($id){
  	$patient = DB::table('esrs')
  		->join('patient_tests','esr.patient_test_id','patient_tests.id')
  		->join('patients','patient_tests.patient_id','patients.id')
  		->select('patients.*')
  	->where('patient_test_id',$id)->first();
  	$data = DB::table('esrs')
  		->join('patient_tests','esr.patient_test_id','patient_tests.id')
  		->join('tests','patient_tests.test_id','tests.id')
  		->select('esrs.*','tests.name')
  	->where('patient_test_id',$id)->first();
  	
      return view('admin.test.esr.print_view',compact('data','patient'));
  }
}