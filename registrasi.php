<!DOCTYPE html>
<html>
	<head>
		<title>Form Pendaftaran 1</title>
	</head>
	<body>
	 	<?php

	 		$kabupaten = [
	 						[
	 							"id"=>1,
	 							"nama_kab"=>"Kota Pontianak"
	 						],
	 						[
	 							"id"=>2,
	 							"nama_kab"=>"Sekadau"
	 						],
	 						[
	 							"id"=>3,
	 							"nama_kab"=>"Sintang"
	 						]

	 					];

	 	?>

		<h1>Registrasi </h1><br>
		<form method="POST" action="proses.php">
				<table>
				<tr>
				<td><label for="nama">Nama</label></td>
					<td>:</td>
					<td><input type="text" Name="nama" size="46" placeholder="Nama"></td>
				</tr>
				<tr>
				<td><label for="username">Username </label></td>
					<td>:</td>
					<td><input type="text" Name="username" size="46" placeholder="Username"></td>
				</tr>
				<tr>
				<td><label for="sandi">Password </label></td>
					<td>:</td>
					<td><input type="password" Name="sandi" size="46" placeholder="Kata Sandi Baru"></td>
				</tr>
				<tr>
				<td><label for="alamat">Alamat </label></td>
					<td>:</td>
					<td><textarea name="alamat" id="alamat" cols="40" placeholder="Alamat sekarang"></textarea></td>
				</tr>
				<tr>
				<td><label for="kabupaten">Kota/Kabupaten</label></td>
					<td>:</td>
					<td><select name="kabupaten">
						<?php foreach ($kabupaten as $kab): ?>
						<option value="<?php echo $kab['id'] ?>"> <?php echo $kab['nama_kab'] ?></option>
						<?php endforeach; ?>
						
					</select>
					</td>
				</tr>
				<tr>
				<td><label for="no_hp">No.HP</label></td>
					<td>:</td>
						<td><input type="no_hp" name="no_hp" size="46" placeholder="Nomor HP"></td>
				</tr>
				<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin </label></td>
					<td>:</td>
						<td><input type="radio" name="jenis_kelamin" value="1">Pria
						<input type="radio" name="jenis_kelamin" value="0">Wanita</td>
						
				</tr>
				<tr>
				<td><label for="prodi">Pilihan Prodi</label></td>
						<td>:</td>
						<td><input type="checkbox" name="prodi1">Sistem Informasi<br>
						<input type="checkbox" name="prodi2">Sistem Komputer<br>
						<input type="checkbox" name="prodi3">Informatika<br></td>
				</tr>

				</table>
	<input value="Kirim" style="background-color: 4985D0; height: 50; width: 150;"type="submit">

	</form>
	</body>
</html>