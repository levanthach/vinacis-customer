@include('application::Layouts.header')
<body class="hold-transition skin-blue sidebar-mini">
   <header class="main-header">
    <!-- Logo -->
      <a href="./dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{asset('dist/img/favicon.png')}}" class="user-image img-responsive text-center" alt="Logo Vinacis" style="margin: auto"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> <img src="{{asset('dist/img/logo-w.png')}}" class="user-image img-responsive text-center" alt="Favion Vinacis" style="margin: auto"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">{{ __('Toggle navigation') }}</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{ __('3') }}</span>
            </a>
            <ul class="dropdown-menu">
            <li class="header">{{ __('Bạn có 3 thông báo mới') }}</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> {{ __('5 new members joined today') }}
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> {{ __('Very long description here that may not fit into the
                      page and may cause design problems') }}
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> {{ __('5 new members joined') }}
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="./notifile">{{ __('Xem tất cả') }}</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('dist/img/avatar_default.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs user-profile">{{ __('Lê Thạch') }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <!-- Menu Footer-->
              <li class="user-footer">
                  <a href="./profile" class="btn btn-default btn-flat">{{ __('Chỉnh sửa tài khoản') }}</a>
              </li>                
              <li class="user-footer">
                  <a href="./password-change" class="btn btn-default btn-flat">{{ __('Thay đổi mật khẩu') }}</a>
              </li>
                   <li class="user-footer">
                  <a href="./../login" class="btn btn-default btn-flat">{{ __('Đăng xuất') }}</a>
              </li>

      
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
       {{--    <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/avatar_default.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ __('Lê Thạch') }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ __('Online') }}</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{ __('MAIN NAVIGATION') }}</li>
        <li class="{{Request::segment(2) === 'dashboard' ? 'active treeview' : '' }}">
          <a href="./dashboard">
            <i class="fa fa-dashboard"></i> <span>{{ __('Dashboard') }}</span>
            
          </a>
        </li>
       
         <li class="{{Request::segment(2) === 'manage-customers' ? 'active treeview' : '' }}">
          <a href="./manage-customers">
            <i class="fa fa-users"></i> <span>{{ __('Quản lý khách hàng') }}</span>
           
          </a>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i> <span>{{ __('Quản lý voucher') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{Request::segment(2) === 'voucher-account' ? 'active treeview_color' : '' }}"><a href="./voucher-account"><i class="fa fa-circle-o"></i> {{ __('Voucher nạp tiền tài khoản') }}</a></li>
            <li class="{{Request::segment(2) === 'voucher-product' ? 'active treeview_color' : '' }}"><a href="./voucher-product"><i class="fa fa-circle-o"></i> {{ __('Voucher nạp tiền sản phẩm') }}</a></li>
          </ul>
        </li>

        <li class="{{Request::segment(2) === 'recharge-customer' ? 'active treeview' : '' }}">
          <a href="./recharge-customer">
            <i class="fa fa-money"></i> <span>{{ __('Nạp tiền cho khách hàng') }}</span>
          </a>
        </li>
         <li class="{{Request::segment(2) === 'manage-invoice' ? 'active treeview' : '' }}">
          <a href="./manage-invoice">
            <i class="fa fa-clipboard"></i> <span>{{ __('Quản lý hóa đơn') }}</span>
           
          </a>
        </li>
       
         <li class="{{Request::segment(2) === 'report' ? 'active treeview' : '' }}">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>{{ __('Xem báo cáo') }}</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>