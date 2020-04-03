@include('application::Layouts.header')

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
   <img src="{{asset('dist/img/logo-w.png')}}" class="user-image img-responsive text-center" alt="Logo Vinacis" style="margin: auto">
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">{{ __('Đăng ký một tài khoản mới') }}</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Họ tên">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Nhập lại password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8 col-xs-push-1">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> {{ __('Đồng ý với các') }} <a href="#">{{ __('điều khoản') }}</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Đăng ký') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>{{ __('- HOẶC -') }}</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ __('Đăng ký bằng Facebook') }}
        </a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> {{ __('Đăng ký bằng
        Google+') }}</a>
    </div>

    <a href="./admin" class="text-center">{{ __('Đã có tài khoản. Đăng nhập ngay!') }}</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

@include('application::Layouts.script')
