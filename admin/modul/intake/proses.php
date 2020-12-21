<?php
if(isset($_POST['ubah'])){

$q80=$_POST['q80'];
$q70=0.7*$q80;
$q10=0.1*$q70;
$qintake=$q70-$q10;
$id=$_POST['id'];

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_ketersedian_air  SET 
		q80=?,
		q70=?,
		q10=?,
		qintake=?
		where id=?");
	$stmt->bind_param("sssss",
		$q80,
		$q70,
		$q10,
		$qintake,
		$id);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Ketersediaan Air berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=intake/data';</script>";	
	} else {
		echo "<script>alert('Data Ketersediaan Air Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>