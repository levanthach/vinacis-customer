@extends("application::Layouts.layout")
@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ __('Ticket') }}
    <small>{{ __('Quản lý ticket') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
    <li><a href="#">{{ __('Ticket') }}</a></li>
    <li class="active">{{ __('Quản lý ticket') }}</li>
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
                  
                    <th data-checkbox="true" width="1%" class="not-sorft"><input type="checkbox" id="select_all"></th>
                  
                  <th width="2%">{{ __('ID') }}</th>
                  <th>{{ __('Họ tên') }}</th>
                  <th>{{ __('Chủ đề') }}</th>
                  <th>{{ __('Người phản hồi') }}</th>
                  <th>{{ __('Trạng thái') }}</th>
                  <th>{{ __('Phản hồi lần cuối') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                 
                  <td data-title="{{ __('ID') }}">02</td>
                  <td data-title="{{ __('Họ tên') }}">Trident</td>
                  <td data-title="{{ __('Chủ đề') }}">Internet
                    Explorer 4.0
                  </td>
                  <td data-title="{{ __('Người phản hồi') }}">Win 95+</td>
                  <td data-title="{{ __('Trạng thái') }}"> 4</td>
                  <td data-title="{{ __('Phản hồi lần cuối') }}">X</td>
                </tr>
                <tr>
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">02</td>
                  <td data-title="{{ __('Họ tên') }}">Trident</td>
                  <td data-title="{{ __('Chủ đề') }}">Internet
                    Explorer 4.0
                  </td>
                  <td data-title="{{ __('Người phản hồi') }}">Win 95+</td>
                  <td data-title="{{ __('Trạng thái') }}"> 4</td>
                  <td data-title="{{ __('Phản hồi lần cuối') }}">X</td>
                </tr>
                <tr>
                
                  <td data-title=""><input type="checkbox" name="select[]"></td>
                  <td data-title="{{ __('ID') }}">02</td>
                  <td data-title="{{ __('Họ tên') }}">Trident</td>
                  <td data-title="{{ __('Chủ đề') }}">Internet
                    Explorer 4.0
                  </td>
                  <td data-title="{{ __('Người phản hồi') }}">Win 95+</td>
                  <td data-title="{{ __('Trạng thái') }}"> 4</td>
                  <td data-title="{{ __('Phản hồi lần cuối') }}">X</td>
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