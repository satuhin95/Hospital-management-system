@extends('admin.layouts.master')
@section('admin_content')
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title"> Doctors Payment</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Payment</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"> Doctors Payment</li>
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
                              <h3> Dhaka Madical College </h3>
                           </span>
                             <div class="row">
                              <div class="col-md-12">
                               <div class="pull-left">
                                 <address>
                                    <img src="{{asset('public/admin/assets/img/dlogo.jpg')}}" alt="logo" class="logo-default" />
                                    <p class="text-muted m-l-5">
                                       Dhaka Medical Hospital, <br> Secretariat Road,, <br>
                                       Shahbagh, Dhaka
                                    </p>
                                 </address>
                              </div>
                              <div class="pull-right text-right">
                                 <address>
                                    <p class="addr-font-h3">To,</p>
                                    <p class="font-bold addr-font-h4">{{$patient->name}}</p>
                                    <p class="text-muted m-l-30">
                                       {{$patient->address}}., <br> {{$patient->contact}},
                                       <br> {{$patient->email}}
                                    </p>
                                    <p class="m-t-30">
                                       <b> Date :</b> <i class="fa fa-calendar"></i>{{date('Y-m-d')}}
                                    </p>
                                 </address>
                              </div>
                           </div>
                        </div>
                              <br>
                              <hr>
                              <div class="row">
                              <div class="col-md-12">
                                 <div class="table-responsive m-t-40">
                                    <caption>Test Report</caption>
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Test</th>
                                             <th class="text-right">Normal</th>
                                             <th class="text-right">Prasent</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                    
                                          <tr>
                                             <td>{{$data->name}}</td>
                                             <td class="text-right">7.8 mmol/L (140 mg/dL)</td>
                                             <td class="text-right">{{$data->value}}</td>
               
                                          </tr>
                                       </tbody>
                                    </table>
                                    <hr>

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