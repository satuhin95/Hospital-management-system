<?php 
$id = session('ses_id');
 $data = DB::table('users')->where('id',$id)->first();

?>
<div class="page-header navbar navbar-fixed-top">
   <div class="page-header-inner ">
      <!-- logo start -->
      <div class="page-logo">
         <a href="index.html">
            <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
            <span class="logo-default">HMS</span> </a>
      </div>
      <!-- logo end -->
      <ul class="nav navbar-nav navbar-left in">
         <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
      </ul>
      <form class="search-form-opened" action="#" method="GET">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="query">
            <span class="input-group-btn">
               <a href="javascript:;" class="btn submit">
                  <i class="icon-magnifier"></i>
               </a>
            </span>
         </div>
      </form>
      <!-- start mobile menu -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
         data-target=".navbar-collapse">
         <span></span>
      </a>
      <!-- end mobile menu -->
      <!-- start header menu -->
      <div class="top-menu">
         <ul class="nav navbar-nav pull-right">

            <!-- start notification dropdown -->
            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge headerBadgeColor1"> 6 </span>
               </a>
               <ul class="dropdown-menu">
                  <li class="external">
                     <h3><span class="bold">Notifications</span></h3>
                     <span class="notification-label purple-bgcolor">New 6</span>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                        <li>
                           <a href="javascript:;">
                              <span class="time">just now</span>
                              <span class="details">
                                 <span class="notification-icon circle deepPink-bgcolor"><i
                                       class="fa fa-check"></i></span>
                                 Congratulations!. </span>
                           </a>
                        </li>
                        <li>
                           <a href="javascript:;">
                              <span class="time">just now</span>
                              <span class="details">
                                 <span class="notification-icon circle deepPink-bgcolor"><i
                                       class="fa fa-check"></i></span>
                                 Congratulations!. </span>
                           </a>
                        </li>
                        <li>
                           <a href="javascript:;">
                              <span class="time">just now</span>
                              <span class="details">
                                 <span class="notification-icon circle deepPink-bgcolor"><i
                                       class="fa fa-check"></i></span>
                                 Congratulations!. </span>
                           </a>
                        </li>
                     </ul>
                     <div class="dropdown-menu-footer">
                        <a href="javascript:void(0)"> All notifications </a>
                     </div>
                  </li>
               </ul>
            </li>
            <!-- end notification dropdown -->
            <!-- end message dropdown -->
            <!-- start manage user dropdown -->
            <li class="dropdown dropdown-user">
               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
                  <img alt="" class="img-circle " src="{{asset($data->image)}}" />
                  <span class="username username-hide-on-mobile"> {{$data->name}} </span>
                  <i class="fa fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-default">
                  <li>
                     <a href="user_profile.html">
                        <i class="icon-user"></i> Profile </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icon-settings"></i> Settings
                     </a>
                  </li>
                  <li>
                     <a href="{{url('logout')}}">
                        <i class="icon-logout"></i> Log Out </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>