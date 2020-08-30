
@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Bed</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Bed</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Bed</li>
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
               <form action="{{URL::to('bed/store')}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <div class="form-body">
    
                     <div class="form-group row">
                        <label class="control-label col-md-3">Category
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height @error('cat_id') is-invalid @enderror" name="cat_id">
                              <option value="">Select...</option>
                              @foreach($cat as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('cat_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Ward
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height @error('ward_id') is-invalid @enderror" name="ward_id">
                              <option value="">Select...</option>
                              @foreach($ward as $row)
                              <option value="{{$row->id}}"  >{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('ward_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3">Bed Type
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <select class="form-control input-height @error('bed_type_id') is-invalid @enderror" name="bed_type_id">
                              <option value="">Select...</option>
                              @foreach($type as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        @error('bed_type_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Price
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="price" data-required="1" placeholder="Enter  Price"
                              class="form-control input-height @error('price') is-invalid @enderror" />
                        </div>
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3"> Description
                           <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                           <input type="text" name="description" data-required="1" placeholder="Enter  Description"
                              class="form-control input-height @error('description') is-invalid @enderror" />
                        </div>
                        @error('description')
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