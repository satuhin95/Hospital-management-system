<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title> Hospital Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="{{asset('public/admin/assets/bundles/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/admin/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
   <link href="{{asset('public/admin/assets/bundles/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('public/admin/assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
   <link href="{{asset('public/admin/assets/bundles/bootstrap-datepicker/datepicker.css')}}" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/bundles/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/material_style.css')}}">
	<!-- Theme Styles -->
	<link href="{{asset('public/admin/assets/css/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('public/admin/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/admin/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
   <!-- favicon -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
	<link rel="shortcut icon" href="{{asset('public/admin/assets/img/favicon.ico')}}" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
	@include('admin.layouts.header')
		<!-- end header -->
		<!-- start color quick setting -->
      @include('admin.layouts.settingSidebar')
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('admin.layouts.main_sidebar')
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				@yield('admin_content')
			</div>
		
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; RedStar Hospital Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RT Theme maker</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{asset('public/admin/assets/bundles/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/popper/popper.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/jquery-blockUI/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/jquery.slimscroll/jquery.slimscroll.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('public/admin/assets/bundles/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('public/admin/assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
   <script src="{{asset('public/admin/assets/bundles/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/data/table-data.js')}}"></script>
   <script src="{{asset('public/admin/assets/bundles/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
   <script src="{{asset('public/admin/assets/data/datepicker-init.js')}}"></script>
	<!-- counterup -->
	<script src="{{asset('public/admin/assets/bundles/counterup/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/counterup/jquery.counterup.min.js')}}"></script>
   <!-- Common js-->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="{{asset('public/admin/assets/app.js')}}"></script>
	<script src="{{asset('public/admin/assets/layout.js')}}"></script>
	<script src="{{asset('public/admin/assets/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('public/admin/assets/bundles/material/material.min.js')}}"></script>
	<!-- chart js -->
	<script src="{{asset('public/admin/assets/bundles/chart-js/Chart.bundle.js')}}"></script>
	<script src="{{asset('public/admin/assets/bundles/chart-js/utils.js')}}"></script>
   <script src="{{asset('public/admin/assets/data/home1-chartjs-data.js')}}"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
      @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
        case 'info':
        toastr.info("{{ Session::get('messege') }}");
        break;
        case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
        case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
    @endif
</script>  

<script>  
   $(document).on("click", "#delete", function(e){
       e.preventDefault();
       var link = $(this).attr("href");
       swal({
        title: "Are you Want to delete?",
        text: "Once Delete, This will be Permanently Delete!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
       .then((willDelete) => {
        if (willDelete) {
         window.location.href = link;
     } else {
      swal("Safe Data!");
  }
});
   });
</script>

	<!-- end js include path -->
</body>
</html>