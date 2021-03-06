<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>RS UMI BAROKAH BOYOLALI</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- medical -->
<link rel="stylesheet" type="text/css" href="demo-categories/medical/css/medical.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="css/skins/skin-blue.css" data-style="styles"/>

</head>

<body>

 <div class="wrapper">

<?php 
  include "./themepart/header.php";
  // include "./themepart/rev-slider.php";
?>

<!--=================================
acara -->

<?php  
include "conf/connection.php";
date_default_timezone_set('Asia/Jakarta');

$kd_profil = $_GET['id'];
$hasil = mysqli_query($connect,"SELECT * FROM profil WHERE kd_profil='$kd_profil'");
while($show=mysqli_fetch_array($hasil)){
  ?>

<section id="acara" class="our-blog gray-bg page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="section-title line center text-center">
        <i><h6 class="subtitle"><a href="#"><br><?php echo $show['kategori'] ?></h6></i>
        <h2 class="title"><a href="#"><?php echo $show['judul'] ?></a></h2>
        </div>
      </div>
    </div>
    <div class="row">
   	<!-- Mengambil data dari database -->
    
    <!-- Menampilkan data ke HTML -->
      <div class="col-lg-12 col-md-12">
        <div class="blog-box blog-2 white-bg h-100 line center">
          <div class="blog-info">
            <h4> <a href="#"> <?php echo $show['judul'] ?></a></h4>
            <span class="post-category"><a href="#"><?php echo $show['kategori'] ?></a></span>
            <span><i class="fa fa-calendar-check-o"></i> <?php echo date('d-m-Y', strtotime($show['upload'])) ?> </span>
            <br>
            <div style="text-align: justify; width:100%; padding:8px;"><img style="float: left; margin:0 8px 4px 0;" width="40%" height="40%" src="images/profil/<?php echo $show['nm_foto'] ?>"><?php echo $show['deskripsi'] ?>
            </div>
          </div>
        </div>
      </div>
    <!-- ./Menampilkan data ke HTML -->
      <?php 
        } 
        //akhiri koneksi database
        $connect->close(); 
      ?>
    </div>
  </div>
</section>

<!--=================================
our-blog -->

<?php 
  include "./themepart/footer.php";
  // include "footer.html"; 
?>

</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- REVOLUTION JS FILES -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- revolution custom -->
<script src="revolution/js/revolution-custom.js"></script>

<!-- custom -->
<script src="js/custom.js"></script>

</body>
</html>
