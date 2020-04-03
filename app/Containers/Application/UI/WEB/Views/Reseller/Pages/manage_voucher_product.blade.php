@extends("application::Reseller.admin-layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   {{ __('Voucher') }}
    <small> {{ __('Quản lý voucher') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Voucher') }}</a></li>
    <li class="active">{{ __('Quản lý voucher') }}</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">{{ __('Data Table With Full Features') }}</h3>
           <button type="button" class="btn btn-success add-btn">{{ __('Thêm mới') }}</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <table id="example1" class="table table-bordered table-striped table-responsive" data-id-field="0">
            <thead>
              <tr>
                <th data-checkbox="true" class="not-sorft" width="1%"><input type="checkbox" id="select_all"></th>    
                <th width="2%">{{ __('ID') }}</th>
                <th>{{ __('Mã code')}}</th>
                <th>{{ __('Loại Voucher')}}</th>
                <th>{{ __('Mô tả')}}</th>
                <th>{{ __('Trình trạng') }}</th>
                <th>{{ __('Người sử dụng') }}</th>
                <th>{{ __('Ngày sử dụng') }}</th>
                <th>{{ __('Hạn sử dụng') }}</th>
                <th>{{ __('Hành động') }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
              
               <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>

                 <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
              
               <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>

                 <tr>
               <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
          
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
              
               <tr>
               <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Mã code') }}">Xy9D-fDlj-JK87</td>
                <td data-title="{{ __('Loại Voucher') }}">All Services</td>
                <td data-title="{{ __('Mô tả') }}">Giảm 500.00VNĐ</td>
                <td data-title="{{ __('Trình trạng') }}">Đã sử dụng
                </td>
                <td data-title="{{ __('Người sử dụng') }}">Lê Văn T</td>
                <td data-title="{{ __('Ngày sử dụng') }}">08/02/2020</td>
                <td data-title="{{ __('Hạn sử dụng') }}">30/06/2020</td>
                <td data-title="{{ __('Hành động') }}">
          
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection