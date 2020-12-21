<?php
if(isset($_POST['ubah'])){
	foreach ($_POST['r80'] as $key => $value) {
		$stmt = $mysqli->prepare("UPDATE tb_setting_analisa  SET 
			nilai_hujan=?
			where bulan=?");
		$stmt->bind_param("ss",
			$value,
			$key);	
		$stmt->execute();
	}

	foreach ($_POST['eto'] as $key => $value) {
		$stmt = $mysqli->prepare("UPDATE tb_setting_analisa  SET 
			nilai_eto=?
			where bulan=?");
		$stmt->bind_param("ss",
			$value,
			$key);	
		$stmt->execute();
	}

	echo "<script>alert('Data Settting Analisis berhasil diubah')</script>";
	echo "<script>window.location='index.php?hal=tanaman/olah_analisis';</script>";	

}
?>