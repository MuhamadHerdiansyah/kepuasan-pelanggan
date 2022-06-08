<?php 
$conn = mysqli_connect("localhost", "root", "", "pelayanan");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}



function tambah($data) {
	global $conn;

	$tanggapan = $data["tanggapan"];
	$rate = $data["rate"];
	
	$query = "INSERT INTO rate
				VALUES
			  ('', '$tanggapan', '$rate','','')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function login($data) {
	global $conn;

	$username = $data["username"];
	$password = $data["password"];
	
	try {
		$query="SELECT * FROM users WHERE username='$username'";
		$dt = query($query);

		if ($password == $dt[0]['password']) {
			// header("Location: admin.php");
		}else {
			var_dump('Password Salah');die;

		}
	} catch (\Throwable $th) {
		var_dump('User Tidak Ditemukan');die;
	}
	
	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	

	$query = "UPDATE mahasiswa SET
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}






?>