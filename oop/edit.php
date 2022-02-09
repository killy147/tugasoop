<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_siswa = $db->get_by_id($id);
}
else
{
	header('location:tampildata.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_siswa['id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_siswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="ttl" value="<?php echo $data_siswa['ttl']; ?>"/></td>
	</tr>
	<tr>
		<td>TTL</td>
		<td>:</td>
		<td><input type="date" name="tanggal" value="<?php echo $data_siswa['tanggal']; ?>"/></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="warga" value="<?php echo $data_siswa['warga']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data_siswa['alamat']; ?>"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $data_siswa['email']; ?>"/></td>
	</tr>
    <tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="nohp" value="<?php echo $data_siswa['nohp']; ?>"/></td>
	</tr>
    <tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><input type="text" name="asalsmp" value="<?php echo $data_siswa['asalsmp']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="ayah" value="<?php echo $data_siswa['ayah']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="ibu" value="<?php echo $data_siswa['ibu']; ?>"/></td>
	</tr>
    <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="penghasilan" value="<?php echo $data_siswa['penghasilan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>