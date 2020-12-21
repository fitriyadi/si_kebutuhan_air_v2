<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_tanaman 
		(nama,jenis,perkolasi,hujanefektif) 
		VALUES (?,?,?,?)");

	$stmt->bind_param("ssss", 
		$_POST['nama'],
		$_POST['jenis'],
		$_POST['perkolasi'],
		$_POST['hujanefektif']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data tanaman berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=tanaman/data';</script>";	
	} else {
		echo "<script>alert('Data tanaman Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_tanaman  SET 
		nama=?,
		jenis=?,
		perkolasi=?,
		hujanefektif=?
		where idtanaman=?");
	$stmt->bind_param("sssss",
		$_POST['nama'],
		$_POST['jenis'],
		$_POST['perkolasi'],
		$_POST['hujanefektif'],
		$_POST['idtanaman']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data tanaman berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=tanaman/data';</script>";	
	} else {
		echo "<script>alert('Data tanaman Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_tanaman where idtanaman=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data tanaman Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=tanaman/data';</script>";	
	} else {
		echo "<script>alert('Data tanaman Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>