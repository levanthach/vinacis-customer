@extends("application::Reseller.admin-layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   {{ __('Hóa đơn') }}
    <small> {{ __('Quản lý hóa đơn') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Ticket') }}</a></li>
    <li class="active">{{ __('Lịch sử Ticket') }}</li>
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
                <th>{{ __('Tên khách hàng')}}</th>
                <th>{{ __('Tên dịch vụ') }}</th>
                <th>{{ __('Ngày đăng ký') }}</th>
                <th>{{ __('Ngày đáo hạn') }}</th>
                <th>{{ __('Tổng tiền') }}</th>
                <th>{{ __('Trạng thái') }}</th>
                <th>{{ __('Hành động') }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>

               <tr>
                <td><input type="checkbox" name="select[]"></td>
                 <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
                
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>

               <tr>
                <td><input type="checkbox" name="select[]"></td>
                 <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
            
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select[]"></td>
                 <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
            
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
    
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Tên khách hàng') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Tên dịch vụ') }}">VPS VIP</td>
                <td data-title="{{ __('Ngày đăng ký') }}">09/02/2020
                </td>
                <td data-title="{{ __('Ngày đáo hạn') }}">09/08/2020</td>
                <td data-title="{{ __('Tổng tiền') }}">$459.30</td>
                <td data-title="{{ __('Trạng thái') }}">PAID</td>
                <td data-title="{{ __('Hành động') }}">
                   <button type="button" class="btn btn-info">{{ __('View') }}</button>
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