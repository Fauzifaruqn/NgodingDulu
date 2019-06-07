<?php
// Koneksikan ke Database
// Membutuhkan sebuah function atau driver
// Butuh Parameter
$conn = mysqli_connect("localhost","root" ,"", "booksstore");


function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
  }
  return $rows;
}


function tambah($data){

    global $conn;

    // Ambil data
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $jmlHalaman = htmlspecialchars($data["jmlHalaman"]);
    $harga = htmlspecialchars($data["harga"]);
    

    // Upload gambar dulu, jalankan fungsi gambar
  // upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

    $query = "INSERT INTO bookdetails
                VALUES
                ('','$judul','$penulis','$penerbit','$jmlHalaman','$harga','$gambar')
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}
	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}
	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}
	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	return $namaFileBaru;
}


function hapus($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM bookdetails WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    // Ambil data
    $id = htmlspecialchars($data["id"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $jmlHalaman = htmlspecialchars($data["jmlHalaman"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
	
    // cek apakah user pilih gambar baru atau tidak
      if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
      }
      else{
        $gambar = upload();
      }   
  

    $query = "UPDATE bookdetails SET 
                judul = '$judul',
                penulis = '$penulis',
                penerbit = '$penerbit',
                jmlHalaman = '$jmlHalaman',
                harga ='$harga',
                gambar ='$gambar'

                WHERE id = $id
    ";


    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM bookdetails
				WHERE
			  judul LIKE '%$keyword%' OR
			  penulis LIKE '%$keyword%' OR
			  penerbit LIKE '%$keyword%' OR
			  jmlHalaman LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' 
        
			";
	return query($query);
}

?>