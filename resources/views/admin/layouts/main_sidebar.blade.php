<?php 
$id = session('ses_id');
 $data = DB::table('users')->where('id',$id)->first();

?>
<div class="sidebar-container">
   <div class="sidemenu-container navbar-collapse collapse fixed-menu">
      <div id="remove-scroll" class="left-sidemenu">
         <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
               <div class="sidebar-toggler">
                  <span></span>
               </div>
            </li>
            <li class="sidebar-user-panel">
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="{{asset($data->image)}}" class="img-circle user-img-circle" alt="User Image" />
                  </div>
                  <div class="pull-left info">
                     <p> {{$data->name}}</p>
                     <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                           Online</span></a>
                  </div>
               </div>
            </li>
            <li class="nav-item start active open">
               <a href="#">
                  <span class="title" style="font-size: 20px">Dashboard</span>
                  <span class="selected"></span>
               </a>
            </li>
           @include('admin.layouts.system')
             @include('admin.layouts.department') 
            @include('admin.layouts.doctor')
            @include('admin.layouts.bed')
            @include('admin.layouts.lab')
            @include('admin.layouts.patients')
            @include('admin.layouts.pescription')
            @include('admin.layouts.admission') 
            @include('admin.layouts.payment')
            @include('admin.layouts.staff')
             <li class="nav-item start active open">
               <a href="#">
                  <span class="title" style="font-size: 20px">Hrm</span>
                  <span class="selected"></span>
               </a>
            </li>
            @include('admin.layouts.attendance')
           

 

         </ul>
      </div>
   </div>
</div>