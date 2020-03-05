<div class="container">
<h3>Cari Buku : <b><?php echo $_GET['cari_buku']?></b> | <a href="./?a=buku">Tampilkan Semua Buku</a></h3>
<form method="get"><input type="text" name="cari_buku" placeholder="Cari buku..." value="<?php echo $_GET['cari_buku'];?>"><button type="submit" style="background: none;border: none"><p>Cari Buku</p></button></form><br>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Th. Terbit</th>
			<th>Asal</th>
			<th>Klasifikasi</th>
			<th>Opsi</th>
		</tr>

		<?php
		$query = mysqli_query($db, "SELECT*FROM lsp_buku WHERE no LIKE '%$_GET[cari_buku]%' OR tanggal LIKE '%$_GET[cari_buku]%' OR judul LIKE '%$_GET[cari_buku]%' OR pengarang LIKE '%$_GET[cari_buku]%' OR penerbit LIKE '%$_GET[cari_buku]%' OR tahun_terbit LIKE '%$_GET[cari_buku]%' OR asal LIKE '%$_GET[cari_buku]%' OR klasifikasi LIKE '%$_GET[cari_buku]%'");
		while ($buku = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $buku['no'];?></td>
			<td><?php echo $buku['tanggal'];?></td>
			<td><?php echo $buku['judul'];?></td>
			<td><?php echo $buku['pengarang'];?></td>
			<td><?php echo $buku['penerbit'];?></td>
			<td><?php echo $buku['tahun_terbit'];?></td>
			<td><?php echo $buku['asal'];?></td>
			<td><?php echo $buku['klasifikasi'];?></td>
			<td><a href="./?a=buku&b=ubah&no=<?php echo $buku['no']?>"><p>Ubah</p></a><a href="#"><p>Hapus</p></a></td>
		</tr>
		<?php
		}
		?>
	</table>
</div>