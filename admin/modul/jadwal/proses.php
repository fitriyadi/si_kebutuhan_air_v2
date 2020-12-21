<?php
$idgolongan=$_POST['idgolongan'];
$jadwal=$_POST['jadwal'];

//print_r($_POST);

if (isset($_POST['tambah'])){
		//Simpan Padi
		hapus($mysqli,'Padi',$idgolongan);
		hapus($mysqli,'Palawija',$idgolongan);
		if($jadwal>1){
			for ($i=1;$i<$jadwal;$i++) { 
				//echo $i.'->'.$_KOEFISIEN_PADI[7-$jadwal+$i]."<br>";
				//$ket="-";
				simpan($mysqli,'Padi',$i,$_KOEFISIEN_PADI[7-$jadwal+$i],"-","MT3",$idgolongan);
				simpan($mysqli,'Palawija',$i,$_KOEFISIEN_PALAWIJA[7-$jadwal+$i],"-","MT3",$idgolongan);
			}
		}


		for ($i=$jadwal;$i<$jadwal+8;$i++) { 
			if($i==$jadwal || ($i==$jadwal+1)){
				//echo $i."->0 <br>";
				//$ket="persiapan";
				simpan($mysqli,'Padi',$i,"0","Persiapan","MT1",$idgolongan);
				simpan($mysqli,'Palawija',$i,"0","Persiapan","MT1",$idgolongan);
			}else{
				//echo $i.'->'.$_KOEFISIEN_PADI[$i-($jadwal+1)]."<br>";
				simpan($mysqli,'Padi',$i,$_KOEFISIEN_PADI[$i-($jadwal+1)],"-","MT1",$idgolongan);
				simpan($mysqli,'Palawija',$i,$_KOEFISIEN_PALAWIJA[$i-($jadwal+1)],"-","MT1",$idgolongan);
			}
		}

		$jadwal=$jadwal+8;
		for ($i=$jadwal;$i<$jadwal+8;$i++) { 
			if($i==$jadwal || ($i==$jadwal+1)){
				//echo $i."->0 <br>";
				//$ket="persiapan";
				simpan($mysqli,'Padi',$i,"0","Persiapan","MT2",$idgolongan);
				simpan($mysqli,'Palawija',$i,"0","Persiapan","MT2",$idgolongan);
			}else{
				//echo $i.'->'.$_KOEFISIEN_PADI[$i-($jadwal+1)]."<br>";
				//$ket="-";
				simpan($mysqli,'Padi',$i,$_KOEFISIEN_PADI[$i-($jadwal+1)],"-","MT2",$idgolongan);
				simpan($mysqli,'Palawija',$i,$_KOEFISIEN_PALAWIJA[$i-($jadwal+1)],"-","MT2",$idgolongan);
			}
		}

		$jadwal=$jadwal+8;
		for ($i=$jadwal;$i<25;$i++) { 
			if($i==$jadwal || ($i==$jadwal+1)){
				//echo $i."->0 <br>";
				//$ket="persiapan";
				simpan($mysqli,'Padi',$i,"0","Persiapan","MT3",$idgolongan);
				simpan($mysqli,'Palawija',$i,"0","Persiapan","MT3",$idgolongan);
			}else{
				//echo $i.'->'.$_KOEFISIEN_PADI[$i-($jadwal+1)]."<br>";
				//$ket="-";
				simpan($mysqli,'Padi',$i,$_KOEFISIEN_PADI[$i-($jadwal+1)],"-","MT3",$idgolongan);
				simpan($mysqli,'Palawija',$i,$_KOEFISIEN_PALAWIJA[$i-($jadwal+1)],"-","MT3",$idgolongan);
			}
		}

		
		//Simpan Palawija
		echo "<script>alert('Data Jadwal berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=jadwal/data&id=$idgolongan';</script>";	



	}


function hapus($mysqli,$jenis,$idgolongan){

	$stmt = $mysqli->prepare("DELETE FROM tb_jadwal_tanam where jenis=? and idgolongan=?");
	$stmt->bind_param("ss",
		$jenis,
		$idgolongan); 

	$stmt->execute();
}

function simpan($mysqli,$jenis,$bulan,$koefisien,$status,$ket,$idgolongan){

	$stmt = $mysqli->prepare("INSERT INTO tb_jadwal_tanam 
		(jenis,bulan,koefisien,status,ket,idgolongan) 
		VALUES (?,?,?,?,?,?)");

	$stmt->bind_param("ssssss", 
		$jenis,
		$bulan,
		$koefisien,
		$status,
		$ket,
		$idgolongan);	

	$stmt->execute();

}

?>