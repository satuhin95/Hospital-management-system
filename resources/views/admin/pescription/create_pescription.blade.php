@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Pescription</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Pescription</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Pescription</li>
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
               <form action="{{URL::to('pescription/store')}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Patient
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control @error('patient_id') is-invalid @enderror" name="patient_id">
                              <option value="">Select Patient</option>
                              @foreach($patient as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                              <select>
                        </div>
                        @error('patient_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Doctor
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control @error('doctor_id') is-invalid @enderror" name="doctor_id">
                              <option value="">Select Doctor</option>
                              @foreach($doctor as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                              <select>
                        </div>
                        @error('doctor_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Weight
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                          <input class="form-control @error('weight') is-invalid @enderror" placeholder="Weight" name="weight"/>
                        </div>
                        @error('weight')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Height
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                          <input class="form-control @error('height') is-invalid @enderror" placeholder="Height" name="height"/>
                        </div>
                        @error('height')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> BP
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                          <input class="form-control @error('bp') is-invalid @enderror" placeholder="BP" name="bp"/>
                        </div>
                        @error('bp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> History 
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                          <textarea class="form-control-textarea @error('history') is-invalid @enderror" placeholder="History" name="history"></textarea>
                        </div>
                        @error('history')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Advice 
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                          <textarea class="form-control-textarea @error('advice') is-invalid @enderror" placeholder="Advice" name="advice"></textarea>
                        </div>
                        @error('advice')
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