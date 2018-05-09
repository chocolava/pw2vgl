<!DOCTYPE html>
<html>
<head>
	<title>Halaman Berhasil</title>
</head>
<body>

	<h1>Selamat Bergabung</h1>
	<p>Anda terdaftar dengan identitas :</p>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama']; ?></td>

		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_POST['alamat']; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $_POST['username']; ?></td>
		</tr>
	 </table>

</body>
</html>