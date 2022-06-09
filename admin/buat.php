<!DOCTYPE html>
<html lang="en">
  
  <head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Permainan SUMBAR - Home</title>
  
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  
</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include 'sidebar.php' ;?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  
  <!-- Main Content -->
  <div id="content">
    
    <?php include 'topbar.php' ;?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
      
      <!-- Page Heading -->
          <h1 class="h3 mb-1 text-gray-800"><center>DATA CARA MEMBUAT PERMAINAN </h1> 
          <hr>

          
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
        <div class="my-2"></div>
        <a href="form_buat.php" class="btn btn-info btn-icon-split">
          <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>
                  
                  <br>
                  <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data cara membuat Permaian</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php 
                  include "../koneksi.php" ; 
                  
                  $sql = mysqli_query($connect, "SELECT * FROM buat ORDER BY judul DESC");
                  $data = mysqli_fetch_array($sql);
                  $file = substr($data['judul']);

                  ;?>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tr>
                      <td><?php echo $data ['id'] ;?></td>
                      <td><?php echo $data ['judul'] ;?></td>
                      <td><?php echo $data ['artikel'] ;?></td>
                      <td><a href="edit_buat.php" class="btn btn-success btn-circle">
                    <i class="fas fa-check"></i>
                  </a>
                  <a href="lihat_buat.php" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
                      <a href="hapus_buat.php" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
                  </td>
                    </tr>
                    
                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                    </a>
                    
                    <!-- Bootstrap core JavaScript-->
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    
                    <!-- Core plugin JavaScript-->
                    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
                    
                    <!-- Custom scripts for all pages-->
                    <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
