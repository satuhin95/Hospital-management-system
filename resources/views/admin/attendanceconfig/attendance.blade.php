
@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Add Attendance</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
               class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Attendance</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Add Attendance</li>
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
               <form action="{{URL::to('attendance/store')}}" id="form_sample_1" class="form-horizontal" method="POST">
                  @csrf
                  <table class="table table-hover text-nowrap">
                   <thead>
                    <tr>
                     <th>ID</th>
                     <th>User</th>
                     <th>In Time</th>
                     <th>Out Time</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                 <?php foreach($data as $row){ ?>
                 <tr>
                   <td><?php echo $row['id']?></td>
                   <td><?php echo $row['name']?></td>
                   <td><?php echo $row['in_time']?>&nbsp;am</td>
                   <td><?php echo $row['out_time']?>&nbsp;pm</td>
                   <input type="hidden" name="in_time" value="<?php echo $row['in_time']?>">
                   <input type="hidden" name="out_time" value="<?php echo $row['out_time']?>">
                   <td>
                    Present&nbsp;<input type="radio" name="attr[<?php echo $row['user_id']?>]" value="1">&nbsp;Absent&nbsp;
                    <input type="radio" name="attr[<?php echo $row['user_id']?>]" value="2">

                 </td>

                 <?php }?>

              </tr>
           </tbody>

        </table>
     </form>
  </div>
</div>
</div>
</div>
</div>
@endsection