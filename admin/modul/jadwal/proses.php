<?php
$mt1="0";
$mt2="0";
$mt3="0";
$persiapan="0";



//Set Taanaman
$no=0;
$sql="SELECT * FROM tb_tanaman";
foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
	extract($value);
	$tanaman[$no+=1]=$idtanaman;
}

// echo "<pre>";
// print_r($tanaman);
// echo "<pre>";


for ($i=1;$i<=count($tanaman);$i++){ 
	$sql="SELECT * FROM tb_koefisien where idtanaman='".$tanaman[$i]."' order by minggu asc";
	$no=0;
	foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
		extract($value);
		$koefisientanaman[$i][$no+=1]=$nilai;
	}
}

// echo "<pre>";
// print_r($koefisientanaman);
// echo "<pre>";


//Hapus Semua Data
$idgolongan=$_POST['idgolongan'];
mysqli_query($mysqli,"delete from tb_jadwal_tanam where idgolongan='$idgolongan'");

//Pengecekan data
for ($i=1;$i<=24;$i++) { 
	if($_POST['mt'][$i]=='mt1'){
		$mt1+=1;
	}
	if($_POST['mt'][$i]=='mt2'){
		$mt2+=1;
	}
	if($_POST['mt'][$i]=='mt3'){
		$mt3+=1;
	}

	if($_POST['bulan'][$i]=='Persiapan'){
		$persiapan+=1;
	}
}

if($mt1!=8 or $mt2!= 8 or $mt3 != 8){
	echo "<script>alert('Pengintputan masa tanam belum sesuai, silakan dicek ulang')</script>";
	echo "<script>window.location='javascript:history.go(-1)';</script>";

}else if ($persiapan!=6){
	echo "<script>alert('Pengintputan persiapan lahan belum sesuai, silakan dicek ulang')</script>";
	echo "<script>window.location='javascript:history.go(-1)';</script>";

}else{
	
	$nilaiawal=0;
	for ($i=1;$i<=24;$i++) { 
		if($_POST['bulan'][$i]=='Persiapan'){
			$nilaiawal=$i;
			break;
		}
	}

	//echo "Nilai Awal ".$nilaiawal."<br>";
	//echo "<hr>";

	//Perulangan Simpan
	for ($xyz=1;$xyz<=count($tanaman);$xyz++){ 
//----------------------------------------------------------------------------
		//Ambil Koefisen Setiap Tanaman
		$datatanaman=$koefisientanaman[$xyz];

		echo "<pre>";
		$datatanaman;
		echo "</pre>";
		for ($i=$nilaiawal;$i<=24;$i++) { 
			if($_POST['bulan'][$i]=='Persiapan'){
			//echo "Persiapan ".$i."<br>";
			//Simpan
				simpan($mysqli,$tanaman[$xyz],$i,"0","Persiapan",$_POST['mt'][$i],$idgolongan);
				$x=0;
			}else{
				$x+=1;
				//echo "Nilai ".$i." Counter ".$x." => ".$datapadi[$x]."<br>";
				simpan($mysqli,$tanaman[$xyz],$i,$datatanaman[$x],"-",$_POST['mt'][$i],$idgolongan);
			//Simpan
			}
		}

		for ($i=1;$i<$nilaiawal;$i++) { 
			if($_POST['bulan'][$i]=='Persiapan'){
				//echo "Persiapan ".$i."<br>";
				//Simpan
				simpan($mysqli,$tanaman[$xyz],$i,"0","Persiapan",$_POST['mt'][$i],$idgolongan);
				$x=0;
			}else{
				$x+=1;
				//echo "Nilai ".$i." Counter ".$x."<br>";
				simpan($mysqli,$tanaman[$xyz],$i,$datatanaman[$x],"-",$_POST['mt'][$i],$idgolongan);
			//Simpan
			}
		}
//-----------------------------------------------------------------------------
	}

	echo "<script>alert('Data Jadwal berhasil disimpan')</script>";
	echo "<script>window.location='index.php?hal=jadwal/data&id=$idgolongan';</script>";	
}



function simpan($mysqli,$idtanaman,$bulan,$koefisien,$status,$ket,$idgolongan){
	// echo $idtanaman."-";
	// echo $bulan."-";
	// echo $koefisien."-";
	// echo $status."-";
	// echo $ket."-";
	// echo $idgolongan."-";
	// echo "<hr>";
	$stmt = $mysqli->prepare("INSERT INTO tb_jadwal_tanam 
		(idtanaman,bulan,koefisien,status,ket,idgolongan) 
		VALUES (?,?,?,?,?,?)");

	$stmt->bind_param("ssssss", 
		$idtanaman,
		$bulan,
		$koefisien,
		$status,
		$ket,
		$idgolongan);	

	$stmt->execute();

}


?>