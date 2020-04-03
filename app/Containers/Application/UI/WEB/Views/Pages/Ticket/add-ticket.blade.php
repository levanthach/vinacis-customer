@extends("application::Layouts.layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Add ticket') }}
    <small>{{ __('support customer') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Home') }}Ticket</a></li>
    <li class="active">{{ __('Home') }}Add Ticket</li>
  </ol>
</section>

<section class="content">
 <div class="row">
  <!-- left column -->
  <div class="col-md-12">

    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Tạo ticket mới') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">{{ __('Họ tên') }}</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Họ tên" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputTopic1">{{ __('Tiêu đề') }}</label>
            <input type="text" required class="form-control" id="exampleInputTopic1" placeholder="Tiêu đề">
          </div>
          <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
          <div class="form-group">
            <label for="exampleInputFile">{{ __('File input') }}</label>
            <input type="file" id="exampleInputFile">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">{{ __('Gửi') }}</button>
        </div>
    </form>
  </div>
  <!-- /.box -->
</div>
</div>
</section>

@endsection