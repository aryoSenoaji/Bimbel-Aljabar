<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "aljabar");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$inputEmail = htmlspecialchars($data["inputEmail"]);
	$inputName = htmlspecialchars($data["inputName"]);
	$inputTtl = htmlspecialchars($data["inputTtl"]);
	$inputSekolah = htmlspecialchars($data["inputSekolah"]);
	$inputKelas = htmlspecialchars($data["inputKelas"]);
	$inputPaket = htmlspecialchars($data["inputPaket"]);
	$inputOrtu = htmlspecialchars($data["inputOrtu"]);
	$inputPekerjaan = htmlspecialchars($data["inputPekerjaan"]);
	$inputNomor = htmlspecialchars($data["inputNomor"]);

	// upload gambar dahulu
	$inputFoto = upload();
	if(!$inputFoto) {
		return false;
	}	
	
	
	
	$query = "INSERT INTO pendaftaran
				VALUES
			('', '$inputEmail', '$inputName', '$inputTtl', '$inputSekolah', '$inputKelas', '$inputFoto', '$inputPaket', '$inputOrtu', '$inputPekerjaan', '$inputNomor')
	";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile = $_FILES['inputFoto']['name'];
	$ukuranFile = $_FILES['inputFoto']['size'];
	$error = $_FILES['inputFoto']['error'];
	$tmpName = $_FILES['inputFoto']['tmp_name'];
	
	// cek apakah tidak ada gambar yang dipuload
	if($error === 4){
		echo"
			<script>
				alert('Pilih Gambar Terlebih Dahulu');
			</script>";
		
		return false;
	}
	
	// cek hanya gambar saja yang bisa masuk/upload
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ektensiGambar = explode('.', $namaFile);
	$ektensiGambar = strtolower(end($ektensiGambar));
	if(!in_array($ektensiGambar, $ekstensiGambarValid)){
		echo"
			<script>
				alert('Upload Gambar!');
			</script>";
		
			return false;
	}
	
	// cek jika ukuranya terlalu besar
	if(	$ukuranFile > 3000000 ) {
		echo"
			<script>
				alert('Ukuran Terlalu Besar');
			</script>";
		
		return false;
	}
	
	// lolos pengecekan, gambar siap dipindahkan ke tujuan
	// generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ektensiGambar;
	
	
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru );
	return $namaFileBaru;
}

?>