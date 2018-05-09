<!DOCTYPE html>
<html>
<head>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<title>Belajar Array</title>
</head>
<body>
<h1>Array Sisfo</h1>
<?php 
 $mahasiswa =["Alysha", "Bagas", "Cindy", "Dian", "Ellisa"];

 $prodi=[
 			[
 			"id"=>1, 
 			"nama"=>"Sisfo",
 			"kuota"=>58,
 			"kaprodi"=>"Ilhamsyah"
 			],
 			[
 			"id"=>2, 
 			"nama"=>"Ilkel",
 			"kuota"=>32,
 			"kaprodi"=>"Nora"
 			],
 			[
 			"id"=>3, 
 			"nama"=>"Kimia",
 			"kuota"=>40,
 			"kaprodi"=>"Andi"
 			],
 			[
 			"id"=>4, 
 			"nama"=>"Fisika",
 			"kuota"=>25,
 			"kaprodi"=>"Nurhasanah"
 			],
 			[
 			"id"=>5, 
 			"nama"=>"Biologi",
 			"kuota"=>40,
 			"kaprodi"=>"Rizalinda"
 			]

 		];

 ?>

 <h2><?php echo $mahasiswa[1]; ?></h2>
 <h3><?= $prodi[1]["nama"]; ?></h3>

<?php foreach ($prodi as $prd) {
	echo $prd['nama'];
} ?>
 
<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama prodi</th>
			<th>Nama kaprodi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($prodi as $prd) : ?>
		<tr>
			<td><?= $prd['id'];?></td>
			<td><?= $prd['nama'];?></td>
			<td><?= $prd['kaprodi'];?></td>
		</tr>
	<<?php endforeach; ?>
	</tbody>

</table>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>