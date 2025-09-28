<?php

use App\Controllers\AdminDashboard;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../../dist/img/logo.png">
  <title>Fokontany | Fifehezana</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('/adminDashboard') ?>" class="nav-link">Fandraisana</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fokontany</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-toggle="dropdown">
                <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image" style="width:30px; height:30px; margin-right:10px;">
                <span><?= session()->get('nom') ?></span>
            </a>
            <div class="dropdown-menu"
                style="background-color: #dc3545;"
                onmouseover="this.style.backgroundColor='#ff1a1a'" 
                onmouseout="this.style.backgroundColor='#dc3545'">
                <a class="dropdown-item" style="background-color: #dc3545; color:azure;" 
                    onmouseover="this.style.backgroundColor='#ff1a1a'" 
                    onmouseout="this.style.backgroundColor='#dc3545'" 
                    href="<?= base_url('/adminConnexion/logout') ?>">
                    Hivoaka
                </a>
            </div>
        </li>
       </ul>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('/adminDashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Fifehezana
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/mponina')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Mponina
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Antontan'isa
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?= $title ?></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Fandraisana</a></li>
                  <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Chart card -->
                    <div class="col-md-6">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Antontan'isan'ny fahavelomana</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart1" style="min-height: 250px; height: 250px;"></canvas>
                            </div>
                        </div>

                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Antontan'isan'ny olona afaka mifidy</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart3" style="min-height: 250px; height: 250px;"></canvas>
                            </div>
                        </div>

                      <!-- Graphique des décès -->
                        <div class="card card-danger">
                          <div class="card-header">
                              <h3 class="card-title">Fivoarana isam-bolana ny fahavelomana</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <canvas id="decesChart" style="min-height: 250px; height: 250px;"></canvas>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Antotan'isan'ny fanambadiana</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart2" style="min-height: 250px; height: 250px;"></canvas>
                            </div>
                        </div>

                        <!-- Graphique des habitants -->
                        <div class="card card-success">
                          <div class="card-header">
                              <h3 class="card-title">Fivoarana isam-bolana ny isan'ny mponina</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <canvas id="habitantsChart" style="min-height: 250px; height: 250px;"></canvas>
                          </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>
    </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 <a href="<?= base_url('/adminDashboard')?>">Fokontany</a>.</strong>
    Tsy azo amidy.
    <div class="float-right d-none d-sm-inline-block">
      <b>Dingana</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- Fanovana ny table -->
<script>
    $(function () {
        var pieChartCanvas = $('#pieChart1').get(0).getContext('2d');
        var pieData = {
            labels: ['Velona', 'Maty'],
            datasets: [{
                data: [<?= $vivants ?>, <?= $decedes ?>],
                backgroundColor: ['#28a745', '#f56954'],
            }]
        };

        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };

        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    $(function () {
        var pieChartCanvas = $('#pieChart2').get(0).getContext('2d');
        var pieData = {
            labels: ['Manambady', 'Célibataire', 'Maty vady'],
            datasets: [{
                data: [<?= $marie ?>, <?= $celibat ?>, <?= $veuf ?>],
                backgroundColor: ['#fd7e14', '#007bff', '#6f42c1' ],
            }]
        };

        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };

        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    $(function () {
        var pieChartCanvas = $('#pieChart3').get(0).getContext('2d');
        var pieData = {
            labels: ['Tsy ampy taona', 'Feno taona'],
            datasets: [{
                data: [<?= $mineurs ?>, <?= $adultes ?>],
                backgroundColor: ['#ffc107', '#00c0ef' ],
            }]
        };

        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };

        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });

    $(function () {
    // Graphique des habitants
    var ctxHabitants = $('#habitantsChart').get(0).getContext('2d');
    new Chart(ctxHabitants, {
        type: 'line',
        data: {
            labels: <?= json_encode($mois) ?>,
            datasets: [{
                label: 'Mponina',
                backgroundColor: 'rgba(0,123,255,0.5)',
                borderColor: 'rgba(0,123,255,1)',
                pointRadius: 3,
                data: <?= json_encode($habitants) ?>
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: {
                x: { grid: { display: false } },
                y: { beginAtZero: true }
            }
        }
    });

    // Graphique des décès
    var ctxDeces = $('#decesChart').get(0).getContext('2d');
    new Chart(ctxDeces, {
        type: 'line',
        data: {
            labels: <?= json_encode($mois) ?>,
            datasets: [{
                label: 'Ndaosin\'ny fahafatesana',
                backgroundColor: 'rgba(220,53,69,0.5)',
                borderColor: 'rgba(220,53,69,1)',
                pointRadius: 3,
                data: <?= json_encode($deces) ?>
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: {
                x: { grid: { display: false } },
                y: { beginAtZero: true }
            }
        }
    });
  });

</script>

</body>
</html>
