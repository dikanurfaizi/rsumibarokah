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
  // include "header.html";
  require 'themepart/header.php';
  // include "./themepart/rev-slider.php";
?>

<!--=================================
berita -->

<section id="acara" class="our-blog gray-bg page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="section-title line center text-center">
        <h6 class="subtitle"><br><br>Profil</br></br></h6> 
        <h2 class="title">Rumah Sakit Umi Barokah</h2>
        </div>
      </div>
    </div>
    <div class="row">
    <?php 
      include "conf/connection.php";

      date_default_timezone_set('Asia/Jakarta');

      $hasil = mysqli_query($connect,"SELECT * FROM profil ORDER BY kd_profil DESC LIMIT 0,9");
      while($row=mysqli_fetch_array($hasil)){ 
    ?>
      <div class="col-lg-4 col-md-4 sm-mb-30">
        <div class="blog-box blog-2 white-bg h-100">
          <img width="100%" height="100%" class="img-fluid" src="images/profil/<?php echo $row['nm_foto'] ?>" alt="">
          <div class="blog-info">
            <span class="post-category"><a href="#">Profil</a></span>
            <h4> <a href="#"> <?php echo $row['judul'] ?></a></h4>
            <p><?php echo $row['tag'] ?></p>
            <span><i class="fa fa-calendar-check-o"></i> <?php echo date('d-m-Y', strtotime($row['upload'])) ?> </span>
            <a class="button icon-color" href="detail_profil.php?id=<?php echo $row['kd_profil'] ?>">Read More<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<!--=================================
our-blog -->

<?php 
  require_once "themepart/footer.php";
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
