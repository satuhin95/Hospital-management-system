
@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Config</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Config</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Config</li>
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
               <form action="{{URL::to('attendconfig/update/'.$staff->id)}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> In time
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="in_time" data-required="1" value="{{$staff->in_time}}" 
                              class="form-control input-height"  />
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Out Time
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="out_time" data-required="1" value="{{$staff->out_time}}" 
                              class="form-control input-height " />
                        </div>
                     </div>
                           <div class="form-group row">
                        <label class="control-label col-md-3"> Week Day
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="week_day" data-required="1" value="{{$staff->week_day}}" 
                              class="form-control input-height " />
                        </div>
                        <input type="hidden" name="user_id" value="{{$staff->user_id}}">
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