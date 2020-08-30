@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Update User</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Users</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Update User</li>
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
               <form action="{{URL::to('users/update/'.$user->id)}}" id="form_sample_1" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Name
                           <span class="required" > * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="name" data-required="1" 
                        class="form-control input-height" value="{{$user->name}}" />
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
                              <input type="text" class="form-control " name="email" value="{{$user->email}}" > </div>
                             
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Mobile No.
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input name="contact" type="text" placeholder="mobile number"
                              class="form-control input-height " value="{{$user->contact}}" /> </div>
                              
                     </div>

                     <div class="form-group row">
                        <label class="control-label col-md-3">Address
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <textarea name="address" placeholder="address" class="form-control-textarea"
                              rows="5">{{$user->name}}</textarea>
                        </div>
                      
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Password
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="password" class="form-control input-height " name="password" value="{{$user->password}}"
                              >
                        </div>
                      
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Profile Picture
                        </label>
                        <div class="compose-editor">
                           <input type="file" name="image" class="default form-control ">
                        </div>
                     <img src="{{asset($user->image)}}" width="60px" />
                     <input type="hidden" name="old_img" value="{{$user->image}}">
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