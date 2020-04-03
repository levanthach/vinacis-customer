@include('application::Layouts.header')

<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       <img src="{{asset('dist/img/logo-w.png')}}" class="user-image img-responsive text-center" alt="Logo Vinacis" style="margin: auto">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">
{{ __('Lấy lại mật khẩu') }}</p>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Nhập địa chỉ Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
      <!-- /.col -->
      <div class="col-xs-6 m-auto">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Lấy lại') }}</button>
      </div>
      <!-- /.col -->
  </div>
</form>
</div>
<!-- /.login-box -->
@include('application::Layouts.script')
