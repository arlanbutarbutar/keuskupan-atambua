<?php
include('koneksi.php');

if (isset($_POST["editAdmin"])) {
  $id_admin = $_GET['id'];
  $result = mysqli_query($con, "SELECT * FROM admin WHERE username='$id_admin'");
  $data = mysqli_fetch_array($result);
  $username = $_POST['username'];
  $nama = $_POST['nama'];

  $exe  = mysqli_query($con, "UPDATE admin SET username='$username',nama='$nama' WHERE username='$id_admin'");
  if ($exe) {
    session_start();
    $_SESSION['SESS_USERNAME'] = $username;
    header("location:index_admin.php?page=profil");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}


//------------------------------------------------------ ubah password
if (isset($_POST["ePassword"])) {
  $id_admin = $_GET['id'];

  $result = mysqli_query($con, "SELECT * FROM admin WHERE username='$id_admin'");
  $data = mysqli_fetch_array($result);
  $passlama = md5($_POST['passlama']);
  $password = md5($_POST['passbaru']);
  // $passlama=$_POST['passlama'];
  // $password=$_POST['passbaru'];

  if ($passlama == $data["password"]) {
    $exe  = mysqli_query($con, "UPDATE admin SET password='$password' WHERE username='$id_admin'");
    if ($exe) {
      echo "<script>
        alert('Password berhasil diubah');
        window.location.href='index_admin.php?page=profil';
      </script>";
    } else {
      // pemberitahuan jika error
      echo "<script>alert('Password gagal diubah');history.go(-1);</script>";
    }
  } else {
    echo "<script>alert('Password lama salah!');history.go(-1);</script>";
  }
}

if (isset($_POST["editKeuskupan"])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];

  $exe  = mysqli_query($con, "UPDATE keuskupan SET nama='$nama' WHERE id_keuskupan='$id'");
  if ($exe) {
    header("location:index_admin.php?page=keuskupan");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}



//------------------------


//------------------------
if (isset($_POST["eFotoKesehatan"])) {
  $id = $_GET["id"];

  $ekstensi_diperbolehkan  = array('png', 'jpg', 'jpeg');
  $foto = $_FILES['foto']['name'];
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $ukuran  = $_FILES['foto']['size'];
  $file_tmp = $_FILES['foto']['tmp_name'];


  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

    move_uploaded_file($file_tmp, 'images/fotokes/' . $foto);
    $query  = mysqli_query($con, "UPDATE daftar_paroki SET foto='$foto' WHERE id_par='$id'");
    if ($query) {
      header("location:index_admin.php?page=daftar");
    } else {
      echo "<script>alert('Gagal Upload!');history.go(-1);</script>";
    }
  } else {
    echo "<script>alert('Ekstensi File harus JPG atau PNG');history.go(-1);</script>";
  }
}

