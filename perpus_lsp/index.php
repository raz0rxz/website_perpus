<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan LSP</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","lsp_perpus");
include 'panggil/menu.php';
$tgl = date_format(date_create(@$_POST['tanggal']), "d/m/Y");
$kembali = date("d/m/Y", strtotime("+7 day"));

$hbuku = mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_buku WHERE no='No'"));
$htamu = mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_buku_tamu WHERE nama='Nama'"));
if ($hbuku > 0) {
	mysqli_query($db, "DELETE FROM lsp_buku WHERE no='No'");
}
if ($htamu > 0) {
	mysqli_query($db, "DELETE FROM lsp_buku_tamu WHERE nama='Nama'");
}
else{
if (isset($_GET['a'])) {
	if ($_GET['a'] == 'buku') {
		if (@$_GET['b'] == 'ubah') {
		include 'panggil/ubah_buku.php';
		}
		elseif(@$_GET['b'] == 'tambah'){
		include 'panggil/tambah_buku.php';
		}
		else{
		include 'panggil/buku.php';
		}
	}
	if ($_GET['a'] == 'peminjaman') {
		include 'panggil/peminjaman.php';
	}

	if ($_GET['a'] == 'status') {
		include 'panggil/status.php';
	}
}
elseif (isset($_GET['cari_buku'])) {
	include 'panggil/cari_buku.php';
}
else{
include 'panggil/selamat-datang.html';
include 'panggil/buku-tamu.php';
}
}
?>
</body>
</html>