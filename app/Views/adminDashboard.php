<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fokontany | Fifehezana</title>
  <link rel="icon" type="image/png" href="../../dist/img/logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('plugins/daterangepicker/daterangepicker.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css')?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <img src="<?= base_url('dist/img/logo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="#" class="nav-link active">
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
            <a href="<?= base_url('/antotanisa')?>" class="nav-link">
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fifehezana</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Fandraisana</a></li>
              <li class="breadcrumb-item active">Fifehezana</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $nbFamille ?></h3>
                <p>Isan'ny ankohonana</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer" data-type="famille">Misimisy kokoa <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $vivants ?></h3>
                <p>Olona velona</p>
              </div>
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <a href="#" class="small-box-footer" data-type="vivants">Misimisy kokoa <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $nbAdulte ?></h3>
                <p>Olona feno taona</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer" data-type="adultes">Misimisy kokoa <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $decedes ?></h3>
                <p>Olona maty</p>
              </div>
              <div class="icon">
                <i class="fa fa-skull"></i>
              </div>
              <a href="#" class="small-box-footer" data-type="decedes">Misimisy kokoa <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Graphique des habitants -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fivoarana isam-bolana ny isan'ny mponina sy ny fahavelomana</h3>
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
                <canvas id="areaChart" style="min-height: 250px; height: 250px; cursor:pointer;"
                    onclick="window.location.href='<?= base_url('/antotanisa') ?>'">
                </canvas>
              </div>
            </div>
            <!-- /.card -->
            
          </section>
          <!-- /.Left col -->
          <section class="col-lg-5 connectedSortable">

            <div id="tableContainer" class="table-responsive" style="height: 500px; overflow: auto;"></div>

            <!-- Map card -->
            <div class="card bg-gradient-primary" style="display: none;">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="display:none;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 <a href="#">Fokontany</a>.</strong>
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
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('plugins/sparklines/sparkline.js')?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('plugins/moment/moment.min.js')?>"></script>
<script src="<?= base_url('plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<!-- Summernote -->
<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('dist/js/pages/dashboard.js')?>"></script>
<script>

  $(function () {
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d');

      var areaChartData = {
          labels  : <?= json_encode($mois) ?>,
          datasets: [
              {
                  label               : 'Mponina',
                  backgroundColor     : 'rgba(0,123,255,0.5)',
                  borderColor         : 'rgba(0,123,255,1)',
                  pointRadius         : 3,
                  data                : <?= json_encode($habitants) ?>
              },
              {
                  label               : 'Ndaosin\'ny fahafatesana',
                  backgroundColor     : 'rgba(220,53,69,0.5)',
                  borderColor         : 'rgba(220,53,69,1)',
                  pointRadius         : 3,
                  data                : <?= json_encode($deces) ?>
              }
          ]
      };

      var areaChartOptions = {
          maintainAspectRatio : false,
          responsive : true,
          scales: {
              x: { grid: { display: false } },
              y: { beginAtZero: true }
          }
      };

      new Chart(areaChartCanvas, {
          type: 'line', // ou 'bar'
          data: areaChartData,
          options: areaChartOptions
      });
  });

  document.querySelectorAll('.small-box-footer').forEach(link => {
    link.addEventListener('click', function(e){
        e.preventDefault();
        const type = this.dataset.type;

        fetch("<?= base_url('adminDashboard/getDetails') ?>/" + type)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('tableContainer');
                container.innerHTML = ''; // vider l'ancien tableau

                if(data.rows.length === 0) {
                    container.innerHTML = '<p>Aucune donnée disponible.</p>';
                    return;
                }

                // Création du tableau
                const table = document.createElement('table');
                table.className = 'table table-head-fixed text-nowrap table-bordered table-striped';

                // En-tête
                const thead = document.createElement('thead');
                const trHead = document.createElement('tr');
                data.columns.forEach(col => {
                    const th = document.createElement('th');
                    th.textContent = col;
                    trHead.appendChild(th);
                });
                thead.appendChild(trHead);
                table.appendChild(thead);

                // Corps du tableau
                const tbody = document.createElement('tbody');
                data.rows.forEach(row => {
                    const tr = document.createElement('tr');
                    data.columns.forEach(col => {
                        const td = document.createElement('td');
                        // Associer la clé de row à la colonne
                        const key = Object.keys(row)[data.columns.indexOf(col)];
                        td.textContent = row[key] || '';
                        tr.appendChild(td);
                    });
                    tbody.appendChild(tr);
                });
                table.appendChild(tbody);

                container.appendChild(table);
            });
    });
});

</script>
</body>
</html>
