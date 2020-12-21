<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_saluran 
		(nama,luas,idgolongan) 
		VALUES (?,?,?)");

	$stmt->bind_param("sss", 
		$_POST['nama'],
		$_POST['luas'],
		$_POST['idgolongan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Saluran berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data Saluran Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_saluran  SET 
		nama=?,
		luas=?
		where idsaluran=?");
	$stmt->bind_param("sss",
		$_POST['nama'],
		$_POST['luas'],
		$_POST['idsaluran']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Saluran berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data Saluran Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_saluran where idsaluran=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Saluran Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=golongan/data';</script>";	
	} else {
		echo "<script>alert('Data Saluran Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>