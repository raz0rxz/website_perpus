<div class="container">
	<h1>Status</h1>
	<hr>
	<h4>Jumlah Buku : <?php echo mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_buku"));?></h4>
	<table>
	<tr>
			<h4>Jumlah Peminjaman :</h4>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<th>1. Sedang Dipinjam</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_peminjaman WHERE status = '0'"));?></td>
		</tr>
		<tr>
			<th>2. Sudah Dikembalikan</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_peminjaman WHERE status = '1'"));?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>---+</td>
		</tr>
		<tr>
			<th>Total</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($db, "SELECT*FROM lsp_peminjaman"));?></td>
		</tr>
	</table>
</div>