<?php
include '../model/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Data Barang</h1>
	<a href="input.php">Input Data Barang</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Merek</th>
			<th>Harga</th>
			
			<th>Opsi</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $data['merek']?></td>
					<td><?php echo $data['harga']?></td>
					
					<td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a>
            <a href="../controller/proses.php?id=<?php echo $data['id']; ?>&aksi=hapus">Hapus</a>
					</td>
				</tr>
		<?php 
		}
		 ?>
	</table>
</body>
</html>