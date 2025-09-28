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
                <div class="info">
                  <span><?= session()->get('nom') ?></span>
                </div>
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
            <a href="#" class="nav-link active">
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
    <div class="content-wrapper p-3">
        

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

            <!-- Tableau -->
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title ?></h3>
                            <div class="card-tools d-flex align-items-center">
                                <a class="btn btn-app mr-2" href="<?= base_url('/fanampidirana')?>">
                                  <i class="fas fa-plus"></i> Hanampy
                                </a>
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Hitady">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Anarana</th>
                                        <th>Daty nahaterahana</th>
                                        <th>Toerana nahaterahana</th>
                                        <th>Sokajy</th>
                                        <th>Fahavelomana</th>
                                        <th>Ray</th>
                                        <th>Reny</th>
                                        <th>Nomerao Kopia</th>
                                        <th>CIN</th>
                                        <th>Fanambadiana</th>
                                        <th>Fonenana</th>
                                        <th>Asa</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($habitants as $h): ?>
                                    <tr data-id="<?= $h['idHabitant'] ?>">
                                        <td><?= $h['idHabitant'] ?></td>
                                        <td class="editable" data-field="nom_complet"><?= $h['nom_complet'] ?></td>
                                        <td class="editable" data-field="date_naissance"><?= $h['date_naissance'] ?></td>
                                        <td class="editable" data-field="lieu_naissance"><?= $h['lieu_naissance'] ?></td>
                                        <td><?= $h['sexe'] ?></td>
                                        <td class="editable" data-field="status"><?= $h['status'] ?></td>
                                        <td><?= $h['pere'] ?></td>
                                        <td><?= $h['mere'] ?></td>
                                        <td class="editable" data-field="num_copie"><?= $h['num_copie'] ?></td>
                                        <td class="editable" data-field="cin"><?= $h['cin'] ?></td>
                                        <td class="editable" data-field="situation_matrimoniale"><?= $h['situation_matrimoniale'] ?></td>
                                        <td class="editable" data-field="adresse"><?= $h['adresse'] ?></td>
                                        <td class="editable" data-field="profession"><?= $h['profession'] ?></td>
                                        <td>
                                            <a class="btn btn-app bg-primary edit-btn">
                                                <i class="fas fa-edit"></i> Hanova
                                            </a>
                                            <a class="btn btn-app bg-success save-btn d-none">
                                                <i class="fas fa-check"></i> Vita
                                            </a>
                                            <a class="btn btn-app bg-danger cancel-btn d-none">
                                                <i class="fas fa-times"></i> Ajanona
                                            </a>
                                            <a class="btn btn-app bg-danger delete-btn">
                                                <i class="fas fa-trash"></i> Hamafa
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            </div>
        </section>
    </div>

    <!-- Modal suppression -->
  <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordModalLabel">Fanamarinana famafana</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Mba ampidiro ny teny miafina anao hanamarinana ny famafana :</p>
          <input type="password" id="confirmPassword" class="form-control" placeholder="Mot de passe">
          <input type="hidden" id="deleteId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Supprimer</button>
        </div>
      </div>
    </div>
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
<!-- DataTables -->
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Fanovana ny table -->
<script>
  $(document).ready(function() {
      function activateRow(row) {
          row.find(".editable").each(function() {
              if (!$(this).find("input").length) { // éviter de recréer input
                  let value = $(this).text();
                  $(this).attr("data-original", value); // sauvegarde valeur initiale
                  $(this).html('<input type="text" class="form-control" value="' + value + '">');
              }
          });
          row.find(".edit-btn").addClass("d-none");
          row.find(".delete-btn").addClass("d-none");
          row.find(".save-btn, .cancel-btn").removeClass("d-none");
      }

      // Clic sur "Modifier"
      $(".edit-btn").click(function() {
          let row = $(this).closest("tr");
          activateRow(row);
      });

      // Double-clic sur une cellule éditable
      $(".editable").dblclick(function() {
          let row = $(this).closest("tr");
          activateRow(row);
      });

      // Clic sur "Annuler"
      $(".cancel-btn").click(function() {
          let row = $(this).closest("tr");

          row.find(".editable").each(function() {
              let original = $(this).attr("data-original");
              $(this).text(original);
          });

          row.find(".edit-btn").removeClass("d-none");
          row.find(".delete-btn").removeClass("d-none");
          row.find(".save-btn, .cancel-btn").addClass("d-none");
      });

      // Clic sur "Enregistrer"
      $(".save-btn").click(function() {
          let row = $(this).closest("tr");
          let id = row.data("id");
          let data = {};

          row.find(".editable").each(function() {
              let field = $(this).data("field");
              let value = $(this).find("input").val();
              data[field] = value;
              $(this).text(value); // afficher nouvelle valeur
          });

          $.ajax({
              url: "<?= base_url('mponina/update') ?>",
              type: "POST",
              data: { id: id, data: data },
              success: function(response) {
                  alert("✅ Vita soamatsara ny fanovana nataonao !");
                  location.reload();
              },
              error: function() {
                  alert("❌ Misy olana kely tamin'ny fanovana nataonao !");
              }
          });

          row.find(".edit-btn").removeClass("d-none");
          row.find(".save-btn, .cancel-btn").addClass("d-none");
      });
  });

  $('input[name="table_search"]').on("keyup", function () {
    let value = $(this).val().toLowerCase();

    $("table tbody tr").filter(function () {
        $(this).toggle(
            $(this).text().toLowerCase().indexOf(value) > -1
        );
    });
  });

  // Clic sur le bouton Supprimer
  $(".delete-btn").click(function() {
      let row = $(this).closest("tr");
      let id = row.data("id");
      $("#deleteId").val(id);
      $("#confirmPassword").val('');
      $("#passwordModal").modal('show');
  });

  // Confirmer suppression
  $("#confirmDeleteBtn").click(function() {
      let id = $("#deleteId").val();
      let password = $("#confirmPassword").val();

      $.ajax({
          url: "<?= base_url('mponina/delete') ?>",
          type: "POST",
          data: { id: id, password: password },
          success: function(response) {
              // let res = JSON.parse(response);
              if(response.success){
                  $('#passwordModal').modal('hide'); // ferme le modal
                  location.reload(); // recharge la page
              } else {
                  alert("❌ " + response.message);
              }
              $("#passwordModal").modal('hide');
          },
          error: function() {
              alert("❌ Nisy olana ny serveur !");
          }
      });
  });

</script>

</body>
</html>
