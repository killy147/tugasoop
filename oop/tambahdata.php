<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="ttl"/></td>
	</tr>
    <tr>
		<td>TTL</td>
		<td>:</td>
		<td><input type="date" name="tanggal"/></td>
	</tr>
    <tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="warga"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"/></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="nohp"/></td>
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><input type="text" name="asalsmp"/></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="ayah"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="ibu"/></td>
	</tr>
    <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="penghasilan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>