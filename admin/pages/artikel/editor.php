<?php
    include '../.session/session.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator | Artikel</title>
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
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once "../.themepart/top-menu.php"; ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include_once "../.themepart/sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel Editor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../.utama/home.php">Home</a></li>
              <li class="breadcrumb-item active">Artikel Editor</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Simpan Artikel Baru</h3>
                <p class="text-sm mb-0 float-sm-right">
                  Melihat seluruh artikel, klik <a href="view_artikel.php">disini</a>
                </p>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action="conf/artikel/insert_artikel.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <!-- left column inside form-->
                  <div class="col-md-6">
                    <div class="card-body">
                      <div class="form-group col-sm-6" >
                        <label>Pilih Kategori</label>
                        <select class="form-control" name="kategori">
                          <option value="Acara">Acara</option>
                          <option value="Artikel">Artikel</option>
                          <option value="Berita">Berita</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="col-form-label">Judul</label>
                        <div>
                          <input type="text" class="form-control" name="judul" placeholder="judul">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- left column inside form-->
                  <div class="col-sm-6">
                    <div class="card-body">
                      <div class="form-group col-sm-12">
                        <label class="col-form-label">Tag</label>
                        <div>
                          <input type="text" class="form-control" name="tag" placeholder="tag">
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        <label>Upload Gambar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar" accept=".jpg, .png">
                          <label class="custom-file-label" class="col-sm-2 col-form-label">Ganti gambar</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pad col-sm-12">
                    <div class="mb-3 form-group col-sm-12">
                      <label>Text Editor</label>
                      <textarea class="textarea" name="isi"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-sm-right" name="simpan">Simpan</button>
                  <p class="text-sm mb-0">
                    Editor <a href="">dokumen: artikel, berita, dll.</a>
                  </p>
                </div>
              </form>
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
  
  <?php include_once "../.themepart/footer.php"; ?>

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
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>