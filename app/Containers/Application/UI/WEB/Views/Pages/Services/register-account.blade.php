@extends("application::Layouts.layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Tài khoản dịch vụ') }}
    <small>{{ __('Tạo tài khoản') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Dịch vụ') }}</a></li>
    <li class="active">{{ __('Tạo tài khoản') }}</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-6 col-xs-12 col-md-push-3">
       <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">{{ __('Tạo tài khoản dịch vụ') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">{{ __('Username') }}</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">{{ __('Password')}}</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputConfirmPassword3" class="col-sm-3 control-label">{{  __('Confirm Pass')}}</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">{{ __('Đăng ký') }}</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </div>
     
  </div>
</section>

@endsection