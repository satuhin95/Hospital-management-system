@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Update Doctor</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Department</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Update Doctor</li>
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
            <form action="{{URL::to('doctor/update/'.$data->id)}}" id="form_sample_1" class="form-horizontal" method="POST" enctype="multipart/form-data">
               @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Name
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" name="name" data-required="1" value="{{$data->name}}"
                              class="form-control input-height " />
                        </div>
                        
                     </div>

                     <div class="form-group row">
                        <label class="control-label col-md-3">Email
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">
                              <span class="input-group-addon">
                                 <i class="fa fa-envelope"></i>
                              </span>
                              <input type="text" class="form-control input-height" name="email"
                              value="{{$data->email}}"> </div>
                        </div>
                       
                     </div>
                     
                     <div class="form-group row">
                        <label class="control-label col-md-3">Fees
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">
                              <span class="input-group-addon">
                                 <i class="fa fa-envelope"></i>
                              </span>
                              <input type="text" class="form-control input-height" name="fees"
                              value="{{$data->fees}}"> </div>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Designation
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="designation" data-required="1" value="{{$data->designation}}"
                              class="form-control input-height " />
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Departments
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height " name="dept_id">
                              <option value="">Select...</option>
                              @foreach($dept as $row)
                              <option value="{{$row->id}}">{{$row->title}}</option>
                              @endforeach
                           </select>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Gender
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height " name="gender">
                              <option value="">Select...</option>
                              <option value="Category 1">Male</option>
                              <option value="Category 2">Female</option>
                           </select>
                        </div>
                      
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 ">Mobile No.
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input name="contact" type="text" value="{{$data->contact}}"
                              class="form-control input-height " /> </div>
                            
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Date Of Birth
                           <span class="required"> * </span>
                        </label>
                        <div class="input-append date" id="dp1">
                           <input class="formDatePicker" value="{{$data->dob}}" size="44" type="text" name="dob" readonly>
                           <span class="add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Address
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <textarea name="address"  class="form-control-textarea "
                              rows="5">{{$data->address}}</textarea>
                        </div>
                    
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Qualification
                        </label>
                        <div class="col-md-5">
                           <textarea name="qualification" class="form-control-textarea " 
                              rows="5">{{$data->qualification}}</textarea>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Profile Picture
                        </label>
                        <div class="compose-editor">
                           <input type="file" name="image" class="default form-control " multiple>
                        </div>
                           <img src="{{asset($data->image)}}" width="60px" />
                     <input type="hidden" name="old_img" value="{{$data->image}}"/>
                     </div>
                     <div class="form-actions">
                        <div class="row">
                           <div class="offset-md-3 col-md-9">
                              <button type="submit" class="btn btn-info m-r-20">Update</button>

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