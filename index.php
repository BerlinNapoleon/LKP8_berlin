<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK Coding</h1>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="formdaftar.php">Daftar Baru</a></li>
			<li><a href="daftarsiswa.php">Pendaftar</a></li>
			<li><a href="daftarsiswa.php">Edit</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			}
			else if($_GET['status'] == 'suksesedit'){
				echo "Edit berhasil!";
			}
			else if($_GET['status'] == 'gagaledit'){
				echo "Edit gagal!";
			} 
			else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
