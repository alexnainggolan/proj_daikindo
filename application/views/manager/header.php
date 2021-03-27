<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=base_url('') ?>" type="image/png">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?=base_url('assets/fontawesome/css/fontawesome-all.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/bower_components/ionicons/css/ionicons.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/dist/css/skins/skin-blue.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/libs/DataTables/datatables.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">

  <!-- javascript -->
  <script src="<?=site_url('assets/js/jquery/jquery.min.js')?>"></script>
  <script src="<?=site_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
  <script src="<?=site_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
  <script src="<?=site_url('assets/js/numeral.min.js')?>"></script>
  <script src="<?=site_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
  <script src="<?=site_url('assets/sweetalert/sweetalert.min.js')?>"></script>
  <script src="<?=site_url('assets/libs/DataTables/datatables.min.js')?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
      <header class="main-header">
        <a href="<?=base_url() ?>" class="logo">
          <span class="logo-mini"><b>D</b>A</span>
          <span class="logo-lg"><b>Daikindo</b></span>
        </a>

        <nav class="navbar navbar-static-top">
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="fa fa-bars fa-lg"></span>
          </a>

          <div class="navbar-custom-menu" style="color:#ebebeb; margin-top:15px; margin-right:15px">
            <span><b><?=today() ?></b></span>
          </div>
        </nav>
      </header>
  </div>
</body>
</html>
