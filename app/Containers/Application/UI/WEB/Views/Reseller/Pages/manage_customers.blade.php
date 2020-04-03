@extends("application::Reseller.admin-layout")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   {{ __('Khách hàng') }}
    <small> {{ __('Quản lý khách hàng') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Khách hàng') }}</a></li>
    <li class="active">{{ __('Quản lý khách hàng') }}</li>
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
                <th>{{ __('Họ') }}</th>
                <th>{{ __('Tên') }}</th>
                <th>{{ __('Công ty') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Dịch vụ') }}</th>
                <th>{{ __('Ngày tạo') }}</th>
                <th>{{ __('Trạng thái') }}</th>
                <th>{{ __('Hành động') }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ') }}">Nguyễn</td>
                <td data-title="{{ __('Tên') }}"> Văn A</td>
                <td data-title="{{ __('Công ty') }}">XYZ
                </td>
                <td data-title="{{ __('Email') }}">VPS</td>
                <td data-title="{{ __('Dịch vụ') }}">test@gmail.com</td>
                <td data-title="{{ __('Ngày tạo') }}">09/08/2020</td>
                <td data-title="{{ __('Trạng thái') }}">Active</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
                <tr>
                 <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ') }}">Nguyễn</td>
                <td data-title="{{ __('Tên') }}"> Văn A</td>
                <td data-title="{{ __('Công ty') }}">XYZ
                </td>
                <td data-title="{{ __('Email') }}">VPS</td>
                <td data-title="{{ __('Dịch vụ') }}">test@gmail.com</td>
                <td data-title="{{ __('Ngày tạo') }}">09/08/2020</td>
                <td data-title="{{ __('Trạng thái') }}">Active</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
                <tr>
                 <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ') }}">Nguyễn</td>
                <td data-title="{{ __('Tên') }}"> Văn A</td>
                <td data-title="{{ __('Công ty') }}">XYZ
                </td>
                <td data-title="{{ __('Email') }}">VPS</td>
                <td data-title="{{ __('Dịch vụ') }}">test@gmail.com</td>
                <td data-title="{{ __('Ngày tạo') }}">09/08/2020</td>
                <td data-title="{{ __('Trạng thái') }}">Active</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-info">{{ __('View') }}</button>
                  <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </td>
              </tr>
                <tr>
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ') }}">Nguyễn</td>
                <td data-title="{{ __('Tên') }}"> Văn A</td>
                <td data-title="{{ __('Công ty') }}">XYZ
                </td>
                <td data-title="{{ __('Email') }}">VPS</td>
                <td data-title="{{ __('Dịch vụ') }}">test@gmail.com</td>
                <td data-title="{{ __('Ngày tạo') }}">09/08/2020</td>
                <td data-title="{{ __('Trạng thái') }}">Active</td>
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