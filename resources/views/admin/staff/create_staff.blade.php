@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Staff</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Staff</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Staff</li>
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
               <form action="{{URL::to('staff/store')}}" id="form_sample_1" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Name
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="name" data-required="1" placeholder="Enter  name"
                              class="form-control input-height @error('name') is-invalid @enderror" />
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Email
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">
                              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address"> </div>
                              @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Mobile No.
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input name="contact" type="text" placeholder="mobile number"
                              class="form-control input-height @error('contact') is-invalid @enderror" /> </div>
                              @error('contact')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label  col-md-3">Date of Barth 
                           <span class="required"> * </span>
                        </label>
                        <div class="input-append date" id="dp3">
                           <input class="formDatePicker @error('dob') is-invalid @enderror" name="dob" placeholder=" Date of Barth" size="44"
                              type="text" readonly>
                           <span class="add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                        @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>

                     <div class="form-group row">
                        <label class="control-label col-md-3">Gender
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height @error('gender') is-invalid @enderror" name="gender">
                              <option value="">Select...</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                           </select>
                        </div>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Type
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height @error('type') is-invalid @enderror" name="type">
                              <option value="">Select...</option>
                              <option value="1">Supervisor</option>
                              <option value="2">Pharmacist</option>
                              <option value="3">Lab Assistent</option>
                              <option value="4">Nurse</option>
                              <option value="5">Compounder</option>
                           </select>
                        </div>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Address
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <textarea name="address" placeholder="address" class="form-control-textarea @error('address') is-invalid @enderror"
                              rows="5"></textarea>
                        </div>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Education
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="education" class="form-control input-height @error('education') is-invalid @enderror" name="education"
                              placeholder="Education">
                        </div>
                        @error('education')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Profile Picture
                        </label>
                        <div class="compose-editor">
                           <input type="file" name="image" class="default form-control ">
                        </div>
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