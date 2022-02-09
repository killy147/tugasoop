<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_daftar";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    function tambah_data($nama,$ttl,$tanggal,$warga,$alamat,$email,$nohp,$asalsmp,$ayah,$ibu,$penghasilan)
	{
		mysqli_query($this->koneksi,"insert into siswa values ('','$nama','$ttl','$tanggal','$warga','$alamat','$email','$nohp','$asalsmp','$ayah','$ibu','$penghasilan','')");
	}
	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
		return $query->fetch_array();
	}
	function update_data($nama,$ttl,$tanggal,$warga,$alamat,$email,$nohp,$asalsmp,$ayah,$ibu,$penghasilan,$id)
	{
		$query = mysqli_query($this->koneksi,"update siswa set nama='$nama',ttl='$ttl',tanggal='$tanggal',warga='$warga',alamat='$alamat',email='$email',nohp='$nohp',asalsmp='$asalsmp',ayah='$ayah',ibu='$ibu',penghasilan='$penghasilan', foto='' where id= $id");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from siswa where id='$id'");
	}
}
?>