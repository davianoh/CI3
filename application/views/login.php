<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Ticket Bus Surabaya Online</title>
</head>
<body>
	<h3>Login Users</h3>
	<form action="<?php echo base_url('home/fungsi_login') ?>" method="post">
	<table>
		<tr>
			<td>user</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Login</button></td>
		</tr>
	</table>
	</form>
</body>
</html>