<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  app\Fr;
use DB;

class FrController extends Controller
{
	public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = DB::table('patient_tests')
      	->join('patients','patient_tests.patient_id','patients.id')
      	->select('patient_tests.*','patients.name')
      ->where('test_id',2)->get();
       return view('admin.test.fr.view_fr',compact('data'));
   }
   public function create($id){

     return view('admin.test.fr.create_fr',compact('id'));
  }
  public function store(Request $request){

     $data = array(
        'patient_test_id'=>$request->id,
        'value'=>$request->value
     );
        DB::table('frs')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Test Fr: Insert");
        return Redirect()->back()->with($notification);  
}
  public function view($id){
  	$patient = DB::table('frs')
  		->join('patient_tests','frs.patient_test_id','patient_tests.id')
  		->join('patients','patient_tests.patient_id','patients.id')
  		->select('patients.*')
  	->where('patient_test_id',$id)->first();
  	$data = DB::table('frs')
  		->join('patient_tests','frs.patient_test_id','patient_tests.id')
  		->join('tests','patient_tests.test_id','tests.id')
  		->select('frs.*','tests.name')
  	->where('patient_test_id',$id)->first();
  	
      return view('admin.test.fr.print_view',compact('data','patient'));
  }
}