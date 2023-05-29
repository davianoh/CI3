<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Halaman Tambah Mahasiswa</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>Kode</td>
			<td>:</td>
			<td><input type="text" name="kode"></td>
		</tr>
		<tr>
			<td>Origin</td>
			<td>:</td>
			<td><input type="text" name="origin"></td>
		</tr>
		<tr>
			<td>Destinasi</td>
			<td>:</td>
			<td><input type="text" name="destinasi"></td>
		</tr>
		<tr>
			<td>Kapasitas</td>
			<td>:</td>
			<td><input type="text" name="kapasitas"></td>
		</tr>
		<tr>
			<td>Jadwal</td>
			<td>:</td>
			<td><input type="text" name="jadwal"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah Jadwal</button></td>
		</tr>
	</table>
	</form>
</body>
</html>