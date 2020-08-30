
@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Update Bed</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Bed</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Update Bed</li>
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
               <form action="{{URL::to('bed/update/'.$data->id)}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
 
    
                     <div class="form-group row">
                        <label class="control-label col-md-3">Category
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height " name="cat_id" >
                              <option value="">Select...</option>
                              @foreach($cat as $row)
                              <option value="{{$row->id}}" <?php if($data->cat_id == $row->id){echo " selected";} ?>  >{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Ward
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height" name="ward_id">
                              <option value="">Select...</option>
                              @foreach($ward as $row)
                              <option value="{{$row->id}}" <?php if($data->ward_id == $row->id){echo " selected";} ?>>{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Bed Type
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height " name="bed_type_id">
                              <option value="">Select...</option>
                              @foreach($type as $row)
                              <option value="{{$row->id}}" <?php if($data->bed_type_id == $row->id){echo " selected";} ?>>{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Price
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="price" data-required="1" 
                        class="form-control input-height " value="{{$data->price}}" />
                        </div>
                       
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Description
                           <span class="required" > * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="description" data-required="1" 
                              class="form-control input-height " value="{{$data->description}}" />
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