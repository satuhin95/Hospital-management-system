@extends('admin.layouts.master')
@section('admin_content')
<?php 


              $st = $admission->admission_date;
              $en = $admission->release_date;
              $start = strtotime($st);
              $end = strtotime($en);

              $days_between = ceil(abs($end - $start) / 86400);
              $dfees = 0;
              $tprice = 0;
?>
<div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title"> Patient Payment</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                  href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#"> Payment</a>&nbsp;<i
                  class="fa fa-angle-right"></i>
            </li>
            <li class="active"> Patient Payment</li>
         </ol>
      </div>
   </div>
   <div class="row">
                  <div class="col-md-12">
                     <div class="white-box">
                        <h3><b>INVOICE</b> <span class="pull-right">#{{$admission->id}}</span></h3>
                        <hr>
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
                                       <b>Admission Date :</b> <i class="fa fa-calendar"></i>{{$admission->admission_date}} 
                                    </p>
                                    <p>
                                       <b>Release Date :</b> <i class="fa fa-calendar"></i> {{$admission->release_date }}
                                    </p>
                                 </address>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="table-responsive m-t-40">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th>Item Name</th>
                                          <th class="text-right">Unit Cost</th>
                                          <th class="text-right">Charges</th>
                                          <th class="text-right">Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($doctor as $row)
                                       <tr>
                                          <td>Doctor :-{{$row->dname}}</td>
                                          <td class="text-right">-</td>
                                          <td class="text-right">{{$row->fees}}</td>
                                          <td class="text-right">{{$row->fees}}</td>
                                          @php
                                             $dfees+=$row->fees;
                                          @endphp
                                       </tr>
                                       @endforeach
                                       @foreach($test as $row)
                                       <tr>
                                          <td>Test :-{{$row->tname}}</td>
                                          <td class="text-right">{{$row->price}}</td>
                                          <td class="text-right">-</td>
                                          <td class="text-right">{{$row->price}}</td>
                                          @php
                                             $tprice+=$row->price;
                                          @endphp
                                       </tr>
                                       @endforeach
                                       <tr>
                                          <td>Bed :-{{$bed->bname}}</td>
                                          <td class="text-right">{{$bed->price}}</td>
                                          <td class="text-right">-</td>
                                          <td class="text-right">{{$bed->price*$days_between}}</td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 @php 
                                 $subtotal=$bed->price*$days_between+$tprice+$dfees;
                                 $vat = $subtotal*10/100;
                                 @endphp
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="pull-right m-t-30 text-right">
                                 <p>Sub - Total amount: ${{$subtotal}}</p>
                                 <p>Discount : $00 </p>
                                 <p>vat (10%) : ${{$vat}} </p>
                                 <hr>
                                 <h3><b>Total :</b> ${{$subtotal+$vat}}</h3>
                              </div>
                              <div class="clearfix"></div>
                              <hr>
                              <div class="text-right">
                                 {{-- <button class="btn btn-danger" type="submit"> Proceed to payment </button> --}}
                                 <button onclick="javascript:window.print();"
                                    class="btn btn-default btn-outline" type="button"> <span><i
                                          class="fa fa-print"></i> Print</span> </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
</div>
@endsection 





