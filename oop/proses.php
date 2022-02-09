<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['ttl'],$_POST['tanggal'],$_POST['warga'],$_POST['alamat'],$_POST['email'],$_POST['nohp'],$_POST['asalsmp'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan']);
	header('location:tampildata.php');
}elseif($action=="update")
{
	$koneksi->update_data($_POST['nama'],$_POST['ttl'],$_POST['tanggal'],$_POST['warga'],$_POST['alamat'],$_POST['email'],$_POST['nohp'],$_POST['asalsmp'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan'],$_POST['id']);
	header('location:tampildata.php');
}elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampildata.php');
}
?>