@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title"> Pescription</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Pescription</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"> Pescription</li>
         </ol>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tabbable-line">
            <div class="tab-content">
               <div class="tab-pane active fontawesome-demo" id="tab1">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="white-box">
                           <span class="text-center">
                              <h3> Dhaka Madical College</h3>
                           </span>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="pull-left">
                                    <div class="text-center">
                                    <h4>{{$data->dname}}</h4>
                                    <h5>{{$data->qualification}}</h5>
                                    <h5>{{$data->designation}}</h5>
                                    <h6>{{$data->email}}</h6>
                                    <h6>{{$data->contact}}</h6>                                      
                                 </div>     
                                 </div>
                                 <div class="pull-c text-right">
                                    <address>
                                       <p class="addr-font-h3">Patient</p>
                                       <p class="font-bold addr-font-h4">{{$data->pname}}</p>
                                       <p class="text-muted m-l-30">
                                          {{$data->age}} <br> 
                                          @if($data->gender==1)
                                          Male
                                          @else 
                                          Female
                                          @endif
                                          <br>
                                          {{$data->chief_complain}} <br> 
                                       </p>
                                    </address>
                                 </div>
                              </div>
                           </div>
                              <br>
                              <hr>
                              <div class="row">
                              <div class="col-md-4">
                                 <h4>History</h4>
                                 {{$data->history}}
                               <h4>Physical Finding</h4> 
                                 Weight:{{$data->weight}},
                                  Height:{{$data->height}},
                                 BP:{{$data->bp}}
                                 <h4>Advice</h4>
                                 {{$data->advice}}
                              </div>
                              <div class="col-md-8">
                                 <div class="table-responsive m-t-40">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Medicint Name</th>
                                             <th class="text-right">Dose</th>
                                             <th class="text-right">Suggestion</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($data1 as $row)
                                          <tr>
                                             <td>{{$row->medicine}}</td>
                                             <td class="text-right">{{$row->dose}}</td>
                                             <td class="text-right">{{$row->suggestion}}</td>
               
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="clearfix"></div>
                                 <hr>
                                 <div class="text-right">
                                    <button onclick="javascript:window.print();" class="btn btn-default btn-outline"
                                       type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
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
</div>
@endsection