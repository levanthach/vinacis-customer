@extends("application::Layouts.layout")
@section('content')
<section class="content-header">
      <h1>
        {{ __('500 Error Page') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="#">{{ __('Examples') }}</a></li>
        <li class="active">{{ __('500 error') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="error-page">
        <h2 class="headline text-red">{{ __('500') }}</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-red"></i> {{ __('Oops! Something went wrong.') }}</h3>

          <p>
            {{ __('We will work on fixing that right away.
            Meanwhile, you may') }} <a href="../../index.html">{{ __('return to dashboard') }}</a> {{ __('or try using the search form.') }}
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    @endsection