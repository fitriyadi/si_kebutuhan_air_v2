<?php
$idpalawija=$_GET['id'];
$namapalawija=caridata($mysqli,"select nama from tb_tanaman where idtanaman='$idpalawija'");
$perkolasi=caridata($mysqli,"select perkolasi from tb_tanaman where idtanaman='$idpalawija'");
$ref=caridata($mysqli,"select hujanefektif/100 from tb_tanaman where idtanaman='$idpalawija'");

for ($i=1;$i<=24;$i++){
	$r80[$i]=caridata($mysqli,"select nilai_hujan from tb_setting_analisa where bulan='$i'");
}

hapus($mysqli,$idpalawija);
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Kebutuhan Air  [<?=$namapalawija?>]</li>
	</ol>
</nav>


<?php

$sql="SELECT * FROM tb_golongan";
foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
	extract($value);

	$efisiensigolongan=$efisiensi;
	$bulanawal=caridata($mysqli,"SELECT bulan FROM tb_jadwal_tanam WHERE STATUS='Persiapan' AND idgolongan='$idgolongan' AND idtanaman='$idpalawija' LIMIT 1");
	$pergantian_lapisan_air=array();
	$pergantian_lapisan_air=k_pergantian_air($bulanawal);


	for ($i=1;$i<=24;$i++) { 
		$KC[$i]=caridata($mysqli,"select koefisien from tb_jadwal_tanam where bulan='$i' and idgolongan='$idgolongan' and idtanaman='$idpalawija'");
		
		$PERSIAPAN[$i]=caridata($mysqli,"select status from tb_jadwal_tanam where bulan='$i' and idgolongan='$idgolongan' and idtanaman='$idpalawija'");
	}

	?>
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<?php
				//$namagolongan=caridata($mysqli,"select namagolongan from tb_golongan where idgolongan='".$_GET['id']."'");
					?>
					<h6 class="card-title"><?=$namagolongan?></h6>
					<div class="table-responsive">
						<table id="" class="table">
							<thead>
								<tr>
									<td rowspan="2">No</td>
									<td rowspan="2">Kegiatan Tanam</td>
									<td rowspan="2">Satuan</td>
									<?php foreach ($_BULAN as $key => $value) { ?>
										<td colspan="2"><?=$value?></td>
									<?php } ?>
								</tr>
								<tr>
									<?php for ($i=1;$i<=24;$i++) { ?>
										<td><?=$_MINGGU[$i]?></td>
									<?php } ?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eto</td>
									<td>mm/hari</td>
									<?php for ($i=1;$i<=24;$i++) { ?>
										<td><?=$_ETO[$i]?></td>
									<?php }?>
								</tr>

								<tr>
									<td>2</td>
									<td>Kc</td>
									<td></td>
									<?php for ($i=1;$i<=24;$i++) { ?>
										<td><?=$KC[$i]?></td>
									<?php }?>
								</tr>

								<tr>
									<td>3</td>
									<td>Etc = Kc x Eto</td>
									<td>mm/hari</td>
									<?php for ($i=1;$i<=24;$i++) {
										$ETC[$i]=$_ETO[$i]*$KC[$i];
										?>
										<td><?=number_format($ETC[$i],2)?></td>
									<?php }?>
								</tr>

								<tr>
									<td>4</td>
									<td>Perkolasi</td>
									<td>mm/hari</td>
									<?php for ($i=1;$i<=24;$i++) { ?>
										<td><?=$perkolasi?></td>
									<?php }?>
								</tr>

								<tr>
									<td>5</td>
									<td>R<sub>80<sub></td>
										<td>mm</td>
										<?php for ($i=1;$i<=24;$i++) { ?>
											<td><?=number_format($r80[$i],2)?></td>
										<?php } ?>
									</tr>

									<tr>
										<td>6</td>
										<td>Hujan Efektif</td>
										<td>mm/hari</td>
										<?php for ($i=1;$i<=24;$i++) {
											$he[$i]=($ref*$r80[$i])/15;
											?>
											<td><?=number_format($he[$i],2)?></td>
										<?php } ?>
									</tr>
									<tr>
										<td>11</td>
										<td>NFR</td>
										<td>mm/hari</td>
										<?php for ($i=1;$i<=24;$i++) {
											$keb_air_sawah[$i]=$ETC[$i]+$perkolasi-$he[$i];
											?>
											<td><?=number_format($keb_air_sawah[$i],2)?></td>
										<?php } ?>
									</tr>

									<tr>
										<td>12</td>
										<td>NFR</td>
										<td>1/s/Ha</td>
										<?php for ($i=1;$i<=24;$i++) {
											$keb_air_sawah[$i]=$keb_air_sawah[$i]/8.64;
											?>
											<td><?=number_format($keb_air_sawah[$i],2)?></td>
										<?php } ?>
									</tr>

									<tr>
										<td>13</td>
										<td>Keb. Intake (DR)</td>
										<td>1/s/Ha</td>
										<?php for ($i=1;$i<=24;$i++) {
											$keb_intake_dr[$i]=$keb_air_sawah[$i]/($efisiensigolongan/100);
											?>
											<td><?=number_format($keb_intake_dr[$i],2)?></td>
										<?php } ?>
									</tr>
									<tr>
										<td colspan="3">Hasil Akhir</td>
										<?php for ($i=1;$i<=24;$i++) {
											if($keb_intake_dr[$i]<0)
												$keb_intake_dr[$i]=0;
											?>
											<td><?=number_format($keb_intake_dr[$i],2)?></td>
										<?php } ?>
									</tr>
									<tr>
										<td colspan="3">Keterangan</td>
										<?php $ket=keterangan($mysqli,$idpalawija,$idgolongan);for ($i=1;$i<=24;$i++) {?>
											<td><?=warna($ket[$i])?></td>
											<?php 

											simpan($mysqli,$idpalawija,$i,$keb_intake_dr[$i],$idgolongan,$ket[$i]);

										} ?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php
	function keterangan($mysqli,$idtanaman,$idgolongan){
		$data=array();
		$no=0;
		$sql="SELECT bulan,ket FROM tb_jadwal_tanam WHERE idgolongan='$idgolongan' AND idtanaman='$idtanaman' ORDER BY bulan";
		foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
			extract($value);
			$data[$no+=1]=$ket;
		}

		return $data;
	}

	function  simpan($mysqli,$idtanaman,$bulan,$nilai,$golongan,$ket){
		$stmt = $mysqli->prepare("INSERT INTO tb_rekap_analisis 
			(idtanaman,bulan,nilai,idgolongan,ket) 
			VALUES (?,?,?,?,?)");

		$stmt->bind_param("sssss", 
			$idtanaman,
			$bulan,
			$nilai,
			$golongan,
			$ket);	

		$stmt->execute();
	}

	function  hapus($mysqli,$idtanaman){
		$stmt = $mysqli->prepare("DELETE FROM tb_rekap_analisis where idtanaman=?");
		$stmt->bind_param("s",$idtanaman); 
		$stmt->execute();
	}

	function warna($data){
		if($data=="mt1")
			return "<span class='badge badge-primary'>MT1</span>";
		if($data=="mt2")
			return "<span class='badge badge-success'>MT2</span>";
		else
			return "<span class='badge badge-warning'>MT3</span>";
	}
	?>