@extends("application::Layouts.layout")
@section('content')
  <section class="content-header">
      <h1>
        {{ __('Thay đổi mật khẩu') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="#">{{ __('Tài khoản') }}</a></li>
        <li class="active">{{ __('Thay đổi mật khẩu') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
       
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom" style="padding: 30px">
                <form class="form-horizontal form-profile">
                  <div class="form-group">
                      <div class="col-md-6 col-md-push-3">
                        <div class="row">
                            <label for="inputName" class="col-sm-4 control-label">{{ __('Mật khẩu hiện tại:') }}</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="first-name">
                              <br>
                            </div>
                          </div>
                           <div class="row">
                             <label for="inputName" class="col-sm-4 control-label">{{ __('Mật khẩu mới:') }}</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="first-name"><br>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-8 col-sm-push-4">
                               <div class="alert alert-success">
                                  <strong>Lời khuyên cho một mật khẩu bảo mật</strong><br>Sử dụng cả ký tự in hoa &amp; ký tự thường<br>Bao gồm ít nhất một ký tự đặc biệt (# $ ! % &amp; etc...)<br>Không sử dụng mật khẩu quá đơn giản
                          </div>
                            </div>
                           
                          </div>
                           <div class="row">
                             <label for="inputName" class="col-sm-4 control-label">{{ __('Nhập lại mật khẩu mới:') }}</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="first-name">
                            </div>
                        </div>
  
                      </div>
                  </div>
                   <div class="form-group">
                          <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-info">Lưu thay đổi</button>
                            <button type="submit" class="btn btn-default">Hủy</button>
                          </div>
                        </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection