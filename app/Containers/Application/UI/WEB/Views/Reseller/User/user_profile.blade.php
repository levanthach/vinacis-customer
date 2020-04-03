@extends("application::Reseller.admin-layout")
@section('content')
  <section class="content-header">
      <h1>
        {{ __('Chỉnh sửa tài khoản') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="#">{{ __('Tài khoản') }}</a></li>
        <li class="active">{{ __('Chỉnh sửa tài khoản') }}</li>
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
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Họ & tên đệm') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="first-name">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Địa chỉ') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="address">
                        </div>
                      </div>
                  </div>

                   <div class="form-group">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Tên') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="last-name">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Quận/Huyện') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="district">
                        </div>
                      </div>
                  </div>


                 <div class="form-group">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Công ty') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="company">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Tỉnh/Thành phố') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="city">
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Địa chỉ Email') }}</label>
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Quốc gia') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="nation">
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Thông tin thanh toán') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="info_payment" value="Sử dụng thông tin mặc định" disabled>
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Mã vùng') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="area_code">
                        </div>
                      </div>
                  </div>


                  <div class="form-group">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Mã số thuế') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="tax_code">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Điện thoại') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="phone_number">
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