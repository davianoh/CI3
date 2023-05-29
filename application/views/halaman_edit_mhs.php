<!DOCTYPE html>
<html>
<head>
	<title>Tickets Reservations</title>
</head>
<body>
	<h3>Confirmasi Pemesanan Tickets</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
		<tr>
			<td>Kode Bus</td>
			<td>:</td>
			<td><input type="text" name="kode" value="<?php echo $queryRsvDetail->kode ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jumlah Seats</td>
			<td>:</td>
			<td><input type="text" name="seats"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Confirm</button></td>
		</tr>
	</table>
	</form>
</body>
</html>