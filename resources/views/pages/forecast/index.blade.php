<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta http-equiv="refresh" content="20"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Pemantauan Cuaca Tirtarona</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kedaireka</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a href="{{route('tele1')}}" class="nav-link active">
                  <p>Device Telemetering 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <p>Device Telemetering 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <p>Device Telemetering 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forecast')}}" class="nav-link active">
                  <p>Weather Forecast</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link active">
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link active">
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Prakiraan Cuaca</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="info-box mb-3 col-12 col-sm-6 col-md-3">
          <center>
            <div id="openweathermap-widget-2"></div>
          </center>
        </div>
        <!-- Data Ramalan per hari -->
        <div class="info-box mb-3 col-12 col-sm-6 col-md-2">
         <div class="info-box-content">
            <center>
              <span class="info-box-text">
                @foreach($data_forecast_today as $item)
                  Cuaca Hari ini : {{$item['main']}} <br><br>
                @endforeach
              </span>
            </center>
          </div>
        </div>
        <!-- Data Ramalan 8 Hari (per 3 jam) -->
        <div class="col-lg-12">
          <center>
            <!-- <div id="openweathermap-widget-1"></div> -->
            <a class="weatherwidget-io" href="https://forecast7.com/en/n7d97112d63/malang/" data-label_1="MALANG" data-label_2="RAMALAN CUACA" data-theme="original" >MALANG RAMALAN CUACA</a>
          </center>
        </div>
        <div class="info-box mb-3 col-12 col-sm-6 col-md-5">
          <div class="info-box-content">
            <!-- <center> -->
              <span class="info-box-text">
                @php
                  $no = 1;
                @endphp
                @foreach($data_forecast as $item)
                  {{$no++}}.
                  @foreach($item['weather'] as $w)
                    Cuaca : {{$w['main']}} ||
                  @endforeach
                    Datetime : {{$item['dt_txt']}} <br>
                @endforeach
              </span>
              <span class="info-box-number"></span>
            <!-- </center> -->
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; </strong> Made With Love.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Weather Forecast Widget -->
<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
</body>
</html>

<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
  window.myWidgetParam.push({
    id: 2,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-2',
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);
  })();
</script>
<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  
  window.myWidgetParam.push({
    id: 1,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-1',  
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);  
  })();
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>