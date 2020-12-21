<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_golongan 
		(namagolongan,efisiensi) 
		VALUES (?,?)");

	$stmt->bind_param("ss", 
		$_POST['nama'],
		$_POST['efisiensi']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data golongan berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data golongan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_golongan  SET 
		namagolongan=?,
		efisiensi=?
		where idgolongan=?");
	$stmt->bind_param("sss",
		$_POST['nama'],
		$_POST['efisiensi'],
		$_POST['idgolongan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data golongan berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data golongan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_golongan where idgolongan=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data golongan Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data golongan Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>