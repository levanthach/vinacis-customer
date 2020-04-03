@extends("application::Layouts.layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Resource') }}
    <small>{{ __('Đăng ký resource') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Resource') }}</a></li>
    <li class="active">{{ __('Đăng ký resource') }}</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-xs-12">
       <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">{{ __('Đăng ký resource mới') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="col-xs-12">
                <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('Resource') }}</label>

                  <div class="col-sm-4">
                    <select class="form-control">
                      <option>{{ __('Resource Pool') }}</option>
                      <option>{{ __('VPS') }}</option>
                    </select>
                  </div>
                </div> {{-- end form-group --}}

                  <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('Tên Resoure') }}</label>

                  <div class="col-sm-4">
                    <input type="text" name="resource_name" class="form-control" placeholder="VD: VPS1">
                  </div>
                </div> {{-- end form-group --}}
         

                 <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('Thời gian') }}</label>

                  <div class="col-sm-4">
                    <select class="form-control">
                      <option>{{ __('6 tháng') }}</option>
                      <option>{{ __('1 năm') }}</option>
                      <option>{{ __('2 năm') }}</option>
                      <option>{{ __('3 năm') }}</option>
                    </select>
                  </div>
                </div> {{-- end form-group --}}

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">{{ __('CPU') }}</label>

                  <div class="col-sm-4">
                    <input type="number" name="cpu-qty" min="1" class="form-control" value="1">
                  </div>
                </div> {{-- end form-group --}}
              <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('RAM') }}</label>

                  <div class="col-sm-4">
                    <input type="number" min="1" name="ram-qty" class="form-control" value="1">
                  </div>
                </div> {{-- end form-group --}}

               <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('Ổ cứng') }}</label>
                  <div class="col-sm-4">
                    <select class="form-control">
                      <option>{{ __('SSD') }}</option>
                      <option>{{ __('HDD') }}</option>
                    </select>
                  </div>
                </div> {{-- end form-group --}}

               <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('IP') }}</label>

                  <div class="col-sm-4">
                    <input type="number" name="ip_adress" class="form-control" min="1" value="1">
                  </div>
                </div> {{-- end form-group --}}
                 <div class="form-group">
                  <label class="col-sm-4 control-label">{{ __('Mã Voucher (nếu có)') }}</label>

                  <div class="col-sm-4">
                    <input type="text" name="voucher_code" class="form-control" placeholder="ZZZZ-ZZZZ">
                  </div>
                </div> {{-- end form-group --}}
              </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Đăng ký</button>
              </div>
              <!-- /.box-footer -->
            </form>
              </div>
          </div>

  </div>
</section>

@endsection