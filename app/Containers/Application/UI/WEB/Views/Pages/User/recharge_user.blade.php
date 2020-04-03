@extends("application::Layouts.layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Người dùng') }}
    <small>{{ __('Nạp tiền vào tài khoản') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Người dùng') }}</a></li>
    <li class="active">{{ __('Nạp tiền tài khoản') }}</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-4">
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Nhập mã code tại đây!">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">{{ __('Nạp tiền') }}</button>
                </span>
          </div>
    </div>
  </div>
</section>

@endsection