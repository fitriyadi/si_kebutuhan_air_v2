<?php
if(isset($_POST['ubah'])){

	$idtanaman=$_POST['idtanaman'];
	mysqli_query($mysqli,"delete from tb_koefisien where idtanaman='$idtanaman'");


	foreach ($_POST['minggu'] as $key => $value) {
		$stmt = $mysqli->prepare("INSERT into tb_koefisien (idtanaman,nilai,minggu) values (?,?,?)");
		$stmt->bind_param("sss",
			$idtanaman,
			$value,
			$key);	
		$stmt->execute();
	}


	echo "<script>alert('Data Koefisien berhasil Disimpan')</script>";
	echo "<script>window.location='index.php?hal=tanaman/koefisien';</script>";	

}
?>