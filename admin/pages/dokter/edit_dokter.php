<?php
    include '../.session/session.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator | Dokter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../../dist/img/favicon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once '../.themepart/top-menu.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once '../.themepart/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data Dokter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../.utama/home.php">Beranda</a></li>
              <li class="breadcrumb-item active">Input Data Dokter</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Info Utama</h3>
              </div>
              <!-- /.card-header -->
              <?php
              	include "../../conf/conn.php";
              	$id_dokter=$_GET['id'];
              	$hasil = mysqli_query($connect,"select * from dokter WHERE id='$id_dokter'");
              	while($row=mysqli_fetch_array($hasil)){
              ?>

              <!-- form start -->
              <form role="form" form action="conf/dokter/update_dokter.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $row['id'] ?>" name="id_dokter" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $row['nama'] ?>" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $row['spesialis'] ?>" name="spesialis">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="number" class="form-control" value="<?php echo $row['no_hp'] ?>" name="tlp" onkeypress="return hanyaAngka(event)">
                  </div>
                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" name="alamat"><?php echo $row['alamat'] ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="exampleInputFile">Foto</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                      <!-- <label for="customFile">Custom File</label> -->
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foto_dokter">
                          <label class="custom-file-label" for="customFile">Pilih Foto</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-check-label">
                    <label class="form-check-label" for="exampleCheck1">Pastikan kembali semua data benar</label>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
         	 <?php } ?>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include_once '../.themepart/footer.php' ?>

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
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  function hanyaAngka(event) {
    var angka = (event.which) ? event.which : event.keyCode
    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
      return false;
    return true;
  }
</script>
</body>
</html>
