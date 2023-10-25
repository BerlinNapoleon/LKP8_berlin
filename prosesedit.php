<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['edit'])){

	// ambil data dari formulir
    $id_SW = $_POST['id'];
	$nama_SW = $_POST['nama'];
	$alamat_SW = $_POST['alamat'];
	$JK_SW = $_POST['jenis_kelamin'];
	$sekolah_SW = $_POST['sekolah_asal'];

	// buat query
  $query = pg_query("UPDATE calonsiswa SET nama='$nama_SW', alamat='$alamat_SW', jenis_kelamin = '$JK_SW', sekolah_asal = '$sekolah_SW' WHERE id=$id_SW");

	// apakah query simpan berhasil?
	if( $query==True ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=suksesedit');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagaledit');
	}
} 
else {
	die("Akses dilarang...");
}
?>
