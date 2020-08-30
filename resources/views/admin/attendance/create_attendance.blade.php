 @extends('admin.layouts.master')
 @section('admin_content')
 <div class="page-content">
   <div class="page-bar">
      <div class="page-title-breadcrumb">
         <div class=" pull-left">
            <div class="page-title">Take Attendance</div>
         </div>
         <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#"> Attendance</a>&nbsp;<i
               class="fa fa-angle-right"></i>
            </li>
            <li class="active">Take Attendance</li>
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
                                       <a href="{{route('add.staff')}}" id="addRow"
                                       class="btn btn-info">
                                       Add New <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6">
                              </div>
                           </div>
                           <div class="table-scrollable">
                              <form action="{{url('attendance/store')}}" method="post">
                                 @csrf
                              <table class="table" >
                              <tbody>
                                 @foreach($data as $row)
                                 <tr>
                                    <td>{{$row->name}}</td>
                                    <td>
                                       <input type="text" name="in_time[{{$row->user_id}}]" placeholder="In Time" width="10px" >
                                    </td>
                                       <td>
                                          <input type="text" name="out_time[{{$row->user_id}}]" placeholder="Out Time" width="10px" >
                                       </td>
                                        
                                          <!-- <input type="hidden" name="user[]" value="{{$row->user_id}}"/>  -->
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
                                <input type="submit" value="Submit" class="btn btn-primary">
                                </form>
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


