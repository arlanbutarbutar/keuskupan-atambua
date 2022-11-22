<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Keuskupan Atambua</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->

  <link rel="shortcut icon" href="img/keuskupan.PNG">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Datatables -->
  <link href="css/datatables.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->

  <link href="css/style.css" rel="stylesheet">
  <?php
  include('view_user.php');
  ?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/leaflet.ajax.js"></script>



  <!-- header -->

  <div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-map-marker-alt text-primary me-2"></small>
          <small>Atambua 85702, Timor - NTT</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <small class="far fa-clock text-primary me-2"></small>
          <small><?php
                  date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

                  echo date('l, d-m-Y / H:i:s a'); //kombinasi jam dan tanggal
                  ?></small>
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-phone-alt text-primary me-2"></small>
          <small>(0389) 21547</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center mx-n2">

          <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://web.facebook.com/groups/2672717293051950/" target="_blank"><i class="fab fa-facebook-f"></i></a>

          <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://m.youtube.com/channel/UChvpMuRXiv7Pj0MNLYjA-WA" target="_blank"><i class="fab fa-youtube"></i></a>

          <a class="btn btn-square btn-link rounded-0" href="https://instagram.com/komsos_atambua?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->
  <?php
  menu();
  ?>


  <?php
  @$page = $_GET['page'];

  if ($page == "beranda") {
    beranda();
  } else if ($page == "gereja") {
    gereja();
  } else if ($page == "detailGereja") {
    detailGereja();
  } else if ($page == "daftar") {
    daftar();
  } else if ($page == "daftar1") {
    daftar1();
  } else if ($page == "detailDaftar") {
    detailDaftar();
  } else if ($page == "wilayah") {
    wilayah();
  } else if ($page == "detailWilayah") {
    detailWilayah();
  } else if ($page == "readmore") {
    readmore();
  } else if ($page == "loginnn") {
    loginnn();
  } else if ($page == "loginnn_op") {
    loginnn_op();
  } else if ($page == "infWil") {
    infWil();
  } else if ($page == "halamanAO") {
    halamanAO();
  } else if ($page == "kutipan") {
    kutipan();
  } else if ($page == "gallery") {
    gallery();
  } else if ($page == "uskup") {
    uskup();
  } else if ($page == "Romo") {
    Romo();
  } else if ($page == "Album") {
    Album();
  } else if ($page == "detailRomo") {
    detailRomo();
  } else if ($page == "detailGallery") {
    detailGallery();
  } else {
    beranda();
  }
  ?>











  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Datatales -->
  <script src="js/datatables.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CASihanCphq2R0nIAHMU1jpA_I9X2rk&callback=initialize" async defer></script>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/leaflet.ajax.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('#daftar').DataTable();
      $('#daftar1').DataTable();
      $('#gereja').DataTable();
    });
  </script>
</body>



<!-- Footer Start -->
<footer>



  <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Address</h5>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl.Nela Raya No. 17,Lalian Tolu Atambua 85702, Timor - NTT</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(0389) 21547</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>sekretariatka@yahoo.com</p>
          <div class="d-flex pt-2">

            <a class="btn btn-square btn-outline-light btn-social" href="https://instagram.com/komsos_atambua?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>

            <a class="btn btn-square btn-outline-light btn-social" href="https://web.facebook.com/groups/2672717293051950/" target="_blank"><i class="fab fa-facebook"></i></a>

            <a class="btn btn-square btn-outline-light btn-social" href="https://m.youtube.com/channel/UChvpMuRXiv7Pj0MNLYjA-WA" target="_blank"><i class="fab fa-youtube"></i></a>
            <!-- <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Quick Links</h5>
          <a class="btn btn-link" href="index.php?page=daftar">Paroki</a>
          <a class="btn btn-link" href="index.php?page=wilayah">Wilayah Keuskupan</a>
          <a class="btn btn-link" href="index.php?page=gereja">Lokasi Gereja</a>
          <a class="btn btn-link" href="index.php?page=readmore">Informasi</a>
          <a class="btn btn-link" href="#gallery">Gallery</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Gallery Keuskupan</h5>
          <div class="row g-2">
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/ktdrl.png" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/kotafoun.png" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/hanemasin.png" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/kada.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/kleseleon.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid rounded" src="img/gerejaaa/bolan.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">MGR.DOMINIKUS SAKU</h5>
          <p>"Vos Amici Mei Estis"</p>
          <p>(Kamu adalah sahabat-Ku, bdk. Yoh. 15: 14)</p>
          <p>sakudominikus@yahoo.co.id</p>
          <!--  <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="https://www.instagram.com/reinadoivan__/" target="_blank">Reinaldo Ivan</a>, All Right Reserved.<br>
            <div class="h-100 d-inline-flex align-items-center">
              <small class="far fa-clock text me-2"></small>
              <medium><?php
                      date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

                      echo date('l, d-m-Y / H:i:s a'); //kombinasi jam dan tanggal
                      ?></medium>
            </div>
          </div>

          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By: <a href="https://www.instagram.com/reinadoivan__/" target="_blank"> Reinaldo Ivan</a>
            <br>Distributed By: <a href="https://web.facebook.com/groups/2672717293051950/" target="_blank">Keuskupan Atambua</a>



          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <div id="share-sossial-buttons">


    <!-- Untuk Email -->


    <!-- Untuk Facebook -->



  </div>

</footer>

</html>