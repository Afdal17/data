<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?> 

</body>s
<body>
	
	<h1 align="center">Data Mahasiswa</h1>
	<table border="2" cellspacing="0"cellpadding="5" align="center">
		<tr align="center" bgcolor="#6BB93A" >
			<td width="200">DATA DIRI</td>
			<td width="400">KETERANGAN</td>
			<td width="200">FOTO</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $_POST["nama"]; ?></td>
			<td rowspan="10"><img src="afdal.jpeg" width="200"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><?php echo $_POST["nim"];?></td>
		<tr>
			<td>Tempat Tgl Lahir</td>
			<td><?php echo $_POST["tempat_lahir"]; ?>, <?php echo $_POST['tgl_lahir'] ?></td>
		</tr>
		<tr>
			<td>Departemen</td>
			<td><?php echo $_POST["departemen"];?></td>
		</tr>
		<tr>
			<td> Jenis Kelamin</td>
			<td><?php echo $_POST["jk"];?></td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td><?php echo $_POST["kewarganegaraan"];?></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><?php echo $_POST["semester"];?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $_POST["alamat"];?></td>
		</tr>
		<tr>
			<td>Kelainan Khusus</td>
			<td><?php echo $_POST["kelainan"];?></td>
		</tr>
		<tr>
			<td>Hobi & bakat</td>
			<td><?php echo $_POST["hobibakat"];?></td>
		</tr>
	</table>
</body>
</html>