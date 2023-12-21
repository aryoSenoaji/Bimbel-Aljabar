<?php 
require 'admin/functions.php';

// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "aljabar");

// cek apakah tombol submit sudah di pencet
if( isset($_POST["submit"]) ) {
	
	
	
	// cek apakah data berhasil masuk atau tidak
	if(tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil ditambahkan');
				document.location.href = 'index7.php'
			</script>
		";
	} else{
		echo "
			Data gagal ditambahlkan
		";
	}
}

?>

	}
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar</title>
<link rel="stylesheet" href="style7.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome-5-pro/css/all.min.css">
</head>

<body>
<div class="container pendaftaran">
	<div class="row mt-5">
		<img src="" alt="logo" class="gambarLogo">
	</div>
	<div class="row mt-5 text-center judul">
		<h2>Silakan lalukan pendaftaran dibawah ini</h2><br>
		<p class="mt-2">Isi form dibawah ini</p>
	</div>
	<div class="row">
		<form class="row g-3" action="" method="post" enctype="multipart/form-data">
		  <div class="col-12 mb-4">
			<label for="inputEmail" class="form-label">Masukan email siswa</label>
			<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="inigmail@gmail.com">
		  </div>
		  <div class="col-md-6 mb-4">
			<label for="inputName" class="form-label">Nama siswa</label>
			<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Killua Zoldyck">
		  </div>
		  <div class="col-md-6 mb-4">
			<label for="inputTtl" class="form-label">Tempat, tanggal, lahir</label>
			<input type="text" class="form-control" id="inputTtl" name="inputTtl" placeholder="25 Desember 2000, Jakarta / 25 - 12 - 2000, Jakarta">
		  </div>
		  <div class="col-md-6 mb-4">
			<label for="inputSekolah" class="form-label">Asal sekolah</label>
			<input type="text" class="form-control" id="inputSekolah" name="inputSekolah" placeholder="SMPN 69 Rawagenggong">
		  </div>
		  <div class="col-md-4 mb-4">
			<label for="inputKelas" class="form-label">Kelas</label>
			<select id="inputKelas" class="form-select" name="inputKelas">
			  <option selected>Piih Kelas</option>
			   <option value="sd1">1 SD</option>
    		   <option value="sd2">2 SD</option>
               <option value="sd3">3 SD </option>
               <option value="sd4">4 SD </option>
               <option value="sd5">5 SD </option>
               <option value="sd6">6 SD </option>
               <option value="smp1">1 SMP</option>
               <option value="smp2">2 SMP</option>
               <option value="smp3">3 SMP</option>
               <option value="sma1">1 SMA IPA</option>
               <option value="sma1b">1 SMA IPS </option>
               <option value="sma2">2 SMA IPA</option>
               <option value="sma2b">2 SMA IPS</option>
               <option value="sma3">3 SMA IPA</option>
               <option value="sma3b">3 SMA IPS</option>
			</select>
		  </div>
		  <div class="col-md-2 mb-4">
			<label for="inputFoto" class="form-label">Foto raport terakhir</label>
  			<input class="form-control form-control-sm" id="inputFoto" type="file" name="inputFoto">
		  </div>
		  <div class="col-md-12 mb-4">
			<label for="inputPaket" class="form-label">Pilih Paket</label>
			<select id="inputPaket" class="form-select" name="inputPaket">
			  <option selected>Piih paket program</option>
			   <option value="reguler">Reguler</option>
    		   <option value="private">Private</option>
			   <option value="english">English</option>
			</select>
		  </div>
		  <div class="col-md-4 mb-4">
			<label for="inputOrtu" class="form-label">Nama wali/Orang tua siswa</label>
			<input type="text" class="form-control" id="inputOrtu" name="inputOrtu" placeholder="Anton Xerxes">
		  </div>
		  <div class="col-md-4 mb-4">
			<label for="inputPekerjaan" class="form-label">Pekerjaan orang tua</label>
			<input type="text" class="form-control" id="inputPekerjaan" name="inputPekerjaan" placeholder="Berdagang">
		  </div>
		  <div class="col-md-4 mb-4">
			<label for="inputNomor" class="form-label">No Telepon orang tua</label>
			<input type="text" class="form-control" id="inputNomor" name="inputNomor" placeholder="084309096969">
		  </div>
		  <div class="col-md-12 note mb-4">
			<p>Untuk pembayaran akan kami hubungi langsung secara pribadi dengan nomor yang terdaftar di <a href="index6.php">sini</a></p>
		  </div>
		  <div class="col-lg-12 mb-4 d-grid">
			<button type="submit" name="submit" class="btn btn-outline-dark btn-block">Daftar!</button>
		  </div>
		</form>
	</div>
</div>
	
	

<script src="bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
</body>
</html>