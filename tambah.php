<?php
include('koneksi.php');

if (isset($_POST['tAdmin'])) {
  // Deklarasi variable
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $nama = $_POST['nama'];
  if (empty($username) or empty($password)) {

    echo "<script>alert('Username atau password tidak boleh kosong!!!'); history.go(-1); </script>";
  } else {
    $ins = mysqli_query($con, "insert into admin(username,password,nama) values ('$username','$password','$nama')");
    echo "<script>alert('Data berhasil di Tambah');</script>";
    header("location:index_admin.php?page=profil");
  }
}



// ------------tmbahOPERATOR--------------------------

if (isset($_POST['tAdmin'])) {
  // Deklarasi variable
  $username_op = $_POST['username'];
  $password_op = $_POST['password'];
  $nama_op = $_POST['nama'];
  if (empty($username_op) or empty($password_op)) {

    echo "<script>alert('Username atau password tidak boleh kosong!!!'); history.go(-1); </script>";
  } else {
    $ins = mysqli_query($con, "insert into operator(username_op,password_op,nama_op) values ('$username_op','$password_op','$nama_op')");
    echo "<script>alert('Data berhasil di Tambah');</script>";
    header("location:index_admin.php?page=profil");
  }
}





//,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
if (isset($_POST['tParoki'])) {
  // Deklarasi variable
  // $no = $_POST['no'];

  $Paroki = $_POST['Paroki'];
  $pelindung = $_POST['pelindung'];
  $buku_baptis = $_POST['buku_baptis'];
  $nama_pastor = $_POST['nama_pastor'];
  $jumlah_umat = $_POST['jumlah_umat'];
  $dekenat = $_POST['dekenat'];
  $alamat = $_POST['alamat'];
  $keuskupan = 1;

  // ---foto
  // $ekstensi_diperbolehkan  = array('png','jpg','jpeg');
  //  $foto = $_FILES['foto']['name'];
  //  $x = explode('.', $foto);
  //  $ekstensi = strtolower(end($x));
  //  $ukuran = $_FILES['foto']['size'];
  //  $file_tmp = $_FILES['foto']['tmp_name'];

  //  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

  // move_uploaded_file($file_tmp, 'images/fotokeag/'.$foto);
  $query = mysqli_query($con, "insert into daftar_paroki values ('','$keuskupan','$Paroki','$pelindung','$buku_baptis','$nama_pastor','$jumlah_umat','$dekenat','$alamat')");
  if ($query) {
    header("location:index_admin.php?page=daftar");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }

  //  }else{
  //  echo "<script>alert('d harus JPG atau PNG');history.go(-1);</script>";
  // }
}



if (isset($_POST['tParoki1'])) {
  // Deklarasi variable
  // $no = $_POST['no'];

  $Paroki = $_POST['Paroki'];
  $pelindung = $_POST['pelindung'];
  $buku_baptis = $_POST['buku_baptis'];
  $nama_pastor = $_POST['nama_pastor'];
  $jumlah_umat = $_POST['jumlah_umat'];
  $dekenat = $_POST['dekenat'];
  $alamat = $_POST['alamat'];
  $keuskupan = 1;

  // ---foto
  // $ekstensi_diperbolehkan  = array('png','jpg','jpeg');
  //  $foto = $_FILES['foto']['name'];
  //  $x = explode('.', $foto);
  //  $ekstensi = strtolower(end($x));
  //  $ukuran = $_FILES['foto']['size'];
  //  $file_tmp = $_FILES['foto']['tmp_name'];

  //  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

  // move_uploaded_file($file_tmp, 'images/fotokeag/'.$foto);
  $query = mysqli_query($con, "insert into daftar_paroki1 values ('','$keuskupan','$Paroki','$pelindung','$buku_baptis','$nama_pastor','$jumlah_umat','$dekenat','$alamat')");
  if ($query) {
    header("location:index_admin.php?page=daftar1");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }

  //  }else{
  //  echo "<script>alert('d harus JPG atau PNG');history.go(-1);</script>";
  // }
}





// -------------------------------------

