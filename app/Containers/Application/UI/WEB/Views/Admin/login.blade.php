@include('application::Layouts.header')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo text-center">
   <img src="{{asset('dist/img/logo-w.png')}}" class="user-image img-responsive text-center" alt="Logo Vinacis" style="margin: auto">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{ __('Đăng nhập tài khoản') }}</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8 col-xs-push-1">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> {{ __('Ghi nhớ mật khẩu') }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a href="./dashboard"><button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Đăng nhập') }}</button></a>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>{{ __('- HOẶC -') }}</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ __('Đăng nhập bằng
        Facebook') }}</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> {{ __('Đăng nhập bằng
        Google+') }}</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="./recover-password">{{ __('Quên mật khẩu') }}</a><br>
    <a href="./register" class="text-center">{{ __('Đăng ký tài khoản mới') }}</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@include('application::Layouts.script')
