<?php
function menu()
{
?>
  <!-- MENU -->


  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
      <img src="icon/keuskupan.png" style="width: 40px;">
      <h2 class="m-0 text-primary">&nbsp;Keuskupan Atambua</h2>

    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index_admin.php" class="nav-item nav-link ">HOME</a>
        <a href="index_admin.php?page=profil" class="nav-item nav-link">PROFIL</a>
        <a href="index_admin.php?page=gereja" class="nav-item nav-link">ADD LOCATION</a>
        <a href="index_admin.php?page=daftar" class="nav-item nav-link">DAFTAR PAROKI</a>
        <a href="index_admin.php?page=wilayah" class="nav-item nav-link">WILAYAH</a>
        <a href="keluar.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" class="smoothScroll" onclick="return confirm('Anda Yakin Ingin Keluar?')">LOGOUT</a>


      </div>

  </nav>


  <!-- MENU LINKS -->

<?php
}
function beranda()
{
?>

  <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative" data-dot="<img src='img/100.jpg'>">
        <img class="img-fluid" src="img/100.jpg" alt="">
        <div class="owl-carousel-inner">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h1 class="display-2 text-white animated slideInDown">KEUSKUPAN ATAMBUA</h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-3">LETAK GEOGRAFIS GEREJA KATOLIK PADA WILYAH KEUSKUPAN ATAMBUA</p>
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative" data-dot="<img src='img/101.jpg'>">
        <img class="img-fluid" src="img/101.jpg" alt="">
        <div class="owl-carousel-inner">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h1 class="display-2 text-white animated slideInDown">KEUSKUPAN ATAMBUA</h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-3">LETAK GEOGRAFIS GEREJA KATOLIK PADA WILYAH KEUSKUPAN ATAMBUA</p>
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative" data-dot="<img src='img/102.jpg'>">
        <img class="img-fluid" src="img/102.jpg" alt="">
        <div class="owl-carousel-inner">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h1 class="display-2 text-white animated slideInDown">KEUSKUPAN ATAMBUA</h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-3">LETAK GEOGRAFIS GEREJA KATOLIK PADA WILYAH KEUSKUPAN ATAMBUA</p>
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <center> <a href="index_admin.php?page=tambahKutipan" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Tambah Ayat Alkitab</a>



    <a href="index_admin.php?page=tambahInfKeus" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Informasi Keuskupan</a>
  </center>



  <br>

  <center>
    <a href="index_admin.php?page=tambahKeuskupan" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Tambah Keuskupan</a>
    <a href="index_admin.php?page=tambahParoki" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Tambah Paroki</a>
  </center>
  <br>
  <center>
    <a href="index_admin.php?page=tambahRomo" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Tambah Romo</a>
  </center>




  <br>
  <div class="card">
    <div class="card-footer">





    <?php
  }

  function hapusAdmin()
  {
    $username = $_GET['username'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from admin where username = '$username'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function profil()
  {
    include('koneksi.php');
    $username = $_SESSION['SESS_USERNAME'];
    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username'");
    $data = mysqli_fetch_array($query);
    $nama = $data["nama"];

    $query2 = mysqli_query($con, "SELECT * FROM admin");
    $row = mysqli_num_rows($query2);

    ?>

      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">TAMBAH OPERATOR</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>


      <!-- 
  <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header tit-up">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Tambah Operator</h3>
      </div>
      <div class="modal-body customer-box">

       
        <div class="tab-content">
          <div class="tab-pane active" id="login1">
            <form class="form-horizontal" action="tambah.php" method="post">
              <div class="form-group">
                <div class="col-sm-12">Username
                  <input class="form-control" style="color:black;" name="username" placeholder="Username" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Password
                  <input class="form-control"  style="color:black;" name="password" placeholder="password" type="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Nama
                  <input class="form-control" style="color:black;" name="nama" placeholder="Nama" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10">
               <a><button type="submit" name="tAdmin" class="btn btn-light btn-radius btn-brd grd1"
                 >Simpan</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div> -->


      <!-- <div class="modal fade" id="ubahPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header tit-up">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Ubah Password</h3>
      </div>
      <div class="modal-body customer-box">

       
        <div class="tab-content">
          <div class="tab-pane active" id="Login">
            <form class="form-horizontal" action="edit.php?id=<?php echo $username; ?>" method="post">
              <div class="form-group">
                <div class="col-sm-12">Password Lama
                  <input class="form-control"  style="color:black;" name="passlama" placeholder="password" type="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Password Baru
                  <input class="form-control"  style="color:black;" name="passbaru" placeholder="password" type="password">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-10">
                  <a><button type="submit" name="ePassword" class="btn btn-light btn-radius btn-brd grd1">
                    Simpan
                  </button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div> -->

      <!--  <section id="testimonial" data-stellar-background-ratio="0.5">

          <div class="row">
                 <div class="col-md-12 col-sm-12">
                      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                      <h2>Profil Admin</h2>  </div>
                 </div>

       </div>
  </section> -->


      <!-- CONTACT -->
      <!--  <hr/>
 <center><h2>SILAHKAN TAMBAH OPERATOR DAN EDIT PROFIL ADMIN</h2></center>

 <hr/> -->

      <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">

              <article class="z"> <a href="index_admin.php?page=profilTambahOp" class="btn btn-dark">Tambah Operator</a>
                <hr />
                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-4">
                      <center>
                        <h2 class="card-header">Semua Admin</h2>
                      </center>

                      <div class="card-body">

                        <table class="table table-hover ">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no = 0;
                            for ($i = 0; $i < $row; $i++) {
                              $data2 = mysqli_fetch_array($query2);
                              $user = $data2["username"];
                              $nl = $data2["nama"];

                              $no++; ?>
                              <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $nl; ?> </td>
                                <?php
                                if ($username != $user) {
                                ?>
                                  <td><a href="index_admin.php?page=hapusAdmin&username=<?php echo $user; ?>" onclick="return confirm('Hapus Admin Ini?')" class="btn btn-danger">Hapus</a></td><?php } ?>

                              </tr>
                            <?php

                            }



                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12">
              <div class="col-md-19 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">



                  <article class="z">
                    <form class="form-horizontal" action="edit.php?id=<?php echo $username; ?>" method="post">
                      <div class="form-group">

                        <div class="row">
                          <div class="col-sm-10">
                            <a href="index_admin.php?page=profilEditPass" class="btn btn-dark">Ubah Password</a>
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-md-12">
                            <div class="card mb-4">
                              <center>
                                <h2 class="card-header">Edit Profil Admin</h2>
                              </center>

                              <div class="card-body">

                                <div class="col-sm-12">Username
                                  <input class="form-control" style="color:black;" name="username" value="<?php echo $username; ?>" type="text">
                                </div>

                                <div class="form-group">
                                  <div class="col-sm-12">Nama
                                    <input class="form-control" style="color:black;" name="nama" value="<?php echo $nama; ?>" type="text">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-sm-10">
                                    <a><button type="submit" name="editAdmin" class="btn btn-primary btn-radius btn-brd grd1">
                                        Simpan
                                      </button><a />
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

              </div>

              </form>

            </div>
          </div>



        </div>


    </div>
  </div>
  </article>

  </section>


<?php
  }

  function keuskupan()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM keuskupan");
    $data = mysqli_fetch_array($query);
    $nama = $data["nama_keuskupan"];


?>

  <section id="testimonial" data-stellar-background-ratio="0.5">

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
          <h2>Data keuskupan</h2>
        </div>
      </div>

    </div>
  </section>
  <!-- CONTACT -->
  <section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-sm-12">

          <div class="col-md-12 col-sm-12">
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
              <h2>Nama keuskupan : keuskupan <?php echo $nama; ?></h2>
            </div>
          </div>
          <form class="form-horizontal" action="edit.php?id=<?php echo $data["id_keuskupan"]; ?>" method="post">
            <div class="form-group">
              <div class="col-sm-12">Ubah Nama keuskupan
                <input class="form-control" style="color:black;" name="nama" value="<?php echo $nama; ?>" type="text">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-10">
                <button type="submit" name="editkeuskupan" class="btn btn-primary btn-radius btn-brd grd1">
                  Simpan
                </button>
              </div>
            </div>

          </form>
          <hr />

        </div>

      </div>
    </div>
  </section>


<?php
  }
  function daftar()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM daftar_paroki");
?>

  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">DAFTAR PAROKI</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
        </ol>
      </nav>
    </div>
  </div>

  <<!-- div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
        <h2>
          <center>DAFTAR PAROKI KEUSKUPAN ATAMBUA
        </h2>
      </div>
      </center>
    </div> -->
    <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header tit-up">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <center>
              <h3 class="modal-title">Tambah Daftar Paroki Keuskupan Atambua </h3>
            </center>
          </div>

          <div class="modal-body customer-box">

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="Login">
                <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">


                  <div class="form-group">
                    <div class="col-sm-12">Paroki
                      <input class="form-control" style="color:black;" name="Paroki" placeholder="Paroki" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Pelindung
                      <input class="form-control" style="color:black;" name="pelindung" placeholder="pelindung" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Buku Baptis
                      <input class="form-control" style="color:black;" name="buku_baptis" placeholder="Buku Baptis" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Nama Pastor
                      <input class="form-control" style="color:black;" name="nama_pastor" placeholder="Nama Pastor" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Jumlah Umat
                      <input class="form-control" style="color:black;" name="jumlah_umat" placeholder="Jumlah Umat" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Dekenat
                      <input class="form-control" style="color:black;" name="dekenat" placeholder="Dekenat" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Alamat
                      <textarea class="form-control" style="color:black;" name="alamat" placeholder="Alamat" type="text" required data-validation-required-message="Masukan Data"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-10">
                      <button type="submit" name="tParoki" class="btn btn-success btn-radius btn-brd grd1">
                        Simpan
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 
    <section id="testimonial" data-stellar-background-ratio="0.5">
            <div class="row">
                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4>Bangunan Keagamaan</h4>  </div>
                   </div> -->

    </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
            <div class="btn btn-dark " class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Tahun</a>
              <div class="dropdown-menu ">

                <a href="index_admin.php?page=daftar" class="dropdown-item">2022</a>
                <a href="index_admin.php?page=daftar1" class="dropdown-item">2023</a>
                <a href="index_admin.php?page=daftar2" class="dropdown-item">2024</a>
                <a href="index_admin.php?page=daftar3" class="dropdown-item">2025</a>

              </div>
            </div>

            <a href="index_admin.php?page=daftarTambah" class="btn btn-dark">Tambah Daftar Paroki</a>



            <hr>
            <article class="x">
              <div class="card">



                <center>
                  <h2>DAFTAR PAROKI TAHUN 2022</h2>
                </center>
                <div class="card-footer">

                  <div class="table-responsive">
                    <table class="display table table-hover border-success " id="daftar">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Paroki</th>
                          <th scope="col">Pelindung</th>
                          <th scope="col">Buku Baptis</th>
                          <th scope="col">Pastor Paroki</th>
                          <th scope="col">Jumlah Umat</th>
                          <th scope="col">Dekenat</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Aksi</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)) {
                          $id = $data["id_par"];
                          $Paroki = $data["Paroki"];
                          $pelindung = $data["pelindung"];
                          $buku = $data["buku_baptis"];
                          $pastor = $data["nama_pastor"];
                          $jumlah = $data["jumlah_umat"];
                          $jumlah = $data["dekenat"];
                          $alamat = $data["alamat"];
                          $no++; ?>
                          <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <!--   <?php echo $nama; ?>  -->

                            <td><?php echo $data["Paroki"]; ?> </td>
                            <td><?php echo $data["pelindung"]; ?> </td>
                            <td><?php echo $data["buku_baptis"]; ?> </td>
                            <td><?php echo $data["nama_pastor"]; ?> </td>
                            <td><?php echo $data["jumlah_umat"]; ?> </td>
                            <td><?php echo $data["dekenat"]; ?> </td>
                            <td><?php echo $data["alamat"]; ?> </td>


                            <td> <a href="index_admin.php?page=detailDaftar&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                              <br><br><a href="index_admin.php?page=hapusDaftar&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                            </td>

                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
    </section>
  <?php
  }
  function hapusDaftar()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from daftar_paroki where id_par = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function detailDaftar()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM daftar_paroki WHERE id_par = '$id'");
    $data = mysqli_fetch_array($query);
    $Paroki = $data["Paroki"];
  ?>
    <!--   <section id="testimonial" data-stellar-background-ratio="0.5">
              <div class="row">
                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Tambah Daftar Paroki Pada Keuskupan Atambua</h2>  </div>
                     </div> -->

    </div>
    </section>
    <!-- ABOUT -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT DAFTAR PAROKI</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>



      <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">

            <div class="col-md-6 col-sm-12">
              <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <div class="col-sm-12">Paroki
                    <input class="form-control" style="color:black;" name="Paroki" value="<?php echo $Paroki; ?>" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Pelindung
                    <input class="form-control" style="color:black;" name="pelindung" value="<?php echo $data["pelindung"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Buku Baptis
                    <input class="form-control" style="color:black;" name="buku_baptis" value="<?php echo $data["buku_baptis"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Nama Pastor
                    <input class="form-control" style="color:black;" name="nama_pastor" value="<?php echo $data["nama_pastor"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Jumlah Umat
                    <input class="form-control" style="color:black;" name="jumlah_umat" value="<?php echo $data["jumlah_umat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Dekenat
                    <input class="form-control" style="color:black;" name="dekenat" value="<?php echo $data["dekenat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Alamat
                    <input class="form-control" style="color:black;" name="alamat" value="<?php echo $data["alamat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" name="eParoki" class="btn btn-primary btn-radius btn-brd grd1">
                      Simpan Perubahan
                    </button>
                  </div>
                </div>
              </form>
            </div>


          </div>
        </div>
        <!-- 
                     <div class="col-md-6 col-sm-12">
                          <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                               <img src="images/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
                               <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                   <div class="col-sm-12">Pilih Foto
                                     <input type="file" name="foto" class="file" required data-validation-required-message="Masukan Data">
                                    </div>
                                 </div>

                                 <div class="row">
                                   <div class="col-sm-10">
                                     <button type="submit" name="eFotoKesehatan" class="btn btn-primary btn-radius btn-brd grd1">
                                       Ganti Foto
                                     </button>
                                   </div>
                                 </div>
                               </form>
                          </div>
                     </div> -->

        </div>
        </div>
      </section>


    <?php
  }
  function daftar1()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM daftar_paroki1");
    ?>

      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">DAFTAR PAROKI</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>


      <<!-- div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <h2>
              <center>DAFTAR PAROKI KEUSKUPAN ATAMBUA
            </h2>
          </div>
          </center>
        </div> -->
        <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                  <h3 class="modal-title">Tambah Daftar Paroki Keuskupan Atambua </h3>
                </center>

              </div>

              <div class="modal-body customer-box">

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                    <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">


                      <div class="form-group">
                        <div class="col-sm-12">Paroki
                          <input class="form-control" style="color:black;" name="Paroki" placeholder="Paroki" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Pelindung
                          <input class="form-control" style="color:black;" name="pelindung" placeholder="pelindung" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Buku Baptis
                          <input class="form-control" style="color:black;" name="buku_baptis" placeholder="Buku Baptis" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Nama Pastor
                          <input class="form-control" style="color:black;" name="nama_pastor" placeholder="Nama Pastor" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Jumlah Umat
                          <input class="form-control" style="color:black;" name="jumlah_umat" placeholder="Jumlah Umat" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Dekenat
                          <input class="form-control" style="color:black;" name="dekenat" placeholder="Dekenat" type="text" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">Alamat
                          <textarea class="form-control" style="color:black;" name="alamat" placeholder="Alamat" type="text" required data-validation-required-message="Masukan Data"></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-10">
                          <button type="submit" name="tParoki1" class="btn btn-success btn-radius btn-brd grd1">
                            Simpan
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 
    <section id="testimonial" data-stellar-background-ratio="0.5">
            <div class="row">
                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4>Bangunan Keagamaan</h4>  </div>
                   </div> -->

        </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
            <div class="btn btn-dark " class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Tahun</a>
              <div class="dropdown-menu m-0">
                <a href="index_admin.php?page=daftar" class="dropdown-item">2022</a>
                <a href="index_admin.php?page=daftar1" class="dropdown-item">2023</a>
                <a href="index_admin.php?page=daftar2" class="dropdown-item">2024</a>
                <a href="index_admin.php?page=daftar3" class="dropdown-item">2025</a>

              </div>
            </div>
            <a href="index_admin.php?page=daftarTambah1" class="btn btn-dark">Tambah Daftar Paroki</a>



            <hr>
            <article class="x">
              <div class="card">



                <center>
                  <h2>DAFTAR PAROKI TAHUN 2023</h2>
                </center>
                <div class="card-footer">

                  <div class="table-responsive">
                    <table class="display table table-hover border-success" id="daftar1">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Paroki</th>
                          <th scope="col">Pelindung</th>
                          <th scope="col">Buku Baptis</th>
                          <th scope="col">Pastor Paroki</th>
                          <th scope="col">Jumlah Umat</th>
                          <th scope="col">Dekenat</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Aksi</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)) {
                          $id = $data["id_par"];
                          $Paroki = $data["Paroki"];
                          $pelindung = $data["pelindung"];
                          $buku = $data["buku_baptis"];
                          $pastor = $data["nama_pastor"];
                          $jumlah = $data["jumlah_umat"];
                          $jumlah = $data["dekenat"];
                          $alamat = $data["alamat"];
                          $no++; ?>
                          <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <!--   <?php echo $nama; ?>  -->

                            <td><?php echo $data["Paroki"]; ?> </td>
                            <td><?php echo $data["pelindung"]; ?> </td>
                            <td><?php echo $data["buku_baptis"]; ?> </td>
                            <td><?php echo $data["nama_pastor"]; ?> </td>
                            <td><?php echo $data["jumlah_umat"]; ?> </td>
                            <td><?php echo $data["dekenat"]; ?> </td>
                            <td><?php echo $data["alamat"]; ?> </td>


                            <td> <a href="index_admin.php?page=detailDaftar1&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                              <br><br><a href="index_admin.php?page=hapusDaftar1&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                            </td>

                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
    </section>
  <?php
  }
  function hapusDaftar1()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from daftar_paroki1 where id_par = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function detailDaftar1()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM daftar_paroki1 WHERE id_par = '$id'");
    $data = mysqli_fetch_array($query);
    $Paroki = $data["Paroki"];
  ?>
    <!--   <section id="testimonial" data-stellar-background-ratio="0.5">
              <div class="row">
                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Tambah Daftar Paroki Pada Keuskupan Atambua</h2>  </div>
                     </div> -->

    </div>
    </section>
    <!-- ABOUT -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT DAFTAR PAROKI</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>



      <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">

            <div class="col-md-6 col-sm-12">
              <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <div class="col-sm-12">Paroki
                    <input class="form-control" style="color:black;" name="Paroki" value="<?php echo $Paroki; ?>" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Pelindung
                    <input class="form-control" style="color:black;" name="pelindung" value="<?php echo $data["pelindung"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Buku Baptis
                    <input class="form-control" style="color:black;" name="buku_baptis" value="<?php echo $data["buku_baptis"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Nama Pastor
                    <input class="form-control" style="color:black;" name="nama_pastor" value="<?php echo $data["nama_pastor"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Jumlah Umat
                    <input class="form-control" style="color:black;" name="jumlah_umat" value="<?php echo $data["jumlah_umat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Dekenat
                    <input class="form-control" style="color:black;" name="dekenat" value="<?php echo $data["dekenat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">Alamat
                    <input class="form-control" style="color:black;" name="alamat" value="<?php echo $data["alamat"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" name="eParoki1" class="btn btn-primary btn-radius btn-brd grd1">
                      Simpan Perubahan
                    </button>
                  </div>
                </div>
              </form>
            </div>


          </div>
        </div>
        <!-- 
                     <div class="col-md-6 col-sm-12">
                          <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                               <img src="images/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
                               <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                   <div class="col-sm-12">Pilih Foto
                                     <input type="file" name="foto" class="file" required data-validation-required-message="Masukan Data">
                                    </div>
                                 </div>

                                 <div class="row">
                                   <div class="col-sm-10">
                                     <button type="submit" name="eFotoKesehatan" class="btn btn-primary btn-radius btn-brd grd1">
                                       Ganti Foto
                                     </button>
                                   </div>
                                 </div>
                               </form>
                          </div>
                     </div> -->

        </div>
        </div>
      </section>





    <?php
  }
  function gerejaTambah()
  {
    require 'koneksi.php';
    ?>
      <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">

        <center>
          <div class="col-md-6">
            <div class="card mb-4">
              <h2 class="card-header">Tambah Informasi Lokasi Gereja dan Stasi</h2>
              <div class="card-body">
                <div class="mb-3">

                  <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                      <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                          <label for="id-paroki" class="form-label">Paroki</label>
                          <select name="id-paroki" class="form-control" id="id-paroki">
                            <option value="">Pilih Paroki</option>
                            <?php $selectParoki = mysqli_query($con, "SELECT * FROM tbl_paroki ORDER BY nama_paroki ASC");
                            foreach ($selectParoki as $data_sp) : ?>
                              <option value="<?= $data_sp['id_parokiii'] ?>"><?= $data_sp['nama_paroki'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Gereja</label>
                          <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Gereja" data-validation-required-message="Masukan Data">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Inforamsi Gereja dan Jadwal Kegiatan</label>
                          <textarea class="mce" id="exampleFormControlTextarea1" name="informasi" data-validation-required-message="Masukan Data"></textarea>
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Jumlah Umat</label>
                          <input input type="number" name="umat" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah Umat" data-validation-required-message="Masukan Data">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                          <input input type="text" name="latitude" class="form-control" id="exampleFormControlInput1" placeholder="Latitude" data-validation-required-message="Masukan Data">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                          <input input type="text" name="longitude" class="form-control" id="exampleFormControlInput1" placeholder="Longitude" data-validation-required-message="Masukan Data">
                        </div>

                        <div class="mb-3">
                          <label for="formFile" class="form-label">Foto</label>
                          <input class="form-control" type="file" id="formFile" class="file" name="foto" data-validation-required-message="Masukan Data">
                        </div>

                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tGereja">Simpan</button>
                      </form>
                    </div>
                  </div>
                </div>
        </center>
      </div>
    <?php
  }
  function gereja()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM gereja_stasi ORDER BY id_gereja DESC");
    ?>

      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">LOKASI GEREJA</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- 
    <section id="testimonial" data-stellar-background-ratio="0.5">
            <div class="row">
                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4>Bangunan Keagamaan</h4>  </div>
                   </div> -->

      </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
            <a href="index_admin.php?page=gerejaTambah" class="btn btn-dark">Tambah Informasi Lokasi Gereja dan Stasi</a>
            <hr />
            <script>
              var marker;

              function initialize() {
                var imageTK = 'icon/te.png';

                // Variabel untuk menyimpan informasi (desc)
                var infoWindow = new google.maps.InfoWindow;
                //  Variabel untuk menyimpan peta Roadmap
                var mapOptions = {
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }



                // Pembuatan petanya
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                // Variabel untuk menyimpan batas kordinat
                var bounds = new google.maps.LatLngBounds();

                // Pengambilan data dari database
                <?php
                $que = mysqli_query($con, "SELECT * FROM gereja_stasi");
                while ($dat = mysqli_fetch_array($que)) {
                  $id_pemer = $dat['id_gereja'];
                  $lat = $dat['latitude'];
                  $lon = $dat['longitude'];
                  $sekolah = $dat['nama_stasi'];

                  echo ("addMarkerTK($lat, $lon,'$sekolah');\n");
                }
                ?>

                // Proses membuat marker
                function addMarkerTK(lat, lng, info) {
                  var lokasi = new google.maps.LatLng(lat, lng);
                  bounds.extend(lokasi);
                  var marker = new google.maps.Marker({
                    map: map,
                    position: lokasi,
                    icon: imageTK
                  });
                  map.fitBounds(bounds);
                  bindInfoWindow(marker, map, infoWindow, info);
                }


                // Menampilkan informasi pada masing-masing marker yang diklik
                function bindInfoWindow(marker, map, infoWindow, html) {
                  google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                  });
                }
              }
              google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <div id="map-canvas" style="width:100%;height:350px;"></div>

            <article class="x">
              <br><br>
              <div class="card">


                <center>
                  <h2>LOKASI GEREJA DAN STASI</h2>
                </center>

                <div class="card-footer">

                  <div class="table-responsive">
                    <table class="display table table-striped table-borderless table-sm text-dark" id="gereja">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">No</th>
                          <th scope="col" class="text-center">Nama Gereja dan Stasi</th>
                          <th scope="col" class="text-center">Informasi</th>
                          <th scope="col" class="text-center">Pastor</th>
                          <th scope="col" class="text-center">Umat</th>
                          <th scope="col" class="text-center">Aksi</th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                          $id = $data["id_gereja"];
                          $nama = $data["nama_stasi"];
                        ?>
                          <tr>
                            <th scope="row" class="text-center"><?php echo $no; ?></th>
                            <td><?php echo $nama; ?> </td>
                            <td><?php echo $data["informasi"]; ?> </td>
                            <td>
                              <?php $takeRomo = mysqli_query($con, "SELECT * FROM tbl_romo WHERE id_gereja='$id'");
                              if (mysqli_num_rows($takeRomo) > 0) {
                                while ($dataRomo = mysqli_fetch_assoc($takeRomo)) {
                                  echo "- " . $dataRomo['nama_pastor'] . "<br>";
                                }
                              }
                              ?>
                            </td>
                            <td><?php echo $data["jumlah_umat"]; ?> </td>
                            <td class="d-flex justify-content-center">
                              <a href="index_admin.php?page=detailGereja&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                              <a href="index_admin.php?page=hapusGereja&id=<?php echo $id; ?>&ft=<?= $data['foto'] ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
                            </td>
                          </tr>
                        <?php $no++;
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          </article>
    </section>
  <?php
  }
  function hapusGereja()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    unlink('img/fotokeag/' . $_GET['ft']);
    mysqli_query($con, "DELETE FROM gereja_stasi WHERE id_gereja = '$id'");
    echo "<script>alert('Berhasil dihapus!');history.go(-1);</script>";
  }
  function detailGereja()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM gereja_stasi JOIN tbl_paroki ON gereja_stasi.id_paroki=tbl_paroki.id_parokiii WHERE gereja_stasi.id_gereja = '$id'");
    $data = mysqli_fetch_array($query);
    $nama = $data["nama_stasi"];
    $idp = $data["id_parokiii"];
  ?>
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT INFORMASI GEREJA</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php?page=gereja">Gereja</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Ubah Gereja</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="about" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="id-paroki" class="form-label">Paroki</label>
                <select name="id-paroki" class="form-control" id="id-paroki" required>
                  <option value="<?= $data['id_paroki'] ?>"><?= $data['nama_paroki'] ?></option>
                  <?php $selectParoki = mysqli_query($con, "SELECT * FROM tbl_paroki WHERE id_parokiii!='$idp' ORDER BY nama_paroki ASC");
                  foreach ($selectParoki as $data_sp) : ?>
                    <option value="<?= $data_sp['id_parokiii'] ?>"><?= $data_sp['nama_paroki'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Nama Gereja
                  <input type="hidden" name="namaOld" value="<?= $data['nama_stasi'] ?>">
                  <input class="form-control" style="color:black;" name="nama" value="<?php echo $nama; ?>" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Informasi Gereja dan Jadwal Kegiatan
                  <textarea class="mce" style="color:black;" name="informasi" type="text"> <?php echo  $data["informasi"]; ?> </textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Jumlah Umat
                  <input class="form-control" style="color:black;" name="umat" value="<?php echo $data["jumlah_umat"]; ?>" type="number" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Latitude
                  <input class="form-control" style="color:black;" name="latitude" value="<?php echo $data["latitude"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Longitude
                  <input class="form-control" style="color:black;" name="longitude" value="<?php echo $data["longitude"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-10">
                  <button type="submit" name="eGereja" class="btn btn-primary btn-radius btn-brd grd1">
                    Simpan Perubahan
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="about-image">
              <img src="img/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
              <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="hidden" name="fotoOld" value="<?= $data['foto'] ?>">
                    <input type="file" name="foto" class="file" required data-validation-required-message="Masukan Data">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" name="eFotoKeagamaan" class="btn btn-primary btn-radius btn-brd grd1">
                      Ganti Foto
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>


  <?php
  }
  function wilayah()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM wilayah");
  ?>
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">WILAYAH KEUSKUPAN</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">


            <article class="x">
              <div class="card">

                <div class="card-footer">

                  <center>
                    <h2>WILAYAH KEUSKUPAN ATAMBUA</h2>
                  </center>

                  <hr>
                  <table class="table table-hover ">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">Paroki</th>
                        <th scope="col">Stasi</th>
                        <th scope="col">Pastor</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      while ($data = mysqli_fetch_array($query)) {
                        $id = $data["id"];
                        $nama = $data["nama"];
                        $no++; ?>
                        <tr>
                          <th scope="row"><?php echo $no; ?></th>
                          <td><?php echo $nama; ?> </td>
                          <?php $takeParoki = mysqli_query($con, "SELECT * FROM tbl_paroki WHERE tbl_paroki.id_wilayah='$id'");
                          if (mysqli_num_rows($takeParoki) > 0) {
                            $countParoki = mysqli_num_rows($takeParoki);
                            echo "<td>" . $countParoki . "</td>";
                            $rowParoki = mysqli_fetch_assoc($takeParoki);
                            $id_paroki = $rowParoki['id_parokiii'];
                            $takeStasi = mysqli_query($con, "SELECT * FROM gereja_stasi WHERE id_paroki='$id_paroki'");
                            if (mysqli_num_rows($takeStasi) > 0) {
                              $countStasi = mysqli_num_rows($takeStasi);
                              echo "<td>" . $countStasi . "</td>";
                              $rowStasi = mysqli_fetch_assoc($takeStasi);
                              $id_gereja = $rowStasi['id_gereja'];
                              $takeRomo = mysqli_query($con, "SELECT * FROM tbl_romo WHERE id_gereja='$id_gereja'");
                              if (mysqli_num_rows($takeRomo) > 0) {
                                $countPastor = mysqli_num_rows($takeRomo);
                                echo "<td>" . $countPastor . "</td>";
                              }
                            } else {
                              echo "<td></td>";
                              echo "<td></td>";
                            }
                          } else {
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                          }
                          ?>
                          <td>
                            <a href="index_admin.php?page=detailWilayah&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                          </td>
                          <!--   <a href="index_admin.php?page=hapusWilayah&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td> -->
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

  <?php
  }
  function hapusWilayah()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from wilayah where id = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function detailWilayah()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM wilayah WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
    $nama = $data["nama"];
  ?>
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT INFORMASI WILAYAH </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-sm-12">
            <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-12">Wilayah
                  <input class="form-control" style="color:black;" name="nama" value="<?php echo $data["nama"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Informasi
                  <textarea class="mce" style="color:black;" name="informasi" type="text"> <?php echo  $data["informasi"]; ?> </textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Longitude
                  <input class="form-control" style="color:black;" name="longitude" value="<?php echo $data["longitude"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Latitude
                  <input class="form-control" style="color:black;" name="latitude" value="<?php echo $data["latitude"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-sm-10">
                  <button type="submit" name="eWilayah" class="btn btn-primary btn-radius btn-brd grd1">
                    Simpan Perubahan
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6 col-sm-12">
            <!-- 
                   <script>
                    var marker;
                      function initialize() {
                        var imageTK= '3.png';

                        // Variabel untuk menyimpan informasi (desc)
                        var infoWindow = new google.maps.InfoWindow;
                      //  Variabel untuk menyimpan peta Roadmap
                        var mapOptions = {
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        // Pembuatan petanya
                        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                        // Variabel untuk menyimpan batas kordinat
                        var bounds = new google.maps.LatLngBounds();

                        // Pengambilan data dari database
                        <?php
                        $que = mysqli_query($con, "select * from wilayah where id='$id'");
                        while ($dat = mysqli_fetch_array($que)) {
                          $id = $dat['id'];
                          $lat = $dat['latitude'];
                          $lon = $dat['longitude'];
                          $sekolah = $dat['nama'];

                          echo ("addMarkerTK($lat, $lon,'$sekolah');\n");
                        }
                        ?>

                          // Proses membuat marker
                          function addMarkerTK(lat, lng, info) {
                              var lokasi = new google.maps.LatLng(lat, lng);
                              bounds.extend(lokasi);
                              var marker = new google.maps.Marker({
                                  map: map,
                                  position: lokasi,
                                  icon: imageTK
                              });
                              map.fitBounds(bounds);
                              bindInfoWindow(marker, map, infoWindow, info);
                           }


                        // Menampilkan informasi pada masing-masing marker yang diklik
                        function bindInfoWindow(marker, map, infoWindow, html) {
                          google.maps.event.addListener(marker, 'click', function() {
                            infoWindow.setContent(html);
                            infoWindow.open(map, marker);
                          });
                        }
                        }
                      google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                   <div id="map-canvas"  style="width:80%;height:300px;"></div> -->


          </div>

        </div>
      </div>
    </section>



  <?php
  }
  function profilTambahOp()
  {
  ?>
    <center>
      <div class="container-fluid bg-light overflow-hidden px-lg-0" id="tambahAdmin" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
          <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
              <div class="p-lg-5 ps-lg-0">
                <h6 class="text-primary"></h6>
                <h1 class="mb-4">Tambah Operator</h1>
                <!--  <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                <div class="tab-pane active" id="login1">
                  <form class="form-horizontal" action="tambah.php" method="post">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input name="username" type="text" class="form-control" id="name" placeholder="Username">
                          <label for="name">Username</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input name="password" type="password" class="form-control" id="email" placeholder="Password">
                          <label for="email">Password</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <input name="nama" type="text" class="form-control" id="subject" placeholder="Nama">
                          <label for="subject">Nama</label>
                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tAdmin">Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </center>

  <?php
  }
  function profilEditPass()
  {
    include('koneksi.php');
    $username = $_SESSION['SESS_USERNAME'];
    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username'");
    $data = mysqli_fetch_array($query);
    $nama = $data["nama"];

    $query2 = mysqli_query($con, "SELECT * FROM admin");
    $row = mysqli_num_rows($query2);

  ?>


    <div class="container-fluid bg-light overflow-hidden px-lg-0" id="ubahPassword" style="margin: 6rem 0;">
      <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
            <div class="p-lg-5 ps-lg-0">
              <h6 class="text-primary"></h6>
              <h1 class="mb-4">Ubah Password</h1>
              <div class="tab-pane active" id="Login">

                <form class="form-horizontal" action="edit.php?id=<?php echo $username; ?>" method="post" id="cols">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="password" class="form-control" name="passlama" placeholder="password">
                        <label>Password Lama</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="password" class="form-control" name="passbaru" placeholder="password">
                        <label>Password Baru</label>
                      </div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="ePassword">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>



    <?php
  }
  function daftarTambah()
  {
    ?>
      <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">

        <center>

          <div class="col-md-6">
            <div class="card mb-4">
              <h2 class="card-header">Tambah Daftar Paroki</h5>
                <div class="card-body">
                  <div class="mb-3">

                    <div class="tab-content">
                      <div class="tab-pane active" id="Login">
                        <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                          <label for="exampleFormControlInput1" class="form-label">Paroki</label>
                          <input type="text" class="form-control" name="Paroki" placeholder="Paroki" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pelindung</label>
                        <input type="text" class="form-control" name="pelindung" placeholder="Pelindung" required data-validation-required-message="Masukan Data" />
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Buku Baptis</label>
                        <input type="text" class="form-control" name="buku_baptis" placeholder="Buku Baptis" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pastor</label>
                        <input type="text" class="form-control" name="nama_pastor" placeholder="Nama Pastor" required data-validation-required-message="Masukan Data" />
                      </div>



                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah Umat</label>
                        <input type="text" class="form-control" name="jumlah_umat" placeholder="Jumlah Umat" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Dekenat</label>
                        <input type="text" class="form-control" name="dekenat" placeholder="Dekenat" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <input class="form-control" name="alamat" placeholder="Alamat" required data-validation-required-message="Masukan Data" rows="3">


                      </div>
                      <br>

                      <div class="col-12">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tParoki">Simpan</button>
                      </div>

                    </div>
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </center>
      </div>


    <?php
  }
  function daftarTambah1()
  {
    ?>
      <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">

        <center>

          <div class="col-md-6">
            <div class="card mb-4">
              <h2 class="card-header">Tambah Daftar Paroki</h5>
                <div class="card-body">
                  <div class="mb-3">

                    <div class="tab-content">
                      <div class="tab-pane active" id="Login">
                        <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                          <label for="exampleFormControlInput1" class="form-label">Paroki</label>
                          <input type="text" class="form-control" name="Paroki" placeholder="Paroki" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pelindung</label>
                        <input type="text" class="form-control" name="pelindung" placeholder="Pelindung" required data-validation-required-message="Masukan Data" />
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Buku Baptis</label>
                        <input type="text" class="form-control" name="buku_baptis" placeholder="Buku Baptis" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pastor</label>
                        <input type="text" class="form-control" name="nama_pastor" placeholder="Nama Pastor" required data-validation-required-message="Masukan Data" />
                      </div>



                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah Umat</label>
                        <input type="text" class="form-control" name="jumlah_umat" placeholder="Jumlah Umat" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Dekenat</label>
                        <input type="text" class="form-control" name="dekenat" placeholder="Dekenat" required data-validation-required-message="Masukan Data" />
                      </div>


                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <input class="form-control" name="alamat" placeholder="Alamat" required data-validation-required-message="Masukan Data" rows="3">


                      </div>
                      <br>

                      <div class="col-12">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tParoki1">Simpan</button>
                      </div>

                    </div>
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </center>
      </div>




    <?php
  }
  function tambahKutipan()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM kutipan");
    ?>

      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">TAMBAH AYAT ALKITAB</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>






      <center>

        <div class="col-md-6">
          <div class="card mb-4">
            <h2 class="card-header">Tambah Ayat Alkitab</h2>
            <div class="card-body">
              <div class="mb-3">

                <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                    <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                      <label for="exampleFormControlInput1" class="form-label">Ayat</label>
                      <input type="text" name="ayat" class="form-control" id="exampleFormControlInput1" placeholder="Ayat" required data-validation-required-message="Masukan Data">


                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Ayat Alkitab</label>
                        <textarea class="mce" id="exampleFormControlTextarea1" name="isi" rows="3"></textarea>
                      </div>

                      <br>
                      <div class="col-12">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tKutipan">Simpan</button>
                      </div>
                    </form>
                  </div>






                </div>
              </div>
      </center>
    </div>

    <article class="x">
      <br><br>
      <div class="card">


        <center>
          <h2>Ayat Alkitab</h2>
        </center>

        <div class="card-footer">
          <section id="contact" data-stellar-background-ratio="0.5">


            <div class="col-md-12 col-sm-12">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Ayat Alkitab</th>
                      <th scope="col">Isi Ayat Alkitab</th>
                      <th scope="col">Aksi</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    while ($data = mysqli_fetch_array($query)) {
                      $id = $data["id_kutipan"];
                      $ayat = $data["ayat"];
                      $no++; ?>
                      <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $ayat; ?> </td>
                        <td><?php echo $data["isi"]; ?> </td>
                        <td>
                          <a href="index_admin.php?page=detailKutipan&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a> <br><br><a href="index_admin.php?page=hapusKutipan&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
      </section>
      </div>
      </div>
    </article>



  <?php
  }
  function hapusKutipan()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from kutipan where id_kutipan = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }

  function detailKutipan()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM kutipan WHERE id_kutipan = '$id'");
    $data = mysqli_fetch_array($query);
    $ayat = $data["ayat"];
  ?>
    <!--  <section id="testimonial" data-stellar-background-ratio="0.5">
              <div class="row">
                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Detail Lokasi Gereja dan Stasi</h2>  </div>
                     </div>

           </div>
      </section> -->
    <!-- ABOUT -->
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT AYAT ALKITAB</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>



    <section id="about" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row">


          <div class="col-md-6 col-sm-12">
            <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-12">Ayat Alkitab
                  <input class="form-control" style="color:black;" name="ayat" value="<?php echo $ayat; ?>" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">Isi Ayat Alkitab
                  <textarea class="mce" style="color:black;" name="isi" type="text"> <?php echo  $data["isi"]; ?> </textarea>
                </div>
              </div>


              <br>
              <div class="row">
                <div class="col-sm-10">
                  <button type="submit" name="eKutipan" class="btn btn-primary btn-radius btn-brd grd1">
                    Simpan Perubahan
                  </button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>




    ----------------




  <?php
  }
  function tambahInfKeus()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM informasi");
  ?>

    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">TAMBAH INFORMASI KEUSKUPAN</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>




    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">

      <center>
        <div class="col-md-6">
          <div class="card mb-4">
            <h2 class="card-header">INFORMASI KEUSKUPAN</h2>
            <div class="card-body">
              <div class="mb-3">

                <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                    <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">



                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Informasi</label>
                        <textarea class="mce" id="exampleFormControlTextarea1" name="informasi" rows="3"></textarea>
                      </div>

                      <br>
                      <div class="col-12">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tInformasi">Simpan</button>
                      </div>
                    </form>
                  </div>






                </div>
              </div>
      </center>
    </div>

    <article class="x">
      <br><br>
      <div class="card">


        <center>
          <h2>Informasi Keuskupan</h2>
        </center>

        <div class="card-footer">

          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>

                  <th scope="col">Isi Informasi</th>
                  <th scope="col">Aksi</th>


                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                while ($data = mysqli_fetch_array($query)) {
                  $id = $data["id_inf"];

                  $no++; ?>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>

                    <td><?php echo $data["informasi"]; ?> </td>
                    <td>
                      <a href="index_admin.php?page=detailInfKeus&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a> <br><br><a href="index_admin.php?page=hapusInfKeus&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
    </article>



  <?php
  }
  function hapusInfKeus()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "delete from informasi where id_inf = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }

  function detailInfKeus()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM informasi WHERE id_inf = '$id'");
    $data = mysqli_fetch_array($query);
    $informasi = $data["informasi"];
  ?>
    <!--  <section id="testimonial" data-stellar-background-ratio="0.5">
              <div class="row">
                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Detail Lokasi Gereja dan Stasi</h2>  </div>
                     </div>

           </div>
      </section> -->
    <!-- ABOUT -->
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT AYAT ALKITAB</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>



    <section id="about" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row">


          <div class="col-md-6 col-sm-12">
            <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <div class="col-sm-12">Isi Ayat Alkitab
                  <textarea class="mce" style="color:black;" name="informasi" type="text"> <?php echo  $data["informasi"]; ?> </textarea>
                </div>
              </div>


              <br>
              <div class="row">
                <div class="col-sm-10">
                  <button type="submit" name="eInformasi" class="btn btn-primary btn-radius btn-brd grd1">
                    Simpan Perubahan
                  </button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>




  <?php
  }

  // by Netmedia Framecode start

  function tambahRomo()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM tbl_romo JOIN gereja_stasi ON tbl_romo.id_gereja=gereja_stasi.id_gereja ORDER BY tbl_romo.id_pastor DESC");
  ?><br><br>
    <center>
      <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12" data-wow-delay="0.4s">
              <div class="card mb-4">
                <h2 class="card-header">TAMBAH DATA PASTOR</h2>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="tab-content">
                      <div class="tab-pane active" id="Login">
                        <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pastor</label>
                            <input type="text" class="form-control" name="nama_pastor" placeholder="Nama Pastor" required data-validation-required-message="Masukan Data" />
                          </div>
                          <div class="mb-3">
                            <label for="id-gereja" class="form-label">Gereja</label>
                            <select name="id-gereja" class="form-control" id="id-gereja" required>
                              <option value="">Pilih Gereja</option>
                              <?php $selectGereja = mysqli_query($con, "SELECT * FROM gereja_stasi ORDER BY nama_stasi ASC");
                              foreach ($selectGereja as $data_sg) : ?>
                                <option value="<?= $data_sg['id_gereja'] ?>"><?= $data_sg['nama_stasi'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <br>
                          <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tRomo">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                    <article class="x">
                      <div class="card">
                        <center>
                          <h2>Nama Pastor</h2>
                          <div class="card-footer">
                            <div class="table-responsive">
                              <table class="display table table-hover border-success " id="daftar">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama Pastor</th>
                                    <th scope="col" class="text-center">Gereja</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  while ($data = mysqli_fetch_array($query)) {
                                    $id = $data["id_pastor"];
                                  ?>
                                    <tr>
                                      <th scope="row" class="text-center"><?php echo $no; ?></th>
                                      <td><?php echo $data["nama_pastor"]; ?> </td>
                                      <td><?php echo $data["nama_stasi"]; ?> </td>
                                      <td class="d-flex justify-content-center">
                                        <a href="index_admin.php?page=detailRomo&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                                        <a href="index_admin.php?page=hapusRomo&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
                                      </td>
                                    </tr>
                                  <?php
                                    $no++;
                                  }
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </center>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </center>

  <?php
  }
  function hapusRomo()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "DELETE FROM tbl_romo WHERE id_pastor = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function detailRomo()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT tbl_romo.id_gereja, tbl_romo.id_pastor, tbl_romo.nama_pastor, gereja_stasi.nama_stasi FROM tbl_romo JOIN gereja_stasi ON tbl_romo.id_gereja=gereja_stasi.id_gereja WHERE tbl_romo.id_pastor = '$id'");
    $data = mysqli_fetch_array($query);
  ?>
    </div>
    </section>
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT DAFTAR ROMO</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php?page=tambahRomo">Romo</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Ubah Romo</li>
            </ol>
          </nav>
        </div>
      </div>
      <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <center>
              <div class="col-md-6 col-sm-12">
                <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="nama-pastor">Nama Pastor</label>
                    <input type="hidden" name="namaOld" value="<?= $data['nama_pastor'] ?>">
                    <input class="form-control" id="nama-pastor" style="color:black;" name="nama_pastor" value="<?php echo $data["nama_pastor"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                  <div class="mb-3">
                    <label for="id-gereja" class="form-label">Gereja</label>
                    <select name="id-gereja" class="form-control" id="id-gereja" required>
                      <option value="" style="color:black;">Pilih Gereja</option>
                      <?php $selectGereja = mysqli_query($con, "SELECT * FROM gereja_stasi ORDER BY nama_stasi ASC");
                      foreach ($selectGereja as $data_sg) : ?>
                        <option value="<?= $data_sg['id_gereja'] ?>" style="color:black;"><?= $data_sg['nama_stasi'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" name="eRomo" class="btn btn-primary btn-radius btn-brd grd1">
                        Simpan Perubahan
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </center>
          </div>
        </div>
      </section>
    <?php
  }
  function tambahKeuskupan()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM keuskupan");
    ?><br><br>
      <center>
        <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12" data-wow-delay="0.4s">
                <div class="card mb-4">
                  <h2 class="card-header">TAMBAH DAFTAR KEUSKUPAN</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <div class="tab-content">
                          <div class="tab-pane active" id="Login">
                            <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Keuskupan</label>
                                <input type="text" class="form-control" name="nama_keuskupan" placeholder="Nama Keuskupan" required data-validation-required-message="Masukan Data" />
                              </div>
                              <br>
                              <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tKeuskupan">Simpan</button>
                              </div>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                  <article class="x">
                    <div class="card">
                      <center>
                        <h2>Nama Keuskupan</h2>
                        <div class="card-footer">
                          <div class="table-responsive">
                            <table class="display table table-hover border-success " id="daftar">
                              <thead>
                                <tr>
                                  <th scope="col" class="text-center">No</th>
                                  <th scope="col" class="text-center">Nama Keuskupan</th>
                                  <th scope="col" class="text-center">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                  $id = $data["id_keuskupan"];
                                ?>
                                  <tr>
                                    <th scope="row" class="text-center"><?php echo $no; ?></th>
                                    <td><?php echo $data["nama_keuskupan"]; ?> </td>
                                    <td class="d-flex justify-content-center">
                                      <a href="index_admin.php?page=detailKeuskupan&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                                      <a href="index_admin.php?page=hapusKeuskupan&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
                                    </td>
                                    </td>
                                  </tr>
                                <?php $no++;
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                  </article>
                </div>
              </div>
      </center>
    <?php
  }
  function hapusKeuskupan()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "DELETE FROM keuskupan where id_keuskupan = '$id'");
    if ($query) {
      echo "<script>alert('Data Dihapus');history.go(-1);</script>";
    }
  }
  function detailKeuskupan()
  {
    $id = $_GET['id'];
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM keuskupan WHERE id_keuskupan = '$id'");
    $data = mysqli_fetch_array($query);
    ?>
      </div>
    </section>
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT DAFTAR KEUSKUPAN</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="index_admin.php?page=tambahKeuskupan">Keuskupan</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Ubah Keuskupan</li>
            </ol>
          </nav>
        </div>
      </div>
      <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <center>
              <div class="col-md-6 col-sm-12">
                <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="col-sm-12">Nama Keuskupan
                      <input type="hidden" name="namaOld" value="<?= $data['nama_keuskupan'] ?>">
                      <input class="form-control" style="color:black;" name="nama_keuskupan" value="<?php echo $data["nama_keuskupan"]; ?>" type="text" required data-validation-required-message="Masukan Data">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" name="eKeuskupan" class="btn btn-primary btn-radius btn-brd grd1">
                        Simpan Perubahan
                      </button>
                    </div>
                  </div>
                </form>
            </center>
          </div>
        </div>
      <?php
    }
    function tambahParoki()
    {
      include('koneksi.php');
      $query = mysqli_query($con, "SELECT * FROM tbl_paroki JOIN keuskupan ON tbl_paroki.id_keuskupan=keuskupan.id_keuskupan JOIN wilayah ON tbl_paroki.id_wilayah=wilayah.id ORDER BY tbl_paroki.nama_paroki ASC");
      ?><br><br>
        <center>

          <section id="contact" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12" data-wow-delay="0.4s">
                  <div class="card mb-4">
                    <h2 class="card-header">TAMBAH DAFTAR PAROKI</h5>
                      <div class="card-body">
                        <div class="mb-3">

                          <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                  <label for="keuskupan" class="form-label">Keuskupan</label>
                                  <select name="id-keuskupan" class="form-control" id="keuskupan" required>
                                    <option value="">Pilih Keuskupan</option>
                                    <?php $selectKeuskupan = mysqli_query($con, "SELECT * FROM keuskupan ORDER BY nama_keuskupan ASC");
                                    foreach ($selectKeuskupan as $data_sk) : ?>
                                      <option value="<?= $data_sk['id_keuskupan'] ?>"><?= $data_sk['nama_keuskupan'] ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>

                                <div class="mb-3">
                                  <label for="keuskupan" class="form-label">Wilayah</label>
                                  <select name="id-wilayah" class="form-control" id="keuskupan" required>
                                    <option value="">Pilih Wilayah</option>
                                    <?php $selectWilayah = mysqli_query($con, "SELECT * FROM wilayah ORDER BY nama ASC");
                                    foreach ($selectWilayah as $data_sw) : ?>
                                      <option value="<?= $data_sw['id'] ?>"><?= $data_sw['nama'] ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>

                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Nama Paroki</label>
                                  <input type="text" class="form-control" name="nama_paroki" placeholder="Nama Paroki" required data-validation-required-message="Masukan Data" />
                                </div>

                                <br>

                                <div class="col-12">
                                  <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tParokiii">Simpan</button>
                                </div>

                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>



                <div class="row">
                  <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                    <article class="x">
                      <div class="card">

                        <center>
                          <h2>Nama Paroki</h2>
                          <div class="card-footer">

                            <div class="table-responsive">
                              <table class="display table table-hover border-success " id="daftar">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Keuskupan</th>
                                    <th scope="col" class="text-center">Dekenat</th>
                                    <th scope="col" class="text-center">Paroki</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  while ($data = mysqli_fetch_array($query)) {
                                    $id = $data["id_parokiii"]; ?>
                                    <tr>
                                      <th scope="row"><?php echo $no; ?></th>
                                      <td><?php echo $data["nama_keuskupan"]; ?> </td>
                                      <td><?php echo $data["nama"]; ?> </td>
                                      <td><?php echo $data["nama_paroki"]; ?> </td>
                                      <td class="d-flex justify-content-between text-center">
                                        <a href="index_admin.php?page=detailAlbumParoki&id=<?php echo $data['id_parokiii']; ?>" class="btn btn-primary">Album</a>
                                        <a href="index_admin.php?page=detailParoki&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                                        <a href="index_admin.php?page=hapusParoki&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                                      </td>
                                    </tr>
                                  <?php
                                    $no++;
                                  }
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    </article>
                  </div>
                </div>
        </center>

      <?php
    }
    function hapusParoki()
    {
      $id = $_GET['id'];
      include('koneksi.php');
      $query = mysqli_query($con, "delete from tbl_paroki where id_parokiii = '$id'");
      if ($query) {
        echo "<script>alert('Data Dihapus');history.go(-1);</script>";
      }
    }
    function detailAlbumParoki()
    {
      $idp = $_GET['id'];
      include('koneksi.php');
      $query = mysqli_query($con, "SELECT * FROM tbl_paroki WHERE id_parokiii='$idp'");
      $data = mysqli_fetch_array($query);
      ?>
        </div>
      </section>
      <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container-fluid page-header py-5 mb-5">
          <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">TAMBAH ALBUM PAROKI</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Tambah Album</li>
              </ol>
            </nav>
          </div>
        </div>
        <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <center>
                <div class="col-md-6 col-sm-12">
                  <form class="form-horizontal" action="tambah.php?id=<?php echo $idp; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Upload Foto</label>
                      <input type="hidden" name="id" value="<?= $data['id_parokiii'] ?>">
                      <input type="file" class="form-control" name="foto" placeholder="Foto" required data-validation-required-message="Masukan Data" />
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" name="tAlbumParokiii" class="btn btn-primary btn-radius btn-brd grd1">
                          Tambah Foto
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </center>
            </div>
            <?php $takeAlbum = mysqli_query($con, "SELECT * FROM gallery WHERE id_paroki='$idp' order BY id_gallery DESC");
            if (mysqli_num_rows($takeAlbum) > 0) { ?>
              <div class="row">
                <div class="col-md-12 mt-5">
                  <div class="d-flex flex-wrap">
                    <?php while ($dataAlbum = mysqli_fetch_assoc($takeAlbum)) { ?>
                      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
                      <button class="btn btn-link text-decoration-none img-thumbnail" style="background-image: url(img/aParoki/<?= $dataAlbum['foto'] ?>);background-size: cover;cursor: pointer;width: 250px;height: 150px;margin-left: 15px;" data-toggle="modal" data-target="#foto-<?= $dataAlbum['id_gallery'] ?>"></button>
                      <div class="modal fade" id="foto-<?= $dataAlbum['id_gallery'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                              <h5 class="modal-title" id="exampleModalLabel"></h5>
                              <button type="button" class="close bg-transparent border-0" style="font-size: 25px;" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <img src="img/aParoki/<?= $dataAlbum['foto'] ?>" style="width: 100%;" class="img-thumbnail" alt="">
                            </div>
                            <div class="modal-footer border-top-0 justify-content-center">
                              <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $dataAlbum['id_gallery'] ?>">
                                <input type="hidden" name="foto" value="<?= $dataAlbum['foto'] ?>">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" name="hapusAlbumParoki" class="btn btn-danger">Hapus</button>
                              </form>
                              <?php if (isset($_POST['hapusAlbumParoki'])) {
                                $id = $_POST['id'];
                                $foto = $_POST['foto'];
                                unlink('img/aParoki/' . $foto);
                                mysqli_query($con, "DELETE FROM gallery WHERE id_gallery='$id'");
                                if ($query) {
                                  echo "<script>alert('Foto Dihapus');history.go(-1);</script>";
                                }
                              } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </section>
      <?php
    }
    function detailParoki()
    {
      $id = $_GET['id'];
      include('koneksi.php');
      $query = mysqli_query($con, "SELECT keuskupan.nama_keuskupan, wilayah.nama, tbl_paroki.id_parokiii, tbl_paroki.id_keuskupan, tbl_paroki.id_wilayah, tbl_paroki.nama_paroki FROM tbl_paroki JOIN keuskupan ON tbl_paroki.id_keuskupan=keuskupan.id_keuskupan JOIN wilayah ON tbl_paroki.id_wilayah=wilayah.id WHERE tbl_paroki.id_parokiii = '$id'");
      $data = mysqli_fetch_array($query);
      ?>
        </div>
      </section>
      <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container-fluid page-header py-5 mb-5">
          <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT DAFTAR PAROKI</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index_admin.php?page=tambahParoki">Paroki</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Ubah Paroki</li>
              </ol>
            </nav>
          </div>
        </div>
        <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <center>
                <div class="col-md-6 col-sm-12">
                  <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                      <label for="keuskupan" class="form-label">Keuskupan</label>
                      <select name="id-keuskupan" class="form-control" id="keuskupan" required>
                        <option value="<?= $data['id_keuskupan']; ?>"><?= $data['nama_keuskupan']; ?></option>
                        <?php $nama_keuskupan = $data['nama_keuskupan'];
                        $selectKeuskupan = mysqli_query($con, "SELECT * FROM keuskupan WHERE nama_keuskupan!='$nama_keuskupan' ORDER BY nama_keuskupan ASC");
                        foreach ($selectKeuskupan as $data_sk) : ?>
                          <option value="<?= $data_sk['id_keuskupan'] ?>"><?= $data_sk['nama_keuskupan'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="keuskupan" class="form-label">Wilayah</label>
                      <select name="id-wilayah" class="form-control" id="keuskupan" required>
                        <option value="<?= $data['id_wilayah'] ?>"><?= $data['nama'] ?></option>
                        <?php $selectWilayah = mysqli_query($con, "SELECT * FROM wilayah ORDER BY nama ASC");
                        foreach ($selectWilayah as $data_sw) : ?>
                          <option value="<?= $data_sw['id'] ?>"><?= $data_sw['nama'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Paroki</label>
                      <input type="hidden" name="namaOld" value="<?= $data['nama_paroki'] ?>">
                      <input type="text" class="form-control" name="nama_paroki" value="<?= $data['nama_paroki'] ?>" placeholder="Nama Paroki" required data-validation-required-message="Masukan Data" />
                    </div>

                    <br>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" name="eParokiii" class="btn btn-primary btn-radius btn-brd grd1">
                          Simpan Perubahan
                        </button>
                      </div>
                    </div>
                  </form>
              </center>
            </div>
          </div>
          </div>
        <?php
      }

      // by Netmedia Framecode start



      function tambahGallery()
      {
        ?>
          <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">

            <center>
              <div class="col-md-6">
                <div class="card mb-4">
                  <h2 class="card-header">Tambah Gallery Keuskupan Atambua</h2>
                  <div class="card-body">
                    <div class="mb-3">

                      <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                          <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">

                            <label for="exampleFormControlInput1" class="form-label">Nama Gereja</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Gereja" required data-validation-required-message="Masukan Data">




                            <div>
                              <label for="exampleFormControlTextarea1" class="form-label">Inforamsi Gallery</label>
                              <textarea class="mce" id="exampleFormControlTextarea1" name="informasi" required data-validation-required-message="Masukan Data">
                        </textarea>
                            </div>





                            <div class="mb-3">
                              <label for="formFile" class="form-label">Foto 1</label>
                              <input class="form-control" type="file" id="formFile" class="file" name="foto1" required data-validation-required-message="Masukan Data">
                            </div>

                            <div class="mb-3">
                              <label for="formFile" class="form-label">Foto 2</label>
                              <input class="form-control" type="file" id="formFile" class="file" name="foto2" required data-validation-required-message="Masukan Data">
                            </div>

                            <div class="mb-3">
                              <label for="formFile" class="form-label">Foto 3</label>
                              <input class="form-control" type="file" id="formFile" class="file" name="foto3" required data-validation-required-message="Masukan Data">
                            </div>


                            <div class="col-12">
                              <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="tGallery">Simpan</button>
                            </div>
                          </form>
                        </div>






                      </div>
                    </div>
            </center>
          </div>


        <?php
      }
      function gallery()
      {
        include('koneksi.php');
        $query = mysqli_query($con, "SELECT * FROM gallery");
        ?>

          <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
              <h1 class="display-3 text-white mb-3 animated slideInDown">GALLERY KEUSKUPAN ATAMBUA</h1>
              <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
                  <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>

                </ol>
              </nav>
            </div>
          </div>


          <!-- 
    <section id="testimonial" data-stellar-background-ratio="0.5">
            <div class="row">
                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4>Bangunan Keagamaan</h4>  </div>
                   </div> -->

          </div>
        </section>
        <!-- CONTACT -->
        <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                <a href="index_admin.php?page=tambahGallery" class="btn btn-dark">Tambah Gallery</a>
                <hr />

                <article class="x">
                  <br><br>
                  <div class="card">


                    <center>
                      <h2>Gallery Keuskupan Atambua</h2>
                    </center>

                    <div class="card-footer">

                      <div class="table-responsive">
                        <table class="display table" id="gereja">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Gereja</th>
                              <th scope="col">Informasi</th>

                              <th scope="col">Aksi</th>


                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no = 0;
                            while ($data = mysqli_fetch_array($query)) {
                              $id = $data["id_gallery"];
                              $nama = $data["nama"];

                              $no++; ?>
                              <tr>
                                <th style="width: 5%;" scope="row"><?php echo $no; ?></th>
                                <td style="width: 20%;"><?php echo $nama; ?> </td>
                                <td style="width: 35%;"><?php echo $data["informasi"]; ?> </td>


                                <td style="width: 15%;" class="d-flex justify-content-around gap-2">
                                  <a href="index_admin.php?page=detailGallery&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                                  <a href="index_admin.php?page=hapusGallery&id=<?php echo $id; ?>" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                                </td>
                                </td>
                              </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>
              </article>
        </section>
      <?php
      }
      function hapusGallery()
      {
        $id = $_GET['id'];
        include('koneksi.php');
        $query = mysqli_query($con, "delete from gallery where id_gallery = '$id'");
        if ($query) {
          echo "<script>alert('Data Dihapus');history.go(-1);</script>";
        }
      }
      function detailGallery()
      {
        $id = $_GET['id'];
        include('koneksi.php');
        $query = mysqli_query($con, "SELECT * FROM gallery WHERE id_gallery = '$id'");
        $data = mysqli_fetch_array($query);
        $nama = $data["nama"];

      ?>
        <!--  <section id="testimonial" data-stellar-background-ratio="0.5">
              <div class="row">
                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Detail Lokasi Gereja dan Stasi</h2>  </div>
                     </div>

           </div>
      </section> -->
        <!-- ABOUT -->
        <div class="container-fluid page-header py-5 mb-5">
          <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">EDIT GALLERY</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index_admin.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>

              </ol>
            </nav>
          </div>
        </div>



        <section id="about" data-stellar-background-ratio="0.5">

          <div class="container">
            <div class="row">


              <div class="col-md-6 col-sm-12">
                <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="col-sm-12">Nama Gereja
                      <input class="form-control" style="color:black;" name="nama" value="<?php echo $nama; ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">Informasi Gallery
                      <textarea class="mce" style="color:black;" name="informasi" type="text"> <?php echo  $data["informasi"]; ?> </textarea>
                    </div>
                  </div>


                  <br>
                  <div class="row">
                    <div class="col-sm-10">
                      <button type="submit" name="eGallery" class="btn btn-primary btn-radius btn-brd grd1">
                        Simpan Perubahan
                      </button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col-md-12 col-sm-12">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                  <img src="img/fotokeag/<?php echo $data["foto1"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
                  <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                      <div class="col-sm-12">
                        <input type="file" name="foto1" class="file" required data-validation-required-message="Masukan Data">
                      </div>
                    </div>

                    <img src="img/fotokeag/<?php echo $data["foto2"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
                    <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">


                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="file" name="foto2" class="file" required data-validation-required-message="Masukan Data">
                        </div>
                      </div>

                      <img src="img/fotokeag/<?php echo $data["foto3"]; ?>" class="img-responsive" alt="" style="max-height:400px;">
                      <form class="form-horizontal" action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="file" name="foto3" class="file" required data-validation-required-message="Masukan Data">
                          </div>
                        </div>





                        <br>
                        <div class="row">
                          <div class="col-sm-10">
                            <button type="submit" name="eFotoGallery" class="btn btn-primary btn-radius btn-brd grd1">
                              Ganti Foto
                            </button>
                          </div>
                        </div>
                      </form>
                </div>
              </div>

            </div>
          </div>
        </section>






































      <?php
      }
      ?>