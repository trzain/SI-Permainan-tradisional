<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>cara membuat permainan</title>

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
<form id="formbuat" method="post" action="buat_proses.php" enctype="multipart/form-data">
<div class="col-lg"> <center>
  <p>
    <label>Judul :</label>
    <textarea style="width:300px; height:50px" name="judul" id="judul" class="form-control" rows="1" placeholder="Isi Judul"></textarea>
  </div>
</p>
          <br>
   <p>
     <center>
       <label>Artikel :</label>
       <textarea style="width:800px; height:450px" name="artikel" id="artikel" class="form=control" rows="3" placeholder="Isi Artikel"></textarea>
      </p>
       <!-- Content Row -->
<br>
          <div class="row">
          <div class="my-2">
          
            <input type="submit" id="submit" class="btn btn-success btn-lg" value="Simpan">
            </input>
            <input href="admin/buat.php" class="btn btn-danger btn-lg" value="Batal">
            </input>
          </div>
            </div>
</form>          <!-- Page Heading -->
            

          </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    
    
</div>
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<?php include 'footer.php' ;?> 

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
