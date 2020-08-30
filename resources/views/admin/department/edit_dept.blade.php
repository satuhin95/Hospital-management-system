@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Department</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Department</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Department</li>
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
               <form action="{{URL::to('department/update/'.$data->id)}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Title
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="title"  value="{{$data->title}}" data-required="1" 
                              class="form-control input-height "/>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Description
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                        <textarea name="description"  class="form-control-textarea"
                              rows="5"> {{$data->description}}</textarea>
                        </div>
                        
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