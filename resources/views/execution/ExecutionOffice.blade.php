@extends('layouts.ExecutionLayouts')

@section('title')
  HR | مدیریت اجراات
@stop

 <link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/MOHE.png') }}" height="50" width="50" alt="HR logo" sizes></a></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->


    @section('leftNav')

    @stop
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START CONTENT -->
      <section id="content">
        
            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
              <div class="container">
                <div class="row">
                  <div class="col s12 m12 l12" align="right">
                    <h5 class="breadcrumbs-title">مدیریت اجراات</h5>
                    <ol class="breadcrumb">
                        <li><a href="execution">دشبورد</a></li>
                        
                        <li class="active">صفحه اصلی</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!--breadcrumbs end-->
            

            <!--start container-->
                @section('content')

                      <p class="caption" align="right">به مدیریت اجراات خوش آمدید</p>
                <div class="divider"></div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
             
                @stop
            <!--end container-->
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
