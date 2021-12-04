<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Telemetering Tirtarona</title>

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
      <span class="brand-text font-weight-light">Telemetering</span>
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
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Selamat Datang di Halaman Dashboard, Admin</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
          <!-- <div class="col-12 col-sm-6 col-md-3">
          </div> -->
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
              <h3>Data Sensor Telemetering</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body container-fluid">
                <div class="row">
                  <a href= "{{route('quality')}}" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Kualitas Udara</span>
                      </div>
                    </div>
                  </a>
                  <a href="{{route('weather')}}" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Cuaca</span>
                      </div>
                    </div>
                  </a>
                  <a href="{{route('wind')}}" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Keadaan Angin</span>
                      </div>
                    </div>
                  </a>
                  <!-- <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor NH3</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor NO2</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor Dust</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor DHT-22</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor Rain Gauge</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor Anemometer</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="btn col-12 col-sm-6 col-md-3 card-link active">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Sensor Wind Direction</span>
                        <span class="info-box-number"></span>
                      </div>
                    </div>
                  </a> -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header bg-primary">
              <h3>Tentang kami</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <h3>Sistem Informasi Telemetering Tirtarona</h3>
              <br>
              <p>Kampung tirta rona adalah kampung edukasi yang dibuat oleh masyarakat rw 7 tlogomas.
                Wisata edukasi kampung lingkungan tirta rona ini memiliki lahan IPAL komunal yang sering dikunjungi masyarakat 
                dari berbagai kepnetingan dan wilayah sampai skala internasional. IPAL komunal ini dikelola oleh 
                Yayasan IPLt Tirta Rona Tologomas Tirta Rona yang diketuai oleh Drs. Agus Gunarto, Mm. Kondisi saat ini, 
                taman wisata lingkungan tirta rona telah dilengkapi oleh beberapa sarana yang dapat mendukung kegiatan wisata edukasi kampung iklim.</p>
              </div>
              <div class="card-footer bg-gradient-primary"></div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
