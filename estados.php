<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inddor online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <?php include 'addfile/cek-session.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"></b>INDOOR</b> Online</span>
    </a>

    <!-- Header Navbar -->
	<?php include("navbar.php");?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("menu.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i> Edital Paineis</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Estados</li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
	
    </div>

        <div class="box box-success">
          <div class="box-header with-border">
            <h4 class="box-tittle"><i class="fa fa-plus"></i> Cadastro de estados</h4>
              <div class="box-tools pull-right">
                  <a href="" data-toggle="modal" data-target="#modal-tambah-siswa"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Inserir</button></a>
              </div>
          </div>
          <div class="box-body">
          <div class="tampil-data-siswa"></div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <?php include("footer.php");?>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="addfile/estados/data-estados.js"></script>


<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

</body>
</html>
