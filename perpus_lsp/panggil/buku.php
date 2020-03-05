<div class="container">
<h3>Data Buku | <a href="./?a=buku&b=tambah"><button>Tambah Buku</button></a></h3>
<form method="get"><input type="text" name="cari_buku" placeholder="Cari buku..."><button type="submit">Cari Buku</button></form><br>
<?php
$query = mysqli_query($db, "SELECT*FROM lsp_buku ORDER by no DESC");
if (mysqli_num_rows($query) < 1) {
	echo "<div class='alert alert-warning'>Tidak Ada Data</div>";
}
?>
	<table class="table" id="buku">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Th. Terbit</th>
			<th>Asal</th>
			<th>Klasifikasi</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>

		<?php
		if (isset($_POST['hapus'])) {
			$query2 = mysqli_query($db, "DELETE FROM lsp_buku WHERE no='$_POST[hapus]'");
			if ($query2) {
				echo "<div class='alert alert-info'>Buku Berhasil Dihapus!</div>";
			}
			else{
				echo "<div class='alert alert-warning'>Gagal Menghapus Buku.</div>";
			}
			header("location:#buku");
		}
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
			<td>
				<?php
				$qq = mysqli_query($db, "SELECT*FROM lsp_peminjaman WHERE no_buku='$buku[no]'");
				$ddqq = mysqli_fetch_array($qq);
				$caripinjam = mysqli_num_rows($qq);
				if ($caripinjam > 0 && $ddqq['status'] !== '1') {
					echo "Dipinjam";
				}
				else{
					echo "Tersedia";
				}
				?>
			</td>
			<td><form method="post"><button><a href="./?a=buku&b=ubah&no=<?php echo $buku['no']?>">Ubah</a></button><button value="<?php echo $buku['no']?>" type="submit" name="hapus" onclick="return confirm('Hapus Buku: <?php echo $buku["judul"];?>?')">Hapus</button></form></td>
		</tr>
		<?php
		}
		?>
	</table>
</div>