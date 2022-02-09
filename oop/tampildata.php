<?php 	
include('koneksi.php');
$db = new database();
$data_siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Database Siswa</h1>
<button><a href="tambahdata.php" style="text-decoration:none">Tambah Data</a></button>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
            <th>Tempat Lahir</th>
            <th>TTL</th>
            <th>Warga Negara</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Asal Sekolah</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Penghasilan Orang Tua</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['ttl']; ?></td>
				<td><?php echo $row['tanggal']; ?></td>
				<td><?php echo $row['warga']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['nohp']; ?></td>
                <td><?php echo $row['asalsmp']; ?></td>
                <td><?php echo $row['ayah']; ?></td>
                <td><?php echo $row['ibu']; ?></td>
                <td><?php echo $row['penghasilan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>