if (isset($_POST["eParoki"])) {
  $id = $_GET['id'];
  $Paroki = $_POST['Paroki'];
  $pelindung = $_POST['pelindung'];
  $buku_baptis = $_POST['buku_baptis'];
  $nama_pastor = $_POST['nama_pastor'];
  $jumlah_umat = $_POST['jumlah_umat'];
  $dekenat = $_POST['dekenat'];
  $alamat = $_POST['alamat'];


  $exe  = mysqli_query($con, "UPDATE daftar_paroki SET Paroki='$Paroki',pelindung='$pelindung',buku_baptis='$buku_baptis',nama_pastor='$nama_pastor',jumlah_umat='$jumlah_umat',dekenat='$dekenat',alamat='$alamat' WHERE id_par='$id'");
  if ($exe) {
    header("location:index_admin.php?page=daftar");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

//------------------------

if (isset($_POST["eParoki1"])) {
  $id = $_GET['id'];
  $Paroki = $_POST['Paroki'];
  $pelindung = $_POST['pelindung'];
  $buku_baptis = $_POST['buku_baptis'];
  $nama_pastor = $_POST['nama_pastor'];
  $jumlah_umat = $_POST['jumlah_umat'];
  $dekenat = $_POST['dekenat'];
  $alamat = $_POST['alamat'];


  $exe  = mysqli_query($con, "UPDATE daftar_paroki1 SET Paroki='$Paroki',pelindung='$pelindung',buku_baptis='$buku_baptis',nama_pastor='$nama_pastor',jumlah_umat='$jumlah_umat',dekenat='$dekenat',alamat='$alamat' WHERE id_par='$id'");
  if ($exe) {
    header("location:index_admin.php?page=daftar1");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}



//-------EDITadmin-----------------


//----------EDIToperator--------------
if (isset($_POST["eFotoKeagamaanOP"])) {
  $id = $_GET["id"];

  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $foto = $_FILES['foto']['name'];
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['foto']['size'];
  $file_tmp = $_FILES['foto']['tmp_name'];


  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

    move_uploaded_file($file_tmp, 'images/1/' . $foto);
    $query  = mysqli_query($con, "UPDATE gereja_stasi SET foto='$foto' WHERE id_gereja='$id'");
    if ($query) {
      header("location:index_operator.php?page=gereja");
    } else {
      echo "<script>alert('Gagal Upload!');history.go(-1);</script>";
    }
  } else {
    echo "<script>alert('Ekstensi File harus JPG atau PNG');history.go(-1);</script>";
  }
}

if (isset($_POST["eKeagamaanOP"])) {
  $id = $_GET['id'];
  $informasi = $_POST['informasi'];
  $nama = $_POST['nama'];


  $exe  = mysqli_query($con, "UPDATE gereja_stasi SET nama='$nama',informasi='$informasi' WHERE id_gereja='$id'");
  if ($exe) {
    header("location:index_operator.php?page=gereja");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

if (isset($_POST["eWilayah"])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $informasi = $_POST['informasi'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $exe  = mysqli_query($con, "UPDATE wilayah SET nama='$nama',informasi='$informasi',latitude='$latitude',longitude='$longitude' WHERE id='$id'");
  if ($exe) {
    header("location:index_admin.php?page=wilayah");
  } else {
    // pemberitahuan jika error

    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}




//------------------------

if (isset($_POST["eKutipan"])) {
  $id = $_GET['id'];
  $isi = $_POST['isi'];
  $ayat = $_POST['ayat'];


  $exe  = mysqli_query($con, "UPDATE kutipan SET ayat='$ayat',isi='$isi' WHERE id_kutipan='$id'");
  if ($exe) {
    header("location:index_admin.php?page=tambahKutipan");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}


//---------------------

if (isset($_POST["eInformasi"])) {
  $id = $_GET['id'];
  $informasi = $_POST['informasi'];



  $exe  = mysqli_query($con, "UPDATE informasi SET informasi='$informasi' WHERE id_inf='$id'");
  if ($exe) {
    header("location:index_admin.php?page=tambahInfKeus");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}




//--------------------------------

// by Netmedia Framecode start

if (isset($_POST["eGereja"])) {
  $id = $_GET['id'];
  $id_paroki = $_POST['id-paroki'];
  $nama = $_POST['nama'];
  $namaOld = $_POST['namaOld'];
  if ($nama != $namaOld) {
    $checkNama = mysqli_query($con, "SELECT * FROM gereja_stasi WHERE nama_stasi='$nama'");
    if (mysqli_num_rows($checkNama) > 0) {
      echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
      return false;
    }
  }
  $informasi = $_POST['informasi'];
  $umat = $_POST['umat'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];

  $exe  = mysqli_query($con, "UPDATE gereja_stasi SET id_paroki='$id_paroki', nama_stasi='$nama', informasi='$informasi', jumlah_umat='$umat', latitude='$latitude', longitude='$longitude' WHERE id_gereja='$id'");
  if ($exe) {
    header("location:index_admin.php?page=detailGereja&id=" . $id);
  } else {
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

//--------------------------------

if (isset($_POST["eFotoKeagamaan"])) {
  $id = $_GET["id"];

  $namaFile = $_FILES["foto"]["name"];
  $ukuranFile = $_FILES["foto"]["size"];
  $error = $_FILES["foto"]["error"];
  $tmpName = $_FILES["foto"]["tmp_name"];
  if ($error === 4) {
    echo "<script>alert('Pilih gambar terlebih dahulu!');history.go(-1);</script>";
    return false;
  }
  $ekstensiGambarValid = ['jpg', 'png', 'jpeg', 'heic'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>alert('Maaf, file kamu bukan gambar!');history.go(-1);</script>";
    return false;
  }
  if ($ukuranFile > 2000000) {
    echo "<script>alert('Maaf, ukuran gambar terlalu besar! (2 MB)');history.go(-1);</script>";
    return false;
  }
  $namaFile_encrypt = crc32($namaFile);
  $encrypt = $namaFile_encrypt . "." . $ekstensiGambar;
  move_uploaded_file($tmpName, 'img/fotokeag/' . $encrypt);
  $fotoOld=$_POST['fotoOld'];
  unlink('img/fotokeag/' . $fotoOld);

  $query  = mysqli_query($con, "UPDATE gereja_stasi SET foto='$encrypt' WHERE id_gereja='$id'");
  if ($query) {
    header("location:index_admin.php?page=detailGereja&id=" . $id);
  } else {
    echo "<script>alert('Gagal Upload!');history.go(-1);</script>";
  }
}

//--------------------------------

if (isset($_POST["eRomo"])) {
  $id = $_GET['id'];
  $nama_pastor = $_POST['nama_pastor'];
  $namaOld = $_POST['namaOld'];
  if ($nama_pastor != $namaOld) {
    $checkNama = mysqli_query($con, "SELECT * FROM tbl_romo WHERE nama_pastor='$nama_pastor'");
    if (mysqli_num_rows($checkNama) > 0) {
      echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
      return false;
    }
  }
  $id_gereja = $_POST['id-gereja'];
  $exe  = mysqli_query($con, "UPDATE tbl_romo SET nama_pastor='$nama_pastor', id_gereja='$id_gereja' WHERE id_pastor='$id'");
  if ($exe) {
    header("location:index_admin.php?page=tambahRomo");
  } else {
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

//--------------------------------

if (isset($_POST["eKeuskupan"])) {
  $id = $_GET['id'];
  $nama = $_POST['nama_keuskupan'];
  $namaOld = $_POST['namaOld'];
  if ($nama != $namaOld) {
    $checkNama = mysqli_query($con, "SELECT * FROM keuskupan WHERE nama_keuskupan='$nama'");
    if (mysqli_num_rows($checkNama) > 0) {
      echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
      return false;
    }
  }
  $exe  = mysqli_query($con, "UPDATE keuskupan SET nama_keuskupan='$nama' WHERE id_keuskupan='$id'");
  if ($exe) {
    header("location:index_admin.php?page=tambahKeuskupan");
  } else {
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

//--------------------------------

if (isset($_POST["eParokiii"])) {
  $id = $_GET['id'];
  $id_keuskupan = $_POST['id-keuskupan'];
  $id_wilayah = $_POST['id-wilayah'];
  $nama = $_POST['nama_paroki'];
  $namaOld = $_POST['namaOld'];
  if ($nama != $namaOld) {
    $checkNama = mysqli_query($con, "SELECT * FROM tbl_paroki WHERE nama_paroki='$nama'");
    if (mysqli_num_rows($checkNama) > 0) {
      echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
      return false;
    }
  }
  $exe  = mysqli_query($con, "UPDATE tbl_paroki SET id_keuskupan='$id_keuskupan', id_wilayah='$id_wilayah', nama_paroki='$nama' WHERE id_parokiii='$id'");
  if ($exe) {
    header("location:index_admin.php?page=tambahParoki");
  } else {
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}

// by Netmedia Framecode end

//==========================

if (isset($_POST["eFotoGallery"])) {
  $id = $_GET["id"];

  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $foto1 = $_FILES['foto1']['name'];
  $foto2 = $_FILES['foto2']['name'];
  $foto3 = $_FILES['foto3']['name'];

  $x = explode('.', $foto1);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['foto1']['size'];
  $file_tmp = $_FILES['foto1']['tmp_name'];

  $x = explode('.', $foto2);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['foto2']['size'];
  $file_tmp = $_FILES['foto2']['tmp_name'];

  $x = explode('.', $foto3);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['foto3']['size'];
  $file_tmp = $_FILES['foto3']['tmp_name'];


  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

    move_uploaded_file($file_tmp, 'img/fotokeag/' . $foto1 . $foto2 . $foto3);
    $query  = mysqli_query($con, "UPDATE gallery SET foto1='$foto1',foto2='$foto2',foto3='$foto3'WHERE id_gallery='$id'");
    if ($query) {
      header("location:index_admin.php?page=gallery");
    } else {
      echo "<script>alert('Gagal Upload!');history.go(-1);</script>";
    }
  } else {
    echo "<script>alert('Ekstensi File harus JPG atau PNG');history.go(-1);</script>";
  }
}

if (isset($_POST["eGallery"])) {
  $id = $_GET['id'];
  $informasi = $_POST['informasi'];
  $nama = $_POST['nama'];


  $exe  = mysqli_query($con, "UPDATE gallery SET nama='$nama',informasi='$informasi' WHERE id_gallery='$id'");
  if ($exe) {
    header("location:index_admin.php?page=gallery");
  } else {
    // pemberitahuan jika error
    echo "<script>alert('Data gagal diubah');history.go(-1);</script>";
  }
}
