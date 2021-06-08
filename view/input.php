<!DOCTYPE html>
<html>
<head>
	<title>Input Data Barang</title>
</head>
<body>

	<h1>Input Data Barang</h1>
    <form action="../controller/proses.php?aksi=tambah" method="post">
    <table>
			<tr>
				<td>Merek</td>
				<td><input type="text" name="merek"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>