if (isset($_POST['tKutipan'])) {
  // Deklarasi variable
  $isi = $_POST['isi'];
  $ayat = $_POST['ayat'];

  $keuskupan = 1;
  //---foto



  $query = mysqli_query($con, "insert into kutipan values ('','$keuskupan','$ayat','$isi')");
  if ($query) {
    header("location:index_admin.php?page=tambahKutipan");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}



// ------------------------------------


if (isset($_POST['tInformasi'])) {
  // Deklarasi variable
  $informasi = $_POST['informasi'];


  $keuskupan = 1;
  //---foto



  $query = mysqli_query($con, "insert into informasi values ('','$keuskupan','$informasi')");
  if ($query) {
    header("location:index_admin.php?page=tambahInfKeus");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

// by Netmedia Framecode start

if (isset($_POST['tGereja'])) {
  // Deklarasi variable
  $id_paroki = $_POST['id-paroki'];
  $nama = $_POST['nama'];
  $checkNama = mysqli_query($con, "SELECT * FROM gereja_stasi WHERE nama_stasi='$nama'");
  if (mysqli_num_rows($checkNama) > 0) {
    echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
    return false;
  }
  $informasi = $_POST['informasi'];
  $umat = $_POST['umat'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  //---foto
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

  $query = mysqli_query($con, "INSERT INTO gereja_stasi(id_paroki,nama_stasi,informasi,jumlah_umat,longitude,latitude,foto) VALUES('$id_paroki','$nama','$informasi','$umat','$longitude','$latitude','$encrypt')");
  if ($query) {
    header("location:index_admin.php?page=gereja");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

if (isset($_POST['tRomo'])) {
  $nama_pastor = $_POST['nama_pastor'];
  $checkNama = mysqli_query($con, "SELECT * FROM tbl_romo WHERE nama_pastor='$nama_pastor'");
  if (mysqli_num_rows($checkNama) > 0) {
    echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
    return false;
  }
  $id_gereja = $_POST['id-gereja'];
  $query = mysqli_query($con, "INSERT INTO tbl_romo(id_gereja,nama_pastor) values ('$id_gereja','$nama_pastor')");
  if ($query) {
    header("location:index_admin.php?page=RomoBelu");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

if (isset($_POST['tKeuskupan'])) {
  $nama = $_POST['nama_keuskupan'];
  $checkNama = mysqli_query($con, "SELECT * FROM keuskupan WHERE nama_keuskupan='$nama'");
  if (mysqli_num_rows($checkNama) > 0) {
    echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
    return false;
  }
  $query = mysqli_query($con, "INSERT INTO keuskupan(nama_keuskupan) VALUES ('$nama')");
  if ($query) {
    header("location:index_admin.php?page=tambahKeuskupan");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

if (isset($_POST['tAlbumParokiii'])) {
  $id = $_POST['id'];
  // foto
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
  move_uploaded_file($tmpName, 'img/aParoki/' . $encrypt);

  $query = mysqli_query($con, "INSERT INTO gallery(id_paroki,foto) VALUES('$id','$encrypt')");
  if ($query) {
    header("location:index_admin.php?page=detailAlbumParoki&id=" . $id);
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

if (isset($_POST['tParokiii'])) {
  $id_keuskupan = $_POST['id-keuskupan'];
  $id_wilayah = $_POST['id-wilayah'];
  $nama_paroki = $_POST['nama_paroki'];
  $checkNama = mysqli_query($con, "SELECT * FROM tbl_paroki WHERE nama_paroki='$nama_paroki'");
  if (mysqli_num_rows($checkNama) > 0) {
    echo "<script>alert('Nama sudah ada!');history.go(-1);</script>";
    return false;
  }
  $query = mysqli_query($con, "INSERT INTO tbl_paroki(id_keuskupan,id_wilayah,nama_paroki) values ('$id_keuskupan','$id_wilayah','$nama_paroki')");
  if ($query) {
    header("location:index_admin.php?page=tambahParoki");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }
}

//--------------------------------------

// by Netmedia Framecode end

if (isset($_POST['tGallery'])) {
  // Deklarasi variable

  $nama = $_POST['nama'];
  $informasi = $_POST['informasi'];

  $keuskupan = 1;
  //---foto
  $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
  $foto1 = $_FILES['foto1']['name'];
  $foto2 = $_FILES['foto2']['name'];
  $foto3 = $_FILES['foto3']['name'];
  $x = explode('.', $foto1);
  $ekstensi = strtolower(end($x));
  $ukuran   = $_FILES['foto1']['size'];
  $file_tmp = $_FILES['foto1']['tmp_name'];

  $x = explode('.', $foto2);
  $ekstensi = strtolower(end($x));
  $ukuran   = $_FILES['foto2']['size'];
  $file_tmp = $_FILES['foto2']['tmp_name'];

  $x = explode('.', $foto3);
  $ekstensi = strtolower(end($x));
  $ukuran   = $_FILES['foto3']['size'];
  $file_tmp = $_FILES['foto3']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

    move_uploaded_file($file_tmp, 'img/fotokeag/' . $foto1 . $foto2 . $foto3);
    $query = mysqli_query($con, "insert into gallery values ('','$keuskupan','$nama','$informasi','$foto1','$foto2','$foto3')");
    if ($query) {
      header("location:index_admin.php?page=gallery");
    } else {
      echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
    }
  } else {
    echo "<script>alert('Ekstensi File harus JPG atau PNG');history.go(-1);</script>";
  }
}
