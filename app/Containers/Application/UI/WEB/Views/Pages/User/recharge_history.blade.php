@extends("application::Layouts.layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Người dùng') }}
    <small>{{ __('Lịch sử thanh toán/nạp tiền') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Người dùng') }}</a></li>
    <li class="active">{{ __('Lịch sử thanh toán/nạp tiền') }}</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <!-- left column -->
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">{{ __('Lịch sử thanh toán/nạp tiền') }}</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                    <!-- Date and time range -->
                    <div class="form-group">
                      <label>{{ __('Date range button:') }}</label>

                      <div class="input-group">
                        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                          <span>
                            <i class="fa fa-calendar"></i>{{ __(' Date range picker') }}
                          </span>
                          <i class="fa fa-caret-down"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.form group -->

                </div>{{--  end col-2 --}}
                <div class="col-md-4">
                   <!-- Date -->
              <div class="form-group">
                <label>{{ __('Date From:') }}</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                </div>

                <div class="col-md-4">
                   <!-- Date -->
              <div class="form-group">
                <label>{{ __('Date To:') }}</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker2">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                </div>
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{ __('Lịch sử giao dịch') }}</h3>
               <button type="button" class="btn btn-success add-btn">{{ __('Thêm mới') }}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive" data-id-field="0">
                <thead>
                <tr>
                  
                    <th data-checkbox="true" width="1%" class="not-sorft"><input type="checkbox" id="select_all"></th>
                  
                  <th width="2%">{{ __('ID') }}</th>
                  <th>{{ __('Thời gian') }}</th>
                  <th>{{ __('Loại giao dịch') }}</th>
                  <th>{{ __('Mô tả') }}</th>
                  <th>{{ __('Số tiền') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Thời gian') }}">12/03/2020</td>
                  <td data-title="{{ __('Loại giao dịch') }}">Thanh toán
                  </td>
                  <td data-title="{{ __('Mô tả') }}">Tiền dịch vụ tháng 2</td>
                  <td data-title="{{ __('Số tiền') }}">2.000.00 VNĐ</td>
                </tr>

                  <tr>
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Thời gian') }}">12/03/2020</td>
                  <td data-title="{{ __('Loại giao dịch') }}">Thanh toán
                  </td>
                  <td data-title="{{ __('Mô tả') }}">Tiền dịch vụ tháng 2</td>
                  <td data-title="{{ __('Số tiền') }}">2.000.00 VNĐ</td>
                </tr>

                 <tr>
                 <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Thời gian') }}">12/03/2020</td>
                  <td data-title="{{ __('Loại giao dịch') }}">Thanh toán
                  </td>
                  <td data-title="{{ __('Mô tả') }}">Tiền dịch vụ tháng 2</td>
                  <td data-title="{{ __('Số tiền') }}">2.000.00 VNĐ</td>
                </tr>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>

    </div>
</section>

@endsection