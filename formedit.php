<?php
include("config.php");
if ( isset($_GET['id']) ) 
{
    $id = $_GET['id'];
	$query = pg_query("SELECT * FROM calonsiswa WHERE id = $id");
	$siswa = pg_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3> [EDIT] Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="prosesedit.php" method="POST">
		<fieldset>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama']; ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat']; ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($siswa['jenis_kelamin']=="laki-laki") echo "checked"; ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if($siswa['jenis_kelamin']=="perempuan") echo "checked"; ?>> Perempuan</label>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal']; ?>"/>
		</p>
		<p>
			<input type="submit" value="Edit" name="edit" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
