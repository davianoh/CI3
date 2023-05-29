<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pemesanan Ticket Bus Surabaya Online</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Jadwal Yang Tersedia</h1>

	<h3>Current Balance : <?php echo $queryUsr->balance ?> </h3>
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Admin Only +Jadwal</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>kode</td>
			<td>Origin</td>
			<td>Destinasi</td>
			<td>Harga</td>
			<td>Kapasitas</td>
			<td>Seat</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAllRsv as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $row->kode ?></td>
			<td><?php echo $row->origin ?></td>
			<td><?php echo $row->destinasi ?></td>
			<td><?php echo $row->harga ?></td>
			<td><?php echo $row->kapasitas ?></td>
			<td><?php echo $row->seats ?></td>
			<!-- <td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->kode ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->kode ?>">Delete</a></td> -->
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->kode ?>">Buy</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>