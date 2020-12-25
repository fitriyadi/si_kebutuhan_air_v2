<?php
if (isset($_POST['optimal'])){
	$luas1=$_POST['luas1'];
	$luas2=$_POST['luas2'];
	$luas3=$_POST['luas3'];

	$mt1=$_POST['mt1'];
	$mt2=$_POST['mt2'];
	$mt3=$_POST['mt3'];

}else{
	$luas1='100';
	$luas2='100';
	$luas3='100';

	$mt1=$_POST['mt1'];
	$mt2=$_POST['mt2'];
	$mt3=$_POST['mt3'];
	
}

//Hapus Grafik
mysqli_query($mysqli,"truncate table tb_grafik");

for ($i=1;$i<=24;$i++) { 
	$hasilnilai[$i]=0;
}
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Informasi Pola Tanam</li>
	</ol>
</nav>


<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4>Pola Tanam</h4>
				<h6>Masa Tanam 1 (mt1) : <?=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt1']."'")?> </h6>
				<h6>Masa Tanam 2 (mt2) : <?=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt2']."'")?> </h6>
				<h6>Masa Tanam 3 (MT3) : <?=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt3']."'")?> </h6>
			</div>
		</div>
	</div>
</div>

<?php
$sql="SELECT * FROM tb_golongan";
foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
	extract($value);
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
									<td rowspan="2">Nama Saluran</td>
									<td rowspan="2">Luas (Ha)</td>
									<td rowspan="2">Luas Max (Ha)</td>
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
								<?php
								$ket=keterangan($mysqli,$mt1,$idgolongan);
								for ($i=1;$i<=24;$i++) { 
									if($ket[$i]=='mt1'){
										$jenismt[$i]=$mt1;
										$luasoptimum[$i]=$luas1;
									}elseif ($ket[$i]=='mt2') {
										$jenismt[$i]=$mt2;
										$luasoptimum[$i]=$luas2;
									}else{
										$jenismt[$i]=$mt3;
										$luasoptimum[$i]=$luas3;
									}
								}

								$sql="SELECT * FROM tb_saluran where idgolongan='$idgolongan'";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
									$masatanamjenis="";
									?>
									<tr>
										<td><?=$value['nama']?></td>
										<td><?=$value['luas']?></td>
										<td><?=$value['luas']?></td>
										<?php for ($i=1;$i<=24;$i++) {
											$luasx=$value['luas']*($luasoptimum[$i]/100);

											$nilai[$idgolongan][$i]=caridata($mysqli,"select nilai from tb_rekap_analisis where bulan='$i' and idgolongan='$idgolongan' and idtanaman='$jenismt[$i]'");
											$nilai[$idgolongan][$i]=$nilai[$idgolongan][$i]*$luasx/1000;
											$hasilnilai[$i]+=number_format($nilai[$idgolongan][$i],2);
											?>
											<td><?=number_format($nilai[$idgolongan][$i],2)?></td>
										<?php }?>
									</tr>
								<?php } ?>

								<tr>
									<td colspan="3">Keterangan</td>
									<?php for ($i=1;$i<=24;$i++) {?>
										<td><?=warna($ket[$i])?></td>
										<?php 
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

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Rekapitulasi</h6>
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<td rowspan="2">DATA</td>
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
								<th>TOTAL KEBUTUHAN</th>
								<th>m3/s</th>
								<?php for ($i=1;$i<=24;$i++) { ?>
									<td><?=$hasilnilai[$i]?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>KETERSEDIAAN</th>
								<th>m3/s</th>
								<?php 
								$dataketersediaan=ketersediaan($mysqli);
								?>
								<?php for ($i=1;$i<=24;$i++) { ?>
									<td><?=$dataketersediaan[$i]?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>KETERANGAN</th>
								<th>m3/s</th>
								<?php for ($i=1;$i<=24;$i++) { 
									tambah($mysqli,$i,number_format($hasilnilai[$i],2),$dataketersediaan[$i]);
									if($dataketersediaan[$i]>=$hasilnilai[$i]){
										echo "<td><btn class='btn btn-sm btn-success'>OK</btn></td>";
									}else{
										echo "<td><btn class='btn btn-sm btn-danger'>Belum</btn></td>";
									}} ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'modul/polatanam/grafik.php' ?>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Luas Tanam Optimum</h6>

					<form class="forms-sample" action="?hal=polatanam/hasil" method="POST">
						<input type="hidden" name="mt1" value="<?=$_POST['mt1']?>">
						<input type="hidden" name="mt2" value="<?=$_POST['mt2']?>">
						<input type="hidden" name="mt3" value="<?=$_POST['mt3']?>">

						<?php
						$namamt1=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt1']."'");
						$namamt2=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt2']."'");
						$namamt3=caridata($mysqli,"select nama from tb_tanaman where idtanaman='".$_POST['mt3']."'");
						?>

						<div class="form-group row">
							<label for="input" class="col-sm-3 col-form-label"><?=$namamt1?> [Masa Tanam 1]</label>
							<div class="col-sm-9">
								<input type="" name="luas1" class="form-control" value="<?=$luas1?>">
							</div>
						</div>

						<div class="form-group row">
							<label for="input" class="col-sm-3 col-form-label"><?=$namamt2?> [Masa Tanam 2]</label>
							<div class="col-sm-9">
								<input type="" name="luas2" class="form-control" value="<?=$luas2?>">
							</div>
						</div>

						<div class="form-group row">
							<label for="input" class="col-sm-3 col-form-label"><?=$namamt3?> [Masa Tanam 3]</label>
							<div class="col-sm-9">
								<input type="" name="luas3" class="form-control" value="<?=$luas3?>">
							</div>
						</div>


						<div class="form-group row ">
							<div class="col-sm-9 offset-3">
								<button type="submit" name="optimal" class="btn btn-primary mr-2" name="pola">Lihat</button>
								<a class="btn btn-light" href="?hal=dashboard">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<?php
// echo "<pre>";
// print_r($hasilnilai);
// echo "</pre>";

	function keterangan($mysqli,$jenis,$idgolongan){
		$data=array();
		$no=0;
		$sql="SELECT bulan,ket FROM tb_jadwal_tanam WHERE idgolongan='$idgolongan' AND idtanaman='$jenis' ORDER BY bulan";
		foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
			extract($value);
			$data[$no+=1]=$ket;
		}

		return $data;
	}

	function ketersediaan($mysqli){
		$data=array();
		$no=0;
		$sql="SELECT qintake from tb_ketersedian_air ORDER BY id";
		foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
			extract($value);
			$data[$no+=1]=$qintake;
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


	function tambah($mysqli,$bulan,$kebutuhan,$ketersediaan){
		mysqli_query($mysqli,"insert into tb_grafik (bulan,total_kebutuhan,total_ketersediaan) values ('$bulan','$kebutuhan','$ketersediaan')");
	}
	?>