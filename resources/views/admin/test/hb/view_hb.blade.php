@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title"> Hb Test</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                  href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Test</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li class="active">HB Test</li>
         </ol>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tabbable-line">
            <ul class="nav customtab nav-tabs" role="tablist">
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
                                          <th>Id</th>
                                          <th> Name </th>
                                          <th> Date </th>
                                          <th> Action </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($data as $row)
                                       <tr class="odd gradeX">
                                          <td class="patient-img">
                                                {{$row->id}}
                                          </td>
                                          <td>{{$row->name}}</td>
                                          <td>{{$row->test_date}}</td>
                                          <td>
                                             <a href="{{url('test/hb/create/'.$row->id)}}"
                                                   class="btn btn-primary btn-xs">
                                                   <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{url('test/hb/view/'.$row->id)}}"
                                                   class="btn btn-success btn-xs" >
                                                   <i class="fa fa-eye"></i>
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

            </div>
         </div>
      </div>
   </div>
</div>
@endsection 


