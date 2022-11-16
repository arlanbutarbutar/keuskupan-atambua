<?php
function menu()
{

?>



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
        <a href="index.php" class="nav-item nav-link ">Home</a>
        <a href="index.php?page=daftar" class="nav-item nav-link">Paroki</a>
        <a href="index.php?page=album" class="nav-item nav-link">Album Paroki</a>
        <a href="index.php?page=wilayah" class="nav-item nav-link">Wilayah Keuskupan</a>
        <a href="index.php?page=gereja" class="nav-item nav-link">Lokasi Gereja dan Stasi</a>


      </div>
      <div class="nav-item dropdown">
        <a href="index.php?page=halamanAO" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">LOGIN<i class="fa fa-arrow-right ms-3"></i>

          <!--  <a href="index_login.php?page=loginnn" class="dropdown-item">ADMIN</a>
                        <a href="index_login.php?page=loginnn_op" class="dropdown-item">OPERATOR</a> -->
        </a>
      </div>
  </nav>




<?php
}
function beranda()
{

  include('koneksi.php');
  $query = mysqli_query($con, "SELECT * FROM kutipan");

?>
  <!-- HOME -->





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
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-2 px-5 animated slideInLeft">Read More</a>


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
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-2 px-5 animated slideInLeft">Read More</a>
                <!-- <a href="index.php?page=kutipan" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Kutipan</a> -->
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
                <a href="index.php?page=readmore" class="btn btn-primary rounded-pill py-2 px-5 animated slideInLeft">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <center>
    <h2 class="text-primary">Ayat Alkitab Hari Ini</h2>


    <div class="btn-square bg-primary rounded-circle">
      <i class="fa fa-quote-left text-white"></i>
    </div>
  </center>
  <br>
  <center>
    <tbody>

      <?php

      while ($data = mysqli_fetch_array($query)) {
        $id = $data["id_kutipan"];
        $nama = $data["ayat"];
        $nama = $data["isi"];

      ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">

              <div class="card">
                <div class="card-body">




                  <!-- <td><?php echo $nama; ?> </td> -->
                  <td><?php echo $data["ayat"]; ?> </td>
                  <td><?php echo $data["isi"]; ?> </td>

                <?php
              }
                ?>

                </div>
              </div>
            </div>
          </div>
        </div>

    </tbody>
  </center>


  <br>


  <div class="td-post-sharing td-post-sharing-top ">
    <div class="td-default-sharing">
      <div class="text-center">

        <h5 class="text-primary">Share on&nbsp;<img src="icon/share.png" style="width:18px;"></h5>

        <a href="https://www.facebook.com/sharer.php?u=https://keuskupan-atambua.tugasakhir.my.id/" target="_blank" class="btn btn-light text-white rounded-pill py-1 px-3 animated slideInLeft"><img src="icon/facebook.png"></a></img>

        <a href="https://twitter.com/intent/tweet?text=keuskupan-atambua.tugasakhir.my.id" target="_blank" class="btn btn-light text-light rounded-pill py-1 px-3 animated slideInLeft"><img src="icon/twitter.png"></a></img>


        <a href="whatsapp://send?text=keuskupan-atambua.tugasakhir.my.id" target="_blank" class="btn btn-light rounded-pill py-1 px-3 animated slideInLeft"><img src="icon/wa.png" style="width:45px;"></a></img>








        <!-- 
                    <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=Visi%2C+Misi+dan+Strategi+Pastoral+Keuskupan+Atambua+untuk+periode+2019-2023&url=https%3A%2F%2Fkeuskupanatambua.org%2Fvisi-misi-dan-strategi-pastoral-keuskupan-atambua-untuk-periode-2014-2019%2F&via=KEUSKUPANATAMBUA.ORG"  ><i class="fab fa-youtube-f"></i></a>

                

                    <a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=Visi%2C+Misi+dan+Strategi+Pastoral+Keuskupan+Atambua+untuk+periode+2019-2023%20-%20https%3A%2F%2Fkeuskupanatambua.org%2Fvisi-misi-dan-strategi-pastoral-keuskupan-atambua-untuk-periode-2014-2019%2F" ><i class="td-icon-whatsapp"></i></a> -->
      </div>
    </div>
  </div>
  <br><br>





  </div>
  </p>

  </center>







  <section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <div class="card">
              <div class="card-footer">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <h6 class="text-primary"></h6>
                  <h1 class="mb-4">SEJARAH SINGKAT</h1>
                </div>




                <p>Keuskupan Atambua mulanya didirikan sebagai Vikariat Apostolik Timor Olandese (Timor Belanda) pada 25 Mei 1936, dipisahkan dari Vikariat Apostolik Isole della Piccola Sonda (Kepulauan Sunda Kecil). Pada tahun 1948 namanya diganti menjadi Vikariat Apostolik Atambua. Ketika hierarki Gereja Katolik di Indonesia didirikan oleh Paus Yohanes XXIII dengan konstitusi apostolik Quod Christus pada 3 Januari 1961, statusnya ditingkatkan menjadi diosis (keuskupan). Maka menjadi Keuskupan Atambua. Pada tahun 1967 dimekarkan menjadi dua keuskupan, yaitu Keuskupan Atambua dan Keuskupan Kupang.</p>

                <p>Peristiwa besar, yakni pertama, mendaratnya para misionaris pertama dari Portugis di Pantai Lifao, Timor (sekarang bagian dari Negara Timor Leste) pada Desember 1555 dan pembaptisan sekitar 5.000 orang Timor oleh Padre Antonio Taveira, OP pada tahun 1556, menjadi penanda awal misi Katolik di Pulau Timor.</p>

                <p>Pada tahun 1883, para misionaris Yesuit mendirikan stasi yang pertama di Atapupu dan pada tahun 1886 di Lahurus. Selanjutnya pada tahun 1913 pelayanan di Timor diserahkan kepada para misionaris Societas Verbi DIvini (SVD) dengan Lahurus sebagai pusat misi pada waktu itu. Pada 16 Juli 1889, di Lahurus berdirilah Sekolah Dasar pertama di Timor.</p>

                <p>Tahun 1913 Pulau Timor menjadi bagian dari wilayah Prefektur Apostolik Kepulauan Sunda Kecil dengan Mgr. Petrus Noyen, SVD sebagai Prefektur Apostolik. Guru-guru Agama mulai memegang peranan penting dalam meletakkan dasar Kristiani di kalangan Umat Katolik Timor.</p>

                <p>Tahun 1936, Timor menjadi Vikariat sendiri dengan nama “Vicariat Apostolik Atambua” dan Mgr. Jacobus Pessers, SVD ditunjuk sebagai Vikaris Apostolik pertama pada 16 Juni 1937. Pada waktu itu sudah ada sekitar 42.000 umat Katolik yang dilayani oleh 19 Imam, 3 Bruder dan 12 Suster.</p>

                <p>Seminari Menengah Lalian, satu-satunya Seminari dalam Keuskupan Atambua, didirikan pada 8 September 1950. Tahun 1957 didirikan Biara Santo Yosef Nenuk tempat pembinaan bagi Bruder-bruder Timor.</p>

                <p>Pada 3 Januari 1961, Vikariat Apostolik Atambua menjadi Keuskupan Atambua dan sebagai Gereja setempat Keuskupan Atambua dipimpin oleh Mgr. Theodorus Sulama, SVD. Tanggal 21 September 2007 merupakan hari bersejarah dimana terjadi pentahbisan Uskup Atambua yang baru dan sekaligus peralihan kepemimpinan dari Mgr. Anton Pain Ratu, SVD (1984-2007) kepada penggantinya Mgr. Dr. Dominikus Saku, seorang imam Projo Keuskupan Atambua.</p>


              </div>
            </div>

            <br>

            <div class="card">
              <div class="card-footer text-center">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <h6 class="text-primary"></h6>
                  <h1 class="mb-4">VISI MISI DAN STRATEGI PASTORAL</h1>
                </div>

                <p>Visi, Misi dan Strategi Pastoral Keuskupan Atambua untuk periode 2019-2023, yakni :</p>

                <p><b>VISI : </b></p>

                <p>Umat Allah Keuskupan Atambua Semakin Unggul, Cerdas dan Sejahtera dalam Terang Iman dan Persahabatan Kristiani.</p>

                <p><b>MISI : </b></p>

                <p>1. Meningkatkan Pastoral Pendidikan yang Integratif.</p>

                <p>2. Meningkatkan Pemberdayaan Ekonomi Kreatif</p>

                <p>3. Mewujudkan Persaudaraan Kristiani</p>

                <p><b>Strategi Pastoral:</p></b>

                <p>Melakukan Sosialisasi Visi, Misi, Strategi dan Program kerja pastoral Keuskupan Atambua 2019-2023; Menciptakan Guru Profesional; Menciptakan Guru Katolik yang berpenghasilan sesuai dengan ketentuan UMP/UMR; Menyediakan regulasi yayasan dalam pengangkatan guru; Menyusun Master Plan pendidikan dan latihan profesi bagi guru; Membentuk keluarga katolik yang rukun dan memiliki habitus pendidikan Katolik; Membentuk wadah kaderisasi bagi pembentukan karakter Remaja dan OMK; Menyediakan asrama yang menghidupi habitus pendidikan Katolik di Paroki; Membentuk kelompok literasi bagi anak-anak dan remaja di paroki; Menjalin relasi kemitraan antara orang tua, sekolah, yayasan dan pemerintah; Menyediakan dana solidaritas pendidikan antar sekolah Katolik; Membentuk pilot project di paroki-paroki,misalnya kebun percontohan, peternakan, dan kerajinan rumah tangga khas budaya setempat; Membentuk unit-unit produksi di keluarga dan sekolah-sekolah, khususnya sekolah Katolik; Menyediakan Lapangan kerja bagi lulusan sekolah kejuruan; Menyediakan tenaga terlatih yang profesional di bidang peternakan, pertanian dan kerajinan tangan; Mewujudkan keluarga-keluarga yang memahami Financial Literacy; Membangun trainning center bagi calon pekerja dan OMK; Mendampingi keluarga-keluarga Katolik untuk memiliki penghasilan yang mencukupi kebutuhan hidupnya; Membentuk kerjasama kemitraan antara paroki, pemerintah dan LSM untuk pengembangan ekonomi kreatif; dan Melakukan evaluasi secara terus menerus dan berjenjang.</P>


              </div>
            </div>

            <br>

            <div class="card">
              <div class="card-footer text-center">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <h6 class="text-primary"></h6>
                  <h1 class="mb-4">Kepemimpinan Keuskupan Atambua</h1>
                </div>

                <p><b>Paus </b> : Fransiskus</p>
                <p><b>Uskup </b> : Mgr. Dominikus Saku</p>
                <p><b>Vikaris Jendreal </b> : R.P. Vincentius Wun, S.V.D.</p>
                <p><b>Vikaris Yudisial </b> : R.D. Mateus do Rosario da Cruz
                <p><b>Sekretaris </b> : R.D. Kornelis Salem</p>
                <p><b>Ekonom </b> : R.D. Yulius Selsus Nesi</p>
                <p><b>Uskup Emeretus </b> : Anton Pain Ratu, S.V.D.</p>


              </div>
            </div>





          </div>
        </div>




        <div class="col-md-4 col-sm-6">
          <!-- MENU THUMB -->
          <!--   <div class="menu-thumb">
                           <a href="index.php?page=keagamaan">

                                <img src="images/1.JPG" class="img-responsive" alt=""  style="border:-40px solid white; ">

                                <div class="menu-info">
                                     <div class="menu-item">
                                          <h3>KEUSKUPAN ATAMBUA</h3>
                                          <p>Lokasi Gereja dan Stasi</p>
                                     </div>
                                </div>
                           </a>
                      </div> -->
        </div>

        <div class="col-md-4 col-sm-6">









        </div>
      </div>

  </section>







  <div class="container-xxl py-5" id="gallery">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary"></h6>
        <h1 class="mb-4">Gallery Keuskupan Atambua</h1>
      </div>

      <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
        <div class="col-lg-4 col-md-6 portfolio-item first">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/1.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/ktdrl.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki Katedral Sta. Maria Imakulata Atambua</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"> </h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item second">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/2.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/46.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0">Paroki St. Yohanes Pemandi Naesleu</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item third">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/3.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/07.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0">Paroki St. Antonius Padua Sasi</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/4.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Mikhael Oelami.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki St. Mikhael Oelami </p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"> </h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item second">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/5.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Nikolas Bijaepasu.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki St. Nikolas Bijaepasu</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item third">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/6.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Yosef Manamas.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki St. Yosef Manamas</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/7.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/fatima betun.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki Sta. Maria Fatima Betun</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/8.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Antonius Maria Claret Oenopu.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki St. Antonius Maria Claret Oenopu</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="img/gerejaaa/galeri/9.jpg" alt="">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/hanemasin.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"> Paroki St. Antonius Maria Claret Oenopu</p>
            <hr class="text-primary w-3 my-2">
            <h5 class="lh-base"></h5>
          </div>
        </div>


      </div>
    </div>
  </div>


  <!-- Testimonial Start -->
  <section>
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h6 class="text-primary"></h6>
          <h1 class="mb-4">Motto Uskup</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
          <div class="testimonial-item text-center">
            <div class="testimonial-img position-relative">
              <img class="img-fluid rounded-circle mx-auto mb-5" src="img/uskup/1.jpg">
              <div class="btn-square bg-primary rounded-circle">
                <i class="fa fa-quote-left text-white"></i>
              </div>
            </div>
            <div class="testimonial-text text-center rounded p-4">
              <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
              <h5 class="mb-1">Mgr. Jacques Pessers, SVD</h5>
              <!-- 
                        <span class="fst-italic" href='index.php?page=readmore' href="">Uskup Pertama</span> -->

              <a class="fst-italic" href="index.php?page=uskup"> Uskup Pertama &nbsp;</a>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <div class="testimonial-img position-relative">
              <img class="img-fluid rounded-circle mx-auto mb-5" src="img/uskup/2.jpg">
              <div class="btn-square bg-primary rounded-circle">
                <i class="fa fa-quote-left text-white"></i>
              </div>
            </div>
            <div class="testimonial-text text-center rounded p-4">
              <p> "Sub Tutela Matris" (Dalam Perlindungan Maria)</p>
              <h5 class="mb-1">Mgr. Theodorus van den Tillaart, SVD</h5>
              <a class="fst-italic" href="index.php?page=uskup"> Uskup Kedua &nbsp;</a>
              <!--   <span class="fst-italic">Uskup Kedua</span> -->
            </div>
          </div>
          <div class="testimonial-item text-center">
            <div class="testimonial-img position-relative">
              <img class="img-fluid rounded-circle mx-auto mb-5" src="img/uskup/3.jpg">
              <div class="btn-square bg-primary rounded-circle">
                <i class="fa fa-quote-left text-white"></i>
              </div>
            </div>
            <div class="testimonial-text text-center rounded p-4">
              <p>"Maranatha" (Siapa yang tidak mengasihi Tuhan, terkutuklah ia, 1Kor 16:22)</p>
              <h5 class="mb-1">Mgr. Anton Pain Ratu, SVD</h5>
              <a class="fst-italic" href="index.php?page=uskup"> Uskup Ketiga &nbsp;</a>
              <!--  <span class="fst-italic">Uskup Ketiga</span> -->
            </div>
          </div>
          <div class="testimonial-item text-center">
            <div class="testimonial-img position-relative">
              <img class="img-fluid rounded-circle mx-auto mb-5" src="img/uskup/4.jpg">
              <div class="btn-square bg-primary rounded-circle">
                <i class="fa fa-quote-left text-white"></i>
              </div>
            </div>
            <div class="testimonial-text text-center rounded p-4">
              <p>"Vos Amici Mei Estis" (Kamu adalah sahabat-Ku, bdk. Yoh. 15: 14)</p>
              <h5 class="mb-1">Mgr. Dominikus Saku, Pr</h5>
              <a class="fst-italic" href="index.php?page=uskup"> Uskup Keempat &nbsp;</a>
              <!--  <span class="fst-italic">Uskup Keempat</span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects End -->






<?php
}
function gereja()
{
  include('koneksi.php');
  $query = mysqli_query($con, "SELECT * FROM gereja_stasi");
?>

  <link rel="stylesheet" href="leaflet/leaflet.css">
  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">LOKASI GEREJA</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header tit-up">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Cari Rute</h3>
        </div>
        <div class="modal-body customer-box">

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="Login">
              <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-sm-12">Asal
                    <input class="form-control" style="color:black;" name="nama" placeholder="Nama" type="text" required data-validation-required-message="Masukan Data">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">Tujuan
                    <select name="tujuan" id="tujuan" class="form-control" style="color:black;" data-style="btn-white">
                      <option value="1">Pilih Tujuan</option>
                      <?php
                      $query4 = mysqli_query($con, "SELECT * FROM atm");
                      $row4 = mysqli_num_rows($query4);

                      for ($t = 0; $t < $row4; $t++) {
                        $data4 = mysqli_fetch_array($query4);

                        $namaatm = $data4["nama"];
                      ?>
                        <option value="<?php echo $namaatm; ?>"><?php echo $namaatm; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10">
                    <button type="submit" name="tATM" class="btn btn-success btn-radius btn-brd grd1">
                      Cari
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

  <!--  <section id="menu" data-stellar-background-ratio="0.5"> -->

  <!-- CONTACT -->
  <section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="wow fadeInUp col-md-12 col-sm-12 mb-5" data-wow-delay="0.4s">

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
              $que = mysqli_query($con, "select * from gereja_stasi");
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
          <div id="map-canvas" style="width:100%;height:300px;"></div>

        </div>
      </div>
      <div class="row">
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
          <article class="x">
            <div class="card">



              <center>
                <h2>Semua Lokasi Gereja dan Stasi</h2>
              </center>
              <div class="card-footer">
                <div class="table-responsive">
                  <table class="display table table-hover" id="gereja">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gereja dan Stasi</th>
                        <th scope="col">Informasi</th>
                        <th scope="col">Rute</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      while ($data = mysqli_fetch_array($query)) {
                        $id = $data["id_gereja"];
                        $nama = $data["nama_stasi"];
                        $no++; ?>
                        <tr>
                          <th scope="row"><?php echo $no; ?></th>
                          <td><?php echo $nama; ?> </td>
                          <td> <a href="index.php?page=detailGereja&id=<?php echo $id; ?>" class="btn btn-primary">Informasi</a>
                          </td>
                          <td>
                            <a href='https://www.google.com/maps/dir/?api=1&origin="  + "lokasi saat ini" + 
                                                        "&destination= <?php echo $data['latitude']; ?>,<?php echo $data['longitude']; ?>' class='btn btn-info btn-md' target='_blank'>Rute</a>
                          </td>
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
function detailGereja()
{
  $id = $_GET['id'];
  include('koneksi.php');
  $query = mysqli_query($con, "SELECT * FROM gereja_stasi WHERE id_gereja = '$id'");
  $data = mysqli_fetch_array($query);
  $nama = $data["nama_stasi"];


?>
  <section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">

      <div class="owl-carousel owl-theme">
        <div class="item item-first">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                <h4>KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="item item-second">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <<h4>SISTEM INFORMASI GEOGRAFIS</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="item item-third">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                <h4>KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <section id="testimonial" data-stellar-background-ratio="0.5">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
          </div>
        </div>

      </div>
    </section>
    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12" style="margin-bottom:50px;">
            <script>
              var marker;

              function initialize() {
                var imageTK = 'icon/nt.png';

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
                $que = mysqli_query($con, "select * from gereja_stasi where id_gereja='$id'");
                while ($dat = mysqli_fetch_array($que)) {
                  $id = $dat['id_gereja'];
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
            <hr class="text-success">
            <div id="map-canvas" style="width:100%;height:300px;"></div>
            <hr />
            <center>
              <h2 class="m-0 text-primary">Informasi Gereja Katolik Keuskupan Atambua</h2>
            </center>
          </div>
          <hr />

          <!--  <h3> <a href="index.php?page=infWil" class="m-0 text-primary">  <?php echo $data["nama"]; ?></a></h3> -->

          <div class="col-md-6 col-sm-12">
            <h3 class="m-0 text-primary"> <?php echo $data["nama_stasi"]; ?></h3>

            <hr>
            <h5 class="m-0 text-primary">Pastor Paroki:</hr>
            </h5> <br />
            <h5 class="m-0 text"> <?php $takeRomo = mysqli_query($con, "SELECT * FROM tbl_romo WHERE id_gereja='$id'");
                                  if (mysqli_num_rows($takeRomo) > 0) {
                                    while ($dataRomo = mysqli_fetch_assoc($takeRomo)) {
                                      echo "- " . $dataRomo['nama_pastor'] . "<br>";
                                    }
                                  } else {
                                    echo "Belum ada";
                                  } ?></h5>

            <hr>
            <h5 class="m-0 text-primary">Informasi :</hr>
            </h5> <br />
            <h5 class="justify"><?php echo $data["informasi"]; ?></h5>
            <hr>
            <h5 class="m-0 text-primary">Jumlah Umat :</hr>
            </h5> <br />
            <h5 class="justify"><?php echo $data["jumlah_umat"]; ?></h5>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
              <img src="img/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">

            </div>
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
            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
          </ol>
        </nav>
      </div>
    </div>





    <!--   <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="row">
                 <div class="col-md-12 col-sm-12">
                      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                      <h2>NT</h2>  </div>
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
              <a href="index.php?page=daftar" class="dropdown-item">2022</a>
              <a href="index.php?page=daftar1" class="dropdown-item">2023</a>
              <a href="index.php?page=daftar2" class="dropdown-item">2024</a>
              <a href="index.php?page=daftar3" class="dropdown-item">2025</a>

            </div>
          </div>
          <br>




          <!-- <div class="col-2">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Tahun 2022</option>
                                        <option  value="1" href="index.php?page=readmore">Tahun 2023</option>
                                        <option value="2">Tahun 2024</option>
                                          <option value="3">Tahun 2025</option>
                                        <option value="4">Tahun 2026</option>
                                          <option value="5">Tahun 2027</option>
                                        
                                
                                    </select>
                                </div> -->
          <br>

          <script>
            var marker;

            function initialize() {
              var imageTK = 'nt.png';

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
              $que = mysqli_query($con, "select * from daftar_paroki");
              while ($dat = mysqli_fetch_array($que)) {
                $id = $dat['id_par'];
                $paroki = $dat['Paroki'];
                $pelindung = $dat['Pelindung'];
                $buku_baptis = $dat['Buku Baptis'];
                $nama_pastor = $dat['Nama Pastor'];
                $jumlah_umat = $dat['Jumlah Umat'];
                $dekenat = $dat['Dekenat'];
                $alamat = $dat['Alamat'];
                // echo ("addMarkerTK($lat, $lon,'$sekolah');\n");

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
          <!--  <div id="map-canvas"  style="width:80%;height:300px;"></div>
 -->
          <article class="x">





            <div class="card">
              <center>
                <h2>DAFTAR PAROKI TAHUN 2022</h2>
              </center>
              <div class="card-footer ">


                <div class="row">
                  <div class="table-responsive">
                    <table class="display table table-hover" id="daftar">
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

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)) {
                          $id = $data["id_par"];
                          $nama = $data["Paroki"];
                          $nama = $data["pelindung"];
                          $nama = $data["buku_baptis"];
                          $nama = $data["nama_pastor"];
                          $nama = $data["jumlah_umat"];
                          $nama = $data["dekenat"];
                          $nama = $data["alamat"];
                          $no++; ?>
                          <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <!-- <td><?php echo $nama; ?> </td> -->
                            <td><?php echo $data["Paroki"]; ?> </td>
                            <td><?php echo $data["pelindung"]; ?> </td>
                            <td><?php echo $data["buku_baptis"]; ?> </td>
                            <td><?php echo $data["nama_pastor"]; ?> </td>
                            <td><?php echo $data["jumlah_umat"]; ?> </td>
                            <td><?php echo $data["dekenat"]; ?> </td>
                            <td><?php echo $data["alamat"]; ?> </td>
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
function album()
{
  include('koneksi.php');
  $query = mysqli_query($con, "SELECT * FROM daftar_paroki");
?>
  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">ALBUM PAROKI</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=album">Album</a></li>
        </ol>
      </nav>
    </div>
  </div>
  </section>
  <section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex flex-wrap">
                <?php $album = mysqli_query($con, "SELECT * FROM gallery JOIN tbl_paroki ON gallery.id_paroki=tbl_paroki.id_parokiii order BY gallery.id_gallery DESC");
                if (mysqli_num_rows($album) > 0) {
                  while ($dataAlbum = mysqli_fetch_assoc($album)) { ?>
                    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
                    <button class="btn btn-link text-decoration-none img-thumbnail" style="background-image: url(img/aParoki/<?= $dataAlbum['foto'] ?>);background-size: cover;cursor: pointer;width: 250px;height: 150px;margin-left: 15px;" data-toggle="modal" data-target="#foto-<?= $dataAlbum['id_gallery'] ?>"></button>
                    <div class="modal fade" id="foto-<?= $dataAlbum['id_gallery'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header border-bottom-0">
                            <h5 class="modal-title" id="exampleModalLabel"><?= $dataAlbum['nama_paroki'] ?></h5>
                            <button type="button" class="close bg-transparent border-0" style="font-size: 25px;" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-center">
                            <img src="img/aParoki/<?= $dataAlbum['foto'] ?>" style="width: 100%;" class="img-thumbnail" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                <?php }
                } ?>
              </div>
            </div>
          </div>
        </div>
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
          <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
        </ol>
      </nav>
    </div>
  </div>





  <!--   <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="row">
                 <div class="col-md-12 col-sm-12">
                      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                      <h2>NT</h2>  </div>
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
              <a href="index.php?page=daftar" class="dropdown-item">2022</a>
              <a href="index.php?page=daftar1" class="dropdown-item">2023</a>
              <a href="index.php?page=daftar2" class="dropdown-item">2024</a>
              <a href="index.php?page=daftar3" class="dropdown-item">2025</a>

            </div>
          </div>
          <br>



          <!-- <div class="col-2">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Tahun 2022</option>
                                        <option  value="1" href="index.php?page=readmore">Tahun 2023</option>
                                        <option value="2">Tahun 2024</option>
                                          <option value="3">Tahun 2025</option>
                                        <option value="4">Tahun 2026</option>
                                          <option value="5">Tahun 2027</option>
                                        
                                
                                    </select>
                                </div> -->
          <br>

          <script>
            var marker;

            function initialize() {
              var imageTK = 'nt.png';

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
              $que = mysqli_query($con, "select * from daftar_paroki");
              while ($dat = mysqli_fetch_array($que)) {
                $id = $dat['id_par'];
                $paroki = $dat['Paroki'];
                $pelindung = $dat['Pelindung'];
                $buku_baptis = $dat['Buku Baptis'];
                $nama_pastor = $dat['Nama Pastor'];
                $jumlah_umat = $dat['Jumlah Umat'];
                $dekenat = $dat['Dekenat'];
                $alamat = $dat['Alamat'];
                // echo ("addMarkerTK($lat, $lon,'$sekolah');\n");

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
          <!--  <div id="map-canvas"  style="width:80%;height:300px;"></div>
 -->
          <article class="x">





            <div class="card">
              <center>
                <h2>DAFTAR PAROKI TAHUN 2023</h2>
              </center>
              <div class="card-footer ">


                <div class="row">
                  <div class="table-responsive">
                    <!--   <table class="table table-bordered table-hover"> -->
                    <!--   <table class="table table-bordered border-primary table-hover"> -->
                    <table class="display table table-hover" id="daftar1">
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

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)) {
                          $id = $data["id_par"];
                          $nama = $data["Paroki"];
                          $nama = $data["pelindung"];
                          $nama = $data["buku_baptis"];
                          $nama = $data["nama_pastor"];
                          $nama = $data["jumlah_umat"];
                          $nama = $data["dekenat"];
                          $nama = $data["alamat"];
                          $no++; ?>
                          <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <!-- <td><?php echo $nama; ?> </td> -->
                            <td><?php echo $data["Paroki"]; ?> </td>
                            <td><?php echo $data["pelindung"]; ?> </td>
                            <td><?php echo $data["buku_baptis"]; ?> </td>
                            <td><?php echo $data["nama_pastor"]; ?> </td>
                            <td><?php echo $data["jumlah_umat"]; ?> </td>
                            <td><?php echo $data["dekenat"]; ?> </td>
                            <td><?php echo $data["alamat"]; ?> </td>
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
function detailDaftar()
{
  $id = $_GET['id'];
  include('koneksi.php');
  $query = mysqli_query($con, "SELECT * FROM daftar_paroki WHERE id_par = '$id'");
  $data = mysqli_fetch_array($query);
  $nama = $data["Paroki"];
  // $nama=$data["pelindung"];
  // $nama=$data["buku_baptis"];
  // $nama=$data["nama_pastor"];
  // $nama=$data["jumlah_umat"];
  // $nama=$data["alamat"];
?>
  <section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">

      <div class="owl-carousel owl-theme">
        <div class="item item-first">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <h4>LETAK GEOGRAFIS GEREJA PADA</h4>
                <h4>WILAYAH KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="item item-second">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <h4>LETAK GEOGRAFIS GEREJA PADA</h4>
                <h4>WILAYAH KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="item item-third">
          <div class="caption">
            <div class="container">
              <div class="col-md-8 col-sm-12">
                <h4>LETAK GEOGRAFIS GEREJA PADA</h4>
                <h4>WILAYAH KEUSKUPAN ATAMBUA</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <section id="testimonial" data-stellar-background-ratio="0.5">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <h2>Detail Daftar Paroki</h2>
          </div>
        </div>

      </div>
    </section>
    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12" style="margin-bottom:50px;">
            <script>
              var marker;

              function initialize() {
                var imageTK = 'nt.png';

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
                $que = mysqli_query($con, "select * from daftar_paroki where id_par='$id'");
                while ($dat = mysqli_fetch_array($que)) {

                  $id = $dat['id_par'];
                  $paroki = $dat['Paroki'];
                  $pelindung = $dat['pelindung'];
                  $buku_baptis = $dat['buku_baptis'];
                  $nama_pastor = $dat['nama_pastor'];
                  $jumlah_umat = $dat['jumlah_umat'];
                  $dekenat = $dat['dekenat'];
                  $alamat = $dat['alamat'];

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
            <div id="map-canvas" style="width:100%;height:300px;"></div>

          </div>
          <hr />
          <div class="col-md-6 col-sm-12">
            <h3> <?php echo $data["nama"]; ?></h3>
            <h5>Informasi:<br />
              <p class="justify"><?php echo $data["informasi"]; ?>
            </h5>
            </p>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
              <img src="images/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">

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
  $query = mysqli_query($con, "SELECT * FROM wilayah ORDER BY wilayah.id DESC");

  ?>



    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">WILAYAH KEUSKUPAN</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="row">

        <div class="owl-carousel owl-theme">
          <div class="item item-first">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <h4>PETA WILAYAH</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="item item-second">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <h4>PETA WILAYAH</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="item item-third">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <h4>PETA WILAYAH</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
              <center>
                <h2>PETA WILAYAH KEUSKUPAN ATAMBUA</h2>
              </center>
              <br>

              <body>
                <div id="map" style="width:100%;height:400px;"></div>
                <script>
                  var map = new L.map('map').setView([-9.348819, 124.725711], 9);

                  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/satellite-v9'
                  }).addTo(map);


                  function getColor(d) {
                    return d == 1 ? '#00FFFF' :
                      d == 2 ? '#FFE4C4' :
                      d == 3 ? '#0000FF' :
                      d == 4 ? '#8A2BE2' :
                      d == 5 ? '#A52A2A' :
                      d == 6 ? '#7FFF00' :
                      d == 7 ? '#D2691E' :
                      d == 8 ? '#008B8B' :
                      d == 9 ? '#B8860B' :
                      d == 10 ? '#A9A9A9' :
                      d == 11 ? '#006400' :
                      d == 12 ? '#8B008B' :
                      d == 13 ? '#FF8C00' :
                      d == 14 ? '#FF00FF' :
                      d == 15 ? '#FFD700' :
                      d == 16 ? '#7B68EE' :
                      d == 17 ? '#48D1CC' :
                      d == 18 ? '#F5FFFA' :
                      d == 19 ? '#FFDEAD' :
                      d == 20 ? '#000080' :
                      d == 21 ? '#6B8E23' :
                      d == 22 ? '#98FB98' :
                      d == 23 ? '#DB7093' :
                      d == 24 ? '#FFFF00' :
                      d == 25 ? '#9ACD32' :
                      d == 26 ? '#F5DEB3' :
                      d == 27 ? '#FF6347' :
                      d == 28 ? '#D8BFD8' :
                      d == 29 ? '#00FF7F' :
                      d == 30 ? '#C0C0C0' :
                      d == 31 ? '#F4A460' :
                      d == 32 ? '#FF0000' :
                      d == 33 ? '#B0E0E6' : '#0000FF ';
                  }

                  function popUp(f, l) {
                    var out = [];
                    if (f.properties) {
                      // for(key in f.properties){
                      out.push("Nama : " + f.properties['nama']);
                      out.push("Informasi : " + f.properties['informasi']);
                      //}
                      l.bindPopup(out.join("<br><a href='index.php?page=infWil'> Detail&nbsp;</a>"));



                    }
                  }


                  var jsonTest = new L.GeoJSON.AJAX(["polygon1.php"], {
                    onEachFeature: popUp,
                    style: function(feature) {
                      return {
                        fillColor: getColor(feature.properties.warna),
                        fillOpacity: 0.6,
                        dashArray: '1',
                        color: 'white',
                        weight: 4,
                        opacity: 0.6
                      }
                    }

                  }).addTo(map);
                </script>
              </body>
              <br><br>


            </div>







            <article class="x">
              <div class="card">


                <center>
                  <h2>INFORMASI WILAYAH KEUSKUPAN ATAMBUA</h2>
                </center>
                <div class="card-footer">

                  <table class="display table table-hover" id="">
                    <!--  <table class="table table-bordered border-primary table-hover"> -->
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">Paroki</th>
                        <th scope="col">Stasi</th>
                        <th scope="col">Pastor</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      while ($data = mysqli_fetch_assoc($query)) {
                        $id = $data["id"];
                        $nama = $data["nama"];
                      ?>
                        <tr>
                          <th scope="row"><?php echo $no; ?></th>
                          <td><?php echo $nama; ?></a></td>
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
                          <td> <a href="index.php?page=Romo&id=<?php echo $id; ?>" class="btn btn-primary">Informasi</a>
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
            </article>
          </div>
        </div>
        </div>
      </section>

    <?php
  }
  function readmore()
  {

    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM informasi");

    ?>

      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <center>
            <h1 class="display-3 text-white mb-3 animated slideInDown">TENTANG KEUSKUPAN ATAMBUA</h1>
          </center>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li> -->
              <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
            </ol>
          </nav>
        </div>
      </div>

      <center>
        <div class="col-md-12 col-sm-12">
          <p class="section-title pr-5">


            <?php

            while ($data = mysqli_fetch_array($query)) {
              $id = $data["id_inf"];

              $nama = $data["informasi"];

            ?>






              <!-- <td><?php echo $nama; ?> </td> -->

              <td><?php echo $data["informasi"]; ?> </td>

            <?php
            }
            ?>

        </div>
        </p>

      </center>


    <?php
  }
  function loginnn()
  {
    include('koneksi.php');

    ?>

      <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">

                <head>
                  <title></title>

                  <style>
                    /*untuk teks heading di tag <body>*/
                    h2 {

                      color: crimson;
                      font-family: sans-serif;
                      text-align: center;
                      width: 35%;
                      margin: auto;
                      padding: 20px;
                    }

                    body {
                      background-image: url('img/16.jpg');
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100%;


                    }
                  </style>
                  <style>
                    .tengah {
                      position: absolute;
                      margin-top: -100px;
                      margin-left: 130px;
                      text-align: center;
                      left: 23%;
                      top: 50%;

                      width: 1150px;
                      height: 200px;
                    }
                  </style>
                </head>

              </div>


              <div class="tengah">

                <h2 class="m-0 text-primary">LOGIN ADMIN</h2>

                <div class="col-md-4">
                  <font color='#ffffff'>
                    <?php if ($_POST) include 'login.php'; ?>
                    <div class="tab-content">
                      <div class="tab-pane active" id="login">
                        <form class="form-horizontal" action="login.php" method="post">
                          <div class="form-group">
                            <div class="col-sm-12">
                              <center><label>Username</label>
                                <input class="form-control" style="color:black;" name="username" placeholder="Username" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <center><label>Password</label>
                                <input class="form-control" style="color:black;" name="password" placeholder="password" type="password">
                            </div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-md-12">
                              <button class="btn btn-primary btn-block" name="login" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
                            </div>

                          </div>
                          </center>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">

          </div>

          <div class="col-md-4 col-sm-6">
          </div>
        </div>
      </section>




    <?php
  }
  function loginnn_op()
  {
    include('koneksi.php');

    ?>

      <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">

                <head>
                  <title></title>
                  <style>
                    /*untuk teks heading di tag <body>*/
                    h2 {

                      color: crimson;
                      font-family: sans-serif;
                      text-align: center;
                      width: 35%;
                      margin: auto;
                      padding: 20px;
                    }

                    body {
                      background-image: url('img/13.jpg');
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100%;


                    }
                  </style>
                  <style>
                    .tengah {
                      position: absolute;
                      margin-top: -100px;
                      margin-left: 130px;
                      text-align: center;
                      left: 23%;
                      top: 50%;

                      width: 1150px;
                      height: 200px;
                    }
                  </style>
                </head>

              </div>

              <div class="tengah">

                <h2 class="m-0 text-primary">LOGIN OPERATOR</h2>
                <div class="col-md-4">
                  <font color='#ffffff'>
                    <?php if ($_POST) include 'login_op.php'; ?>

                    <div class="tab-content">
                      <div class="tab-pane active" id="login1">
                        <form class="form-horizontal" action="login_op.php" method="post">
                          <div class="form-group">
                            <div class="col-sm-12">
                              <center><label>Username</label>
                                <input class="form-control" style="color:black;" name="username_op" placeholder="Username" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <center><label>Password</label>
                                <input class="form-control" style="color:black;" name="password_op" placeholder="password" type="password">
                            </div>
                          </div>

                          <br>

                          <div class="row">
                            <div class="col-sm-12">
                              <button class="btn btn-primary btn-block" name="login1" type="submit"><span class="glyphicon-log-in"></span> Masuk</button>
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
          </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6">

        </div>

        <div class="col-md-4 col-sm-6">
        </div>
        </div>
      </section>

    <?php
  }
  function infWil()
  {
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM tbl_romo");
    ?>
      <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Daftar Paroki dan Pastor Paroki</h1>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
          </ol>
          </nav>
        </div>
      </div>

      <div class="col-md">
        <center>
          <h2 class="text-primary">PAROKI</h2>
        </center>
        <small class="text-light fw-semibold"></small>
        <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">


          <div class="accordion-item card">
            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                Kab. Belu
              </button>
            </h2>

            <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
              <div class="accordion-body">

                <div class="container-fluid py-5">
                  <div class="container">
                    <div class="row align-items-center">

                      <div class="col-lg-7">


                        <p><a href='index.php?page=detailGereja&id=16'> Katedral St Maria Immaculata Atambua &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=22'> Paroki St Petrus Tukuneno &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=26'> Paroki St Agustinus Fatubenao &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=21'> Paroki St Maria Bunda Penebus Fatuketi &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=34'> Paroki St Yohanes Pemandi Haliwen &nbsp;</a></p>




                        <P>Paroki St Yohanes Pemandi Haliwen</p>
                        <P>Paroki Tritunggal Mahakudus Sadi</p>
                        <P>Paroki St Maria Stella Maris Atapupu</p>
                        <P>Paroki St Paulus Wedomu </p>
                        <P>Paroki St Petrus Lahurus</p>

                      </div>

                      <div class="col-lg-5">
                        <P>Paroki St Theodorus Weluli</p>
                        <P>Paroki St Aloysius Gonzaga, Haekesak</p>
                        <P>Paroki St Gerardus Nualain</p>
                        <P>Paroki St Maria Regina Pacis Fulur</p>
                        <P>Paroki St Antonius Padua Nela Naekasa</p>
                        <P>Paroki Roh Kudus Halilulik Naitimu</p>
                        <P>Paroki Hati Kudus Yesus Laktutus Naitimu</p>
                        <P>Paroki St Mikael Webora</P>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item card">
            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
                Kab. Malaka
              </button>
            </h2>
            <div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
              <div class="accordion-body">

                <div class="container-fluid py-5">
                  <div class="container">
                    <div class="row align-items-center">

                      <div class="col-lg-7">


                        <p><a href='index.php?page=detailGereja&id=77'> Paroki St Maria Fatima Betun Wehali &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=78'> Paroki St Fransiskus Xaverius Bolan Fahiluka &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=85'> Paroki St Antonius Padua Kleseleon &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=84'> Paroki St Yohanes Baptista Besikama &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=87'> Paroki St Mikael, Biudukfoho &nbsp;</a></p>
                        <p>Paroki St Yohanes Rasul Webriamatan</p>
                        <p>Paroki Salib Suci Weoe</p>

                      </div>

                      <div class="col-lg-5">
                        <p>Paroki St Yohanes Rasul Rafau</p>
                        <p>Paroki Kristus Raja Seon</p>
                        <p>Paroki St Yohanes Pemandi Kaput</p>
                        <p>Paroki St Maria Nurobo</p>
                        <p>Paroki St Lukas Wekfau</p>
                        <p>Paroki St Laurensius Wemasa</p>
                        <p>Paroki Salib Suci Alas</p>
                        <p>Paroki Kristus Raja Kamanasa</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>






          <div class="accordion-item card active">
            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconThree">
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-3" aria-expanded="true" aria-controls="accordionIcon-3">
                Kab. Timor Tengah Utara
              </button>
            </h2>
            <div id="accordionIcon-3" class="accordion-collapse collapse collapse" data-bs-parent="#accordionIcon">
              <div class="accordion-body">

                <div class="container-fluid py-5">
                  <div class="container">
                    <div class="row align-items-center">

                      <div class="col-lg-7">
                        <p><a href='index.php?page=detailGereja&id=101'> Paroki St Yohanes Pembaptis Naesleu &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=104'> Paroki St Antonius Padua Sasi &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=105'> Paroki St Nikolas Bijaepasu &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=105'> Paroki St Nikolas Bijaepasu &nbsp;</a></p>
                        <p><a href='index.php?page=detailGereja&id=108'> Paroki St Maria Regina Oeolo &nbsp;</a></p>




                        <p>Paroki St Perawan Maria diangkat ke Surga, Eban</p>
                        <p>Paroki St Bernardus Naekake</p>
                        <p>Paroki St Yohannes Vianney Maubesi</p>
                        <p>Paroki St Fransiskus Assisi Mamsena</p>
                        <p>Paroki St Maria Penyelenggara Segala Rahmat Kiupukan</p>
                        <p>Paroki St Andreas Rasul Tunbaba</p>
                        <p>Paroki St Arnoldus Jansen Jak</p>
                        <p>Paroki St Yosef Manamas</p>
                        <p>Paroki St Paulus Maubam Manikin</p>

                      </div>

                      <div class="col-lg-5">
                        <p>Paroki St Yohanes Pemandi Bakitola</p>
                        <p>Paroki St Antonius Padua Fatinesu</p>
                        <p>Paroki Kristus Raja, Haumeni</p>
                        <p>Paroki St Antonius Maria Claret Oenopu</p>
                        <p>Paroki St Theresia, Aplasi</p>
                        <p>Paroki St Sesilia Kotafoun</p>
                        <p>Paroki Hati Yesus yang Mahakudus Noemuti</p>
                        <p>Paroki St Filomena Mena Oesoko</p>
                        <p>Paroki St Maria Bunda Allah Ponu</p>
                        <p>Paroki St Fransiskus Xaverius Fatuoni</p>
                        <p>Paroki Hati Kudus Yesus Manumean</p>
                        <p>Paroki St Petrus dan Paulus</p>
                        <p>Paroki St Petrus Kanisius Manufui</p>
                        <p>Paroki St Fransiskus Xaverius Wini</p>
                      </div>




                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>



          <br>
          <br>
          <br>
          <div class="col-md">
            <center>
              <h2 class="text-primary">NAMA PASTOR</h2>
            </center>
            <small class="text-light fw-semibold"></small>
            <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
              <hr class="text-primary ">




              <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconFour">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-4" aria-controls="accordionIcon-4">
                    DEKENAT BELU UTARA
                  </button>
                </h2>

                <div id="accordionIcon-4" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                  <div class="accordion-body">

                    <div class="container-fluid py-5">
                      <div class="container">
                        <div class="row align-items-center">

                          <div class="col">

                            <center>
                              <div class="row">
                                <div class="table-responsive">
                                  <table class="display table table-hover" id="daftar">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>

                                        <th scope="col">Nama Pastor</th>


                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 0;
                                      while ($data = mysqli_fetch_array($query)) {
                                        $id = $data["id_pastor"];

                                        $nama = $data["nama_pastor"];

                                        $no++; ?>
                                        <tr>
                                          <th scope="row"><?php echo $no; ?></th>
                                          <!-- <td><?php echo $nama; ?> </td> -->

                                          <td><?php echo $data["nama_pastor"]; ?> </td>

                                        <?php
                                      }
                                        ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </center>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconFive">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-5" aria-controls="accordionIcon-5">
                    DEKENAT MALAKA
                  </button>
                </h2>
                <div id="accordionIcon-5" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                  <div class="accordion-body">

                    <div class="container-fluid py-5">
                      <div class="container">
                        <div class="row align-items-center">

                          <div class="col-lg-7">
                            <center>
                              <div class="row">
                                <div class="table-responsive">
                                  <table class="display table table-hover" id="daftar">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>

                                        <th scope="col">dekenat</th>


                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 0;
                                      while ($data = mysqli_fetch_array($query)) {
                                        $id = $data["id_pastor"];

                                        $dekenat = $data["dekenat"];

                                        $no++; ?>
                                        <tr>
                                          <th scope="row"><?php echo $no; ?></th>
                                          <!-- <td><?php echo $nama; ?> </td> -->

                                          <td><?php echo $data["dekenat"]; ?> </td>

                                        <?php
                                      }
                                        ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </center>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item card active">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconSix">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-6" aria-expanded="true" aria-controls="accordionIcon-6">
                    DEKENAT KEFAMENANU
                  </button>
                </h2>
                <div id="accordionIcon-6" class="accordion-collapse collapse collapse" data-bs-parent="#accordionIcon">
                  <div class="accordion-body">


                    <div class="container-fluid py-5">
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-lg-7"> </div>




                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="accordion-item card active">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconSix">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-6" aria-expanded="true" aria-controls="accordionIcon-6">
                    DEKENAT MENA
                  </button>
                </h2>
                <div id="accordionIcon-6" class="accordion-collapse collapse collapse" data-bs-parent="#accordionIcon">
                  <div class="accordion-body">


                    <div class="container-fluid py-5">
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-lg-7"> </div>




                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php
          }
          function halamanAO()
          {
            ?>







              <div class="container-fluid page-header py-5 mb-5">
                <div class="container py-5">
                  <center>
                    <h1 class="display-3 text-white mb-3 animated slideInDown">LOGIN ADMIN DAN OPERATOR</h1>
                  </center>
                  <center>
                    <a href="index_login.php?page=loginnn" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">ADMIN</a>
                    <a href="index_login.php?page=loginnn_op" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">OPERATOR</a>
                  </center>
                  </nav>
                </div>
              </div>



            <?php
          }
          function kutipan()
          {
            include('koneksi.php');
            $query = mysqli_query($con, "SELECT * FROM kutipan");

            ?>

              <div class="container-fluid page-header py-5 mb-5">
                <div class="container py-5">
                  <h1 class="display-3 text-white mb-3 animated slideInDown">Ayat Alkitab</h1>
                  <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
                      <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>

                    </ol>
                  </nav>
                </div>
              </div>



              <!-- ABOUT -->

              <center>
                <h2 class="text-primary"> Ayat Alkitab Hari Ini</h2>
              </center>



              <center>
                <tbody>
                  <?php

                  while ($data = mysqli_fetch_array($query)) {
                    $id = $data["id_kutipan"];
                    $nama = $data["ayat"];
                    $nama = $data["isi"];

                  ?>
                    <tr>

                      <!-- <td><?php echo $nama; ?> </td> -->
                      <td><?php echo $data["ayat"]; ?> </td>
                      <td><?php echo $data["isi"]; ?> </td>

                    <?php
                  }
                    ?>
                </tbody>
              </center>




            <?php
          }
          function gallery()
          {
            include('koneksi.php');
            $query = mysqli_query($con, "SELECT * FROM gallery");
            ?>

              <link rel="stylesheet" href="leaflet/leaflet.css">
              <div class="container-fluid page-header py-5 mb-5">
                <div class="container py-5">
                  <h1 class="display-3 text-white mb-3 animated slideInDown">GALLEY KEUSKUPAN ATAMBUA</h1>
                  <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>

                    </ol>
                  </nav>
                </div>
              </div>

              <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header tit-up">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h3 class="modal-title">Cari Rute</h3>
                    </div>
                    <div class="modal-body customer-box">

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                          <form class="form-horizontal" action="tambah.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <div class="col-sm-12">Asal
                                <input class="form-control" style="color:black;" name="nama" placeholder="Nama" type="text" required data-validation-required-message="Masukan Data">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">Tujuan
                                <select name="tujuan" id="tujuan" class="form-control" style="color:black;" data-style="btn-white">
                                  <option value="1">Pilih Tujuan</option>
                                  <?php
                                  $query4 = mysqli_query($con, "SELECT * FROM atm");
                                  $row4 = mysqli_num_rows($query4);

                                  for ($t = 0; $t < $row4; $t++) {
                                    $data4 = mysqli_fetch_array($query4);

                                    $namaatm = $data4["nama"];
                                  ?>
                                    <option value="<?php echo $namaatm; ?>"><?php echo $namaatm; ?></option>
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-10">
                                <button type="submit" name="tATM" class="btn btn-success btn-radius btn-brd grd1">
                                  Cari
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

              <!--  <section id="menu" data-stellar-background-ratio="0.5"> -->

              <!-- CONTACT -->
              <section id="contact" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row">
                    <div class="wow fadeInUp col-md-12 col-sm-12 mb-5" data-wow-delay="0.4s">

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
                          $que = mysqli_query($con, "select * from gereja_stasi");
                          while ($dat = mysqli_fetch_array($que)) {
                            $id_pemer = $dat['id_gereja'];
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
                      <div id="map-canvas" style="width:100%;height:300px;"></div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                      <article class="x">
                        <div class="card">



                          <center>
                            <h2>GALLERY KEUSKUPAN ATAMBUA</h2>
                          </center>
                          <div class="card-footer">
                            <div class="table-responsive">
                              <table class="display table table-hover" id="gereja">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Gereja</th>
                                    <th scope="col">Gallery</th>

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
                                      <th scope="row"><?php echo $no; ?></th>
                                      <td><?php echo $nama; ?> </td>
                                      <td> <a href="index.php?page=detailGallery&id=<?php echo $id; ?>" class="btn btn-primary">Lihat Gallery</a>
                                      </td>

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
          function detailGallery()
          {
            $id = $_GET['id'];
            include('koneksi.php');
            $query = mysqli_query($con, "SELECT * FROM gallery WHERE id_gallery = '$id'");
            $data = mysqli_fetch_array($query);
            $nama = $data["nama"];


            ?>
              <section id="home" class="slider" data-stellar-background-ratio="0.5">
                <div class="row">

                  <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                      <div class="caption">
                        <div class="container">
                          <div class="col-md-8 col-sm-12">
                            <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                            <h4>KEUSKUPAN ATAMBUA</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item item-second">
                      <div class="caption">
                        <div class="container">
                          <div class="col-md-8 col-sm-12">
                            <<h4>SISTEM INFORMASI GEOGRAFIS</h4>
                              <h4>KEUSKUPAN ATAMBUA</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item item-third">
                      <div class="caption">
                        <div class="container">
                          <div class="col-md-8 col-sm-12">
                            <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                            <h4>KEUSKUPAN ATAMBUA</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


                <section id="testimonial" data-stellar-background-ratio="0.5">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                      </div>
                    </div>

                  </div>
                </section>
                <!-- ABOUT -->
                <section id="about" data-stellar-background-ratio="0.5">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 col-sm-12" style="margin-bottom:50px;">
                        <script>
                          var marker;

                          function initialize() {
                            var imageTK = 'icon/nt.png';

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
                            $que = mysqli_query($con, "select * from gereja_stasi where id_gereja='$id'");
                            while ($dat = mysqli_fetch_array($que)) {
                              $id_pemer = $dat['id_gereja'];
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
                        <hr class="text-success">
                        <div id="map-canvas" style="width:100%;height:300px;"></div>
                        <hr />
                        <center>
                          <h2 class="m-0 text-primary">Gallery Keuskupan Atambua</h2>
                        </center>
                      </div>
                      <hr />

                      <!--  <h3> <a href="index.php?page=infWil" class="m-0 text-primary">  <?php echo $data["nama"]; ?></a></h3> -->

                      <div class="col-md-12 col-sm-12">
                        <center>
                          <h3 class="m-0 text-primary"><?php echo $data["nama"]; ?></h3>
                        </center>
                        <br><br>

                        <center>
                          <div class="text-primary"><?php echo $data["informasi"]; ?></div>
                        </center>


                        <div class="container-xxl py-5" id="gallery">
                          <div class="container">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                              <h6 class="text-primary"></h6>
                              <h1 class="mb-4"></h1>
                            </div>

                            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                              <div class="col-lg-4 col-md-6 portfolio-item first">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/fotokeag/<?php echo $data["foto1"]; ?>" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/fotokeag/<?php echo $data["foto1"]; ?>" style="background-image: URL(img/fotokeag/<?php echo $data["foto1"]; ?>);" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0">1</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"> </h5>
                                </div>
                              </div>





                              <div class="col-lg-4 col-md-6 portfolio-item second">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/fotokeag/<?php echo $data["foto2"]; ?>" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/46.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0">2</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 portfolio-item third">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/fotokeag/<?php echo $data["foto3"]; ?>" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/07.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0">3</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-6 portfolio-item second">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/gerejaaa/galeri/5.jpg" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Nikolas Bijaepasu.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0"> Paroki St. Nikolas Bijaepasu</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 portfolio-item third">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/gerejaaa/galeri/6.jpg" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Yosef Manamas.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0"> Paroki St. Yosef Manamas</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 portfolio-item first">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/gerejaaa/galeri/7.jpg" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/fatima betun.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0"> Paroki Sta. Maria Fatima Betun</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 portfolio-item first">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/gerejaaa/galeri/8.jpg" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/Paroki St. Antonius Maria Claret Oenopu.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0"> Paroki St. Antonius Maria Claret Oenopu</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 portfolio-item first">
                                <div class="portfolio-img rounded overflow-hidden">
                                  <img class="img-fluid" src="img/gerejaaa/galeri/9.jpg" alt="">
                                  <div class="portfolio-btn">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/gerejaaa/hanemasin.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!--  <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i> --></a>
                                  </div>
                                </div>
                                <div class="pt-3">
                                  <p class="text-primary mb-0"> Paroki St. Antonius Maria Claret Oenopu</p>
                                  <hr class="text-primary w-3 my-2">
                                  <h5 class="lh-base"></h5>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>


                </section>



















              <?php
            }

            function uskup()
            {


              ?>


                <div class="card">
                  <div class="card-footer text-center">


                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                      <h6 class="text-primary"></h6>
                      <h1 class="mb-4">DAFTAR NAMA USKUP DARI DULU SAMPAI SEKARANG</h1>
                    </div>

                    <p><b>Mgr. Jacques Pessers, SVD</b></p>
                    <p>Uskup Atambua pertama adalah Mgr Jacques Pessers SVD. Uskup kelahiran Tilburg, Belanda, 5 Februari 1896 ini ditunjuk sebagai Vikaris Apostolik Timor Olandese (nama pertama Keuskupan Atambua) pada 1 Juni 1937.Pada 11 November 1948 Mgr Jacques Pessers ditunjuk lagi menjadi Vikaris Apostolik Atambua, sebab nama keuskupan berubah dari Vikariat Apostolik Timor Olandese menjadi Vikariat Apostolik Atambua.Mgr Jacques Pessers pensiun dari jabatannya sebagai Uskup Atambua pada 14 November 1957 dan meninggal pada 3 April 1961.</P>

                    <p><b>Mgr. Theodorus van den Tillaart, SVD</b></p>
                    <p>Uskup Atambua kedua adalah Mgr Theodorus van den Tillaart SVD. Ia ditunjuk menjadi Uskup Atambua pada 14 November 1957, dan ditahbiskan pada 29 Juni 1958.Ketika Vikariat Apostolik Atambua ditingkatkan statusnya menjadi Keuskupan Atambua, Mgr Van den Tillaart masih dipercaya untuk menjadi uskup. Ia meninggal pada 7 Mei 1991 di usia 81 tahun.</P>

                    <p><b>Mgr. Anton Pain Ratu, SVD</b></p>
                    <p>Uskup Atambua ketiga adalah Mgr Anton Pain Ratu SVD. Uskup kelahiran Tanah Boleng, Flores, 2 Juni 1929 ini adalah uskup pribumi pertama untuk Keuskupan Atambua. Sebelum resmi menjadi Uskup Atambua, Mgr Anton terlebih dahulu menjadi Uskup Auxilier Atambua.Mgr Anton ditunjuk sebagai Uskup Auxilier Atambua pada 2 April 1982. Ia baru resmi menduduki takhta Keuskupan Atambua pada 3 Februari 1984, dan pensiun pada 2 Juni 2007.</P>

                    <p><b>Mgr. Dominikus Saku, Pr</b></p>
                    <p>Uskup Atambua keempat, yang masih menjabat sampai sekarang adalah Mgr. Dominikus Saku, Pr. Dalam sejarah Keuskupan Atambua, Mgr Domi adalah uskup pertama dari kalangan imam projo Keuskupan Atambua.Mgr Domi lahir di Taikas, Timor, pada 3 April 1960. Setelah menempuh pendidikan calon imam selama kurang lebih 12 tahun, ia ditahbiskan menjadi imam pada 29 September 1992.Mgr Domi ditunjuk menjadi Uskup Atambua pada 2 Juni 2007, bersamaan dengan berhentinya Mgr Anton dari jabatannya sebagai Uskup Atambua. Mgr Domi menerima tahbisan espiskopal pada 21 September 2007.Tahun ini, Mgr Domi genap 10 tahun menjadi Uskup Atambua. Sepuluh tahun tentu bukan waktu yang singkat. Sudah banyak hal yang dilakukan Mgr Domi untuk perkembangan keuskupan yang berbatasan langsung dengan Timor Leste ini.</P>
                  </div>
                </div>
                <br><br>




              <?php
            }
            function Romo()
            {
              include('koneksi.php');
              $id = $_GET['id'];
              $query = mysqli_query($con, "SELECT * FROM wilayah WHERE id='$id'");
              $data = mysqli_fetch_assoc($query);
              ?>
                <div class="container-fluid page-header py-5 mb-5">
                  <div class="container py-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Nama Pastor</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="index.php?page=readmore">Read More</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="index.php?page=gallery">Gallery</a></li>
                      </ol>
                    </nav>
                  </div>
                </div>






            </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">

          <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">


            <br>

            <div class="container-fluid py-5">
              <div class="container">
                <div class="row align-items-center">

                  <div class="col-lg-12">









                    <article class="x">
                      <div class="card">
                        <center>
                          <h2>Nama Romo Pada <?= $data['nama'] ?></h2>
                        </center>
                        <div class="card-footer ">


                          <div class="row">
                            <div class="table-responsive">
                              <table class="display table table-hover" id="daftar">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class="text-center">Paroki</th>
                                    <th scope="col" class="text-center">Stasi</th>
                                    <th scope="col" class="text-center">Informasi</th>
                                    <th scope="col" class="text-center">Pastor</th>
                                    <th scope="col" class="text-center">Umat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  <?php $takeParoki = mysqli_query($con, "SELECT * FROM tbl_paroki JOIN gereja_stasi ON tbl_paroki.id_parokiii=gereja_stasi.id_paroki JOIN tbl_romo ON gereja_stasi.id_gereja=tbl_romo.id_gereja WHERE tbl_paroki.id_wilayah='$id' ORDER BY gereja_stasi.id_gereja DESC");
                                  if (mysqli_num_rows($takeParoki) > 0) {
                                    while ($dataParoki = mysqli_fetch_assoc($takeParoki)) { ?>
                                      <tr>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?= $dataParoki['nama_paroki'] ?></td>
                                        <td><?= $dataParoki['nama_stasi'] ?></td>
                                        <td><?= $dataParoki['informasi'] ?></td>
                                        <td><?= $dataParoki['nama_pastor'] ?></td>
                                        <td><?= $dataParoki['jumlah_umat'] ?></td>
                                    <?php $no++;
                                    }
                                  }
                                    ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


            </article>
    </section>

  <?php
            }
            function detailRomo()
            {
              $id = $_GET['id'];
              include('koneksi.php');
              $query = mysqli_query($con, "SELECT * FROM tbl_romo WHERE id_pastor = '$id'");
              $data = mysqli_fetch_array($query);
              $nama = $data["nama_pastor"];


  ?>
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="row">

        <div class="owl-carousel owl-theme">
          <div class="item item-first">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="item item-second">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <<h4>SISTEM INFORMASI GEOGRAFIS</h4>
                    <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="item item-third">
            <div class="caption">
              <div class="container">
                <div class="col-md-8 col-sm-12">
                  <h4>SISTEM INFORMASI GEOGRAFIS</h4>
                  <h4>KEUSKUPAN ATAMBUA</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            </div>
          </div>

        </div>
      </section>
      <!-- ABOUT -->
      <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12" style="margin-bottom:50px;">
              <script>
                var marker;

                function initialize() {
                  var imageTK = 'icon/nt.png';

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
                  $que = mysqli_query($con, "select * from gereja_stasi where id_gereja='$id'");
                  while ($dat = mysqli_fetch_array($que)) {
                    $id_pemer = $dat['id_gereja'];
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
              <hr class="text-success">
              <div id="map-canvas" style="width:100%;height:300px;"></div>
              <hr />
              <center>
                <h2 class="m-0 text-primary">Informasi Gereja Katolik Keuskupan Atambua</h2>
              </center>
            </div>
            <hr />

            <!--  <h3> <a href="index.php?page=infWil" class="m-0 text-primary">  <?php echo $data["nama"]; ?></a></h3> -->

            <div class="col-md-6 col-sm-12">
              <h3 class="m-0 text-primary"> <?php echo $data["nama"]; ?></h3>

              <hr>
              <h5 class="m-0 text-primary">Pastor Paroki:</hr>
              </h5> <br />
              <h5 class="m-0 text"> <?php echo $data["pastor"]; ?></h5>

              <hr>
              <h5 class="m-0 text-primary">Informasi :</hr>
              </h5> <br />
              <h5 class="justify"><?php echo $data["informasi"]; ?></h5>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                <img src="img/fotokeag/<?php echo $data["foto"]; ?>" class="img-responsive" alt="" style="max-height:400px;">

              </div>
            </div>

          </div>
        </div>
      </section>

















    <?php
            }
