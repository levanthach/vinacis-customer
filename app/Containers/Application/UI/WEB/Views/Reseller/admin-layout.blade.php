@include('application::Reseller.admin-menu')

<div class="wrapper" style="min-width: 100%">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	@yield('content')
	</div>  <!-- End Content Header (Page header) -->
@include('application::Layouts.footer')