<h1>Kumpulan Isi Kategori</h1>
<div class="col-md-6">
	

<table class="table table-bordered">
	<tr>
		<th>No.</th>
		<th>Nama Kategori</th>
	</tr>
		<?php foreach ($data_kategori as $dk): ?>
	<tbody>
		
		<tr>
			<td><?= $dk['id_kategori'] ?></td>
			<td><?= $dk['nama_kategori'] ?></td>
		</tr>
	</tbody>



<?php endforeach ?>
	
</table>
</div>