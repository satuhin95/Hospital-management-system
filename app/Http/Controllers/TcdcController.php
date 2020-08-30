<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Tcdc;
use DB;

class TcdcController extends Controller
{
    public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('patient_tests')
      	->join('patients','patient_tests.patient_id','patients.id')
      	->select('patient_tests.*','patients.name')
      ->where('test_id',1)->get();
       return view('admin.test.tcdc.view_tcdc',compact('data'));
   }
   public function create($id){

     return view('admin.test.tcdc.create_tcdc',compact('id'));
  }
  public function store(Request $request){

     $data = array(
        'patient_test_id'=>$request->id,
        'value'=>$request->value
     );
        DB::table('tcdcs')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Test Tcdc: Insert");
        return Redirect()->back()->with($notification);  
}
  public function view($id){
  	$patient = DB::table('tcdcs')
  		->join('patient_tests','tcdcs.patient_test_id','patient_tests.id')
  		->join('patients','patient_tests.patient_id','patients.id')
  		->select('patients.*')
  	->where('patient_test_id',$id)->first();
  	$data = DB::table('tcdcs')
  		->join('patient_tests','tcdcs.patient_test_id','patient_tests.id')
  		->join('tests','patient_tests.test_id','tests.id')
  		->select('tcdcs.*','tests.name')
  	->where('patient_test_id',$id)->first();
  	
      return view('admin.test.tcdc.print_view',compact('data','patient'));
  }
}