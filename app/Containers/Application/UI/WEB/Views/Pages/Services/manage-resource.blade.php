@extends("application::Layouts.layout")
@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Resource') }}
    <small>{{ __('Quản lý resource') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>{{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Resource') }}</a></li>
    <li class="active">{{ __('Quản lý resource') }}</li>
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
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  
                  <th data-checkbox="true" width="1%" class="not-sorft"><input type="checkbox" id="select_all"></th>
                  <th width="2%">{{ __('ID') }}</th>
                  <th>{{ __('Loại Resource') }}</th>
                  <th>{{ __('Tên Resource') }}</th>
                  <th>{{ __('Thời gian') }}</th>
                  <th>{{ __('CPU') }}</th>
                  <th>{{ __('RAM') }}</th>
                  <th>{{ __('Ổ cứng') }}</th>
                  <th>{{ __('IP') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                   <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Loại Resource') }}">VPS</td>
                  <td data-title="{{ __('Tên Resource') }}">VPS 4.0
                  </td>
                  <td data-title="{{ __('Thời gian') }}">6 Tháng</td>
                  <td data-title="{{ __('CPU') }}">2core</td>
                  <td data-title="{{ __('RAM') }}">4GB</td>
                  <td data-title="{{ __('Ổ cứng') }}">SSD</td>
                  <td data-title="{{ __('IP') }}">192.168.0.1</td>
                </tr>

                <tr>
                   <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Loại Resource') }}">VPS</td>
                  <td data-title="{{ __('Tên Resource') }}">VPS 4.0
                  </td>
                  <td data-title="{{ __('Thời gian') }}">6 Tháng</td>
                  <td data-title="{{ __('CPU') }}">2core</td>
                  <td data-title="{{ __('RAM') }}">4GB</td>
                  <td data-title="{{ __('Ổ cứng') }}">SSD</td>
                  <td data-title="{{ __('IP') }}">192.168.0.1</td>
                </tr>

                <tr>
                   <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">01</td>
                  <td data-title="{{ __('Loại Resource') }}">VPS</td>
                  <td data-title="{{ __('Tên Resource') }}">VPS 4.0
                  </td>
                  <td data-title="{{ __('Thời gian') }}">6 Tháng</td>
                  <td data-title="{{ __('CPU') }}">2core</td>
                  <td data-title="{{ __('RAM') }}">4GB</td>
                  <td data-title="{{ __('Ổ cứng') }}">SSD</td>
                  <td data-title="{{ __('IP') }}">192.168.0.1</td>
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