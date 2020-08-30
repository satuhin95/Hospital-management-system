
@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Patient Addmission</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#"> Addmission</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Patient Addmission</li>
         </ol>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="card card-box">
            <div class="card-head">
               <header>Basic Information</header>
            </div>

            <div class="card-body" id="bar-parent">
               <form action="{{URL::to('admission/store')}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Patient
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control" name="patient_id">
                              <option>Select Patient</option>
                              @foreach($patient as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Bed
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control" name="bed_id">
                              <option>Select bed</option>
                              @foreach($bed as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Admission Fee
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="admission_fee" data-required="1" placeholder="Enter  Admission Fee"
                              class="form-control input-height @error('admission_fee') is-invalid @enderror" />
                        </div>
                        @error('admission_fee')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Reference Doctor
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="reference_doctor" data-required="1" placeholder="Enter  Reference Doctor "
                              class="form-control input-height @error('reference_doctor') is-invalid @enderror" />
                        </div>
                        @error('reference_doctor')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-actions">
                        <div class="row">
                           <div class="offset-md-3 col-md-9">
                              <button type="submit" class="btn btn-info m-r-20">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection