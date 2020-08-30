<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;
class PatientController extends Controller
{
   public function index(){
     if (!session('ses_id')) {
         return Redirect()->route('login');
      }
      $data = Patient::all();
      return view('admin.patient.view_patient',compact('data'));
   }
    public function indoor(){
      $data = DB::table('patients')->where('type',1)->get();
      return view('admin.patient.view_patient',compact('data'));
   }
     public function outdoor(){
      $data = DB::table('patients')->where('type',0)->get();
      return view('admin.patient.view_patient',compact('data'));
   }
   public function create(){
     return view('admin.patient.create_patient');
  }
  public function store(Request $request){
     $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'age' => 'required',
        'address' => 'required',
        'contact' => 'required',
        'gender' => 'required',
        'reg_date' => 'required',
        'chief_complain' => 'required'

     ]);

     $reg_date = $request->reg_date;
      $date = date('Y-m-d',strtotime($reg_date));
     $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'address'=>$request->address,
        'contact'=>$request->contact,
        'gender'=>$request->gender,
        'reg_date'=>$date,
        'chief_complain'=>$request->chief_complain
     );
    
        DB::table('patients')->insert($data);
        $notification =array(
           'messege'=>'Data Insert Successfully',
           'alert-type'=>'success'
        );
        UserActivity("Patient: Insert");
        return Redirect()->route('patient')->with($notification);
  }

  public function edit($id)
  {

    $data = Patient::find($id);
    return view('admin.patient.edit_patient',compact('data'));
  }
  public function update(Request $request, $id)
  {
   $reg_date = $request->reg_date;
   $date = date('Y-m-d',strtotime($reg_date));
  $data = array(
     'name'=>$request->name,
     'email'=>$request->email,
     'age'=>$request->age,
     'address'=>$request->address,
     'contact'=>$request->contact,
     'gender'=>$request->gender,
     'reg_date'=>$date,
     'chief_complain'=>$request->chief_complain
  );
       DB::table('patients')->where('id',$id)->update($data);
       $notification =array(
          'messege'=>'Data Update Successfully',
          'alert-type'=>'success'
       );
       UserActivity("Patient: Update");
       return Redirect()->route('patient')->with($notification);
  }
  public function delete($id)
  {
    $data=Patient::find($id);
    $data->delete();
    $notification =array(
       'messege'=>'Data Delete Successfully',
       'alert-type'=>'success'
    );
    UserActivity("Patient: Delete");
    return Redirect()->back()->with($notification);
  }
}
