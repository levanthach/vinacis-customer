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
                <th>{{ __('Họ tên') }}</th>
                <th>{{ __('Công ty') }}</th>
                <th>{{ __('Email') }}</th>
                <th width="10%">{{ __('Hành động') }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ tên') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Công ty') }}">XYZ</td>
                <td data-title="{{ __('Email') }}">lethach150699@gmail.com</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-success" id="recharge-customer" data-toggle="modal" data-target="#modal-default">{{ __('Nạp tiền') }}</button>
                  
                </td>
              </tr>
               <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ tên') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Công ty') }}">XYZ</td>
                <td data-title="{{ __('Email') }}">lethach150699@gmail.com</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-success" id="recharge-customer" data-toggle="modal" data-target="#modal-default">{{ __('Nạp tiền') }}</button>
                  
                </td>
              </tr>
               <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ tên') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Công ty') }}">XYZ</td>
                <td data-title="{{ __('Email') }}">lethach150699@gmail.com</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-success" id="recharge-customer" data-toggle="modal" data-target="#modal-default">{{ __('Nạp tiền') }}</button>
                </td>
              </tr>
               <tr>
                <td data-title=""><input type="checkbox" name="select[]"></td>
                <td data-title="{{ __('ID') }}">02</td>
                <td data-title="{{ __('Họ tên') }}">Nguyễn Văn B</td>
                <td data-title="{{ __('Công ty') }}">XYZ</td>
                <td data-title="{{ __('Email') }}">lethach150699@gmail.com</td>
                <td data-title="{{ __('Hành động') }}">
                  <button type="button" class="btn btn-success" id="recharge-customer" data-toggle="modal" data-target="#modal-default">{{ __('Nạp tiền') }}</button>
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
{{-- Modal View --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Nạp tiền cho khách hàng</h4>
            </div>
            <div class="modal-body">
             <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="500.000">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-flat">VNĐ</button>
                    </span>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ __('Đóng') }}</button>
              <button type="button" class="btn btn-primary">{{ __('Nạp') }}</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      {{-- end modal --}}
</section>
@endsection