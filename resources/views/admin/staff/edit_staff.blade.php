@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Updata Staff</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Staff</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Updata Staff</li>
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
               <form action="{{URL::to('staff/update/'.$data->id)}}" id="form_sample_1" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Name
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="name" data-required="1" value="{{$data->name}}" 
                              class="form-control input-height" />
                        </div>

                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Email
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">
                              <input type="text" class="form-control " name="email" value="{{$data->email}}"> </div>

                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Mobile No.
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input name="contact" type="text" value="{{$data->contact}}"
                              class="form-control input-height " /> </div>

                     </div>
                     <div class="form-group row">
                        <label class="control-label  col-md-3">Date of Barth 
                           <span class="required"> * </span>
                        </label>
                        <div class="input-append date" id="dp3">
                           <input class="formDatePicker " name="dob" value="{{$data->dob}}" size="44"
                              type="text" readonly>
                           <span class="add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                     </div>

                     <div class="form-group row">
                        <label class="control-label col-md-3">Gender
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height" name="gender">
                              @if($data->gender==1)
                              <option value="1" selected>Male</option>
                              @elseif($data->gender==2)
                              <option value="2" selected>Female</option>
                              @endif
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Type
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height " name="type">
                              @if($data->type==1)
                              <option value="1" selected>Supervisor</option>
                              @elseif($data->type==2)
                              <option value="2" selected>Pharmacist</option>
                              @elseif($data->type==3)
                              <option value="3" selected>Lab Assistent</option>
                              @elseif($data->type==4)
                              <option value="4" selected>Nurse</option>
                              @elseif($data->type==5)
                              <option value="5" selected>Compounder</option>
                              @endif
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Address
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <textarea name="address"  class="form-control-textarea"
                              rows="5">{{$data->address}}</textarea>
                        </div>

                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Education
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="education" class="form-control input-height " name="education"
                              value="{{$data->education}}">
                        </div>
                   
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Profile Picture
                        </label>
                        <div class="compose-editor">
                           <input type="file" name="image" class="default form-control ">
                        </div>
                        <img src="{{asset($data->image)}}" width="60px" />
                     <input type="hidden" name="old_img" value="{{$data->image}}">
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