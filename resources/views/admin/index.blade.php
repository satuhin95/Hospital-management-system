@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Dashboard</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                  href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Dashboard</li>
         </ol>
      </div>
   </div>
   <!-- start widget -->
   <div class="state-overview">
      <div class="row">
         <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-blue">
               <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Appointments</span>
                  <span class="info-box-number">450</span>
                  <div class="progress">
                     <div class="progress-bar" style="width: 45%"></div>
                  </div>
                  <span class="progress-description">
                     45% Increase in 28 Days
                  </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-orange">
               <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
               <div class="info-box-content">
                  <span class="info-box-text">New Patients</span>
                  <span class="info-box-number">155</span>
                  <div class="progress">
                     <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                     40% Increase in 28 Days
                  </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-purple">
               <span class="info-box-icon push-bottom"><i
                     class="material-icons">content_cut</i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Operations</span>
                  <span class="info-box-number">52</span>
                  <div class="progress">
                     <div class="progress-bar" style="width: 85%"></div>
                  </div>
                  <span class="progress-description">
                     85% Increase in 28 Days
                  </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-success">
               <span class="info-box-icon push-bottom"><i
                     class="material-icons">monetization_on</i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Hospital Earning</span>
                  <span class="info-box-number">13,921</span><span>$</span>
                  <div class="progress">
                     <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                     50% Increase in 28 Days
                  </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
      </div>
   </div>
   <!-- end widget -->
   <!-- chart start -->
   <div class="row">
      <div class="col-md-8">
         <div class="card card-box">
            <div class="card-head">
               <header>HOSPITAL SURVEY</header>
               <div class="tools">
                  <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                  <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                  <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
               </div>
            </div>
            <div class="card-body no-padding height-9">
               <div class="row">
                  <canvas id="chartjs_line"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card card-box">
            <div class="card-head">
               <header>HOSPITAL SURVEY</header>
               <div class="tools">
                  <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                  <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                  <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
               </div>
            </div>
            <div class="card-body no-padding height-9">
               <div class="row">
                  <canvas id="chartjs_doughnut"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- end admited patient list -->
</div>
@endsection