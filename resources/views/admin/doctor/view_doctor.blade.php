@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Doctor List</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                  href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Doctor List</li>
         </ol>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tabbable-line">
            <!-- <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab"> List View </a>
                        </li>
                        <li>
                            <a href="#tab2" data-toggle="tab"> Grid View </a>
                        </li>
                    </ul> -->
            <ul class="nav customtab nav-tabs" role="tablist">
               <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
                     View</a></li>
               <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
                     View</a></li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active fontawesome-demo" id="tab1">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card card-topline-red">
                           <div class="card-head">
                              <header></header>
                              <div class="tools">
                                 <a class="fa fa-repeat btn-color box-refresh"
                                    href="javascript:;"></a>
                                 <a class="t-collapse btn-color fa fa-chevron-down"
                                    href="javascript:;"></a>
                                 <a class="t-close btn-color fa fa-times"
                                    href="javascript:;"></a>
                              </div>
                           </div>
                           <div class="card-body ">
                              <div class="row">
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="btn-group">
                                       <a href="{{route('add.doctor')}}" id="addRow"
                                          class="btn btn-info">
                                          Add New <i class="fa fa-plus"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                 </div>
                              </div>
                              <div class="table-scrollable">
                                 <table
                                    class="table table-hover table-checkable order-column full-width"
                                    id="example4">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th> Name </th>
                                          <th> Department </th>
                                          <th> Degree </th>
                                          <th> Mobile </th>
                                          <th> Email </th>
                                          <th>Fees</th>
                                          <th> Action </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($data as $row)
                                       <tr class="odd gradeX">
                                          
                                          <td class="patient-img">
                                             <img src="{{asset($row->image)}}" alt="">
                                          </td>
                                          <td>{{$row->name}}</td>
                                          <td class="left">{{$row->name}}</td>
                                          <td class="left">{{$row->qualification}}</td>
                                          <td><a href="tel:4444565756">
                                             {{$row->contact}} </a></td>
                                          <td><a href="mailto:shuxer@gmail.com">
                                             {{$row->email}} </a></td>
                                          <td class="left">{{$row->fees}}</td>
                                          <td>
                                             <a href="{{URL::to('doctor/edit/'.$row->id)}}"
                                                class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                             </a>
                                             <a href="{{URL::to('doctor/delete/'.$row->id)}}"
                                                class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o"></i>
                                             </a>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab2">
                  <div class="row">
                     @foreach($data as $row)
                     <div class="col-md-4">
                        <div class="card card-topline-aqua">
                           <div class="card-body no-padding ">
                              <div class="doctor-profile">
                                 <img src="{{asset($row->image)}}" class="doctor-pic" alt="">
                                 <div class="profile-usertitle">
                                    <div class="doctor-name">{{$row->name}} </div>
                                    <div class="name-center"> {{$row->qualification}} </div>
                                 </div>
                                 <p>{{$row->address}}</p>
                                 <div>
                                    <p><i class="fa fa-phone"></i><a
                                          href="tel:(123)456-7890"> {{$row->contact}}</a></p>
                                 </div>
                                 <div class="profile-userbuttons">
                                    <a href="doctor_profile.html"
                                       class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                       More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection 


