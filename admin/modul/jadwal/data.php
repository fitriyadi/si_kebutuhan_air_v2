<?php
$KOEFISIEN_PADI=array();
$KOEFISIEN_PAlAWIJA=array();
$idgolongan=$_GET['id'];

for ($i=1;$i<=24;$i++) { 
	$KOEFISIEN_PADI[$i]=caridata($mysqli,"select koefisien from tb_jadwal_tanam where bulan='$i' and idgolongan='$idgolongan' and jenis='Padi'");
	$KOEFISIEN_PAlAWIJA[$i]=caridata($mysqli,"select koefisien from tb_jadwal_tanam where bulan='$i' and idgolongan='$idgolongan' and jenis='Palawija'");
	$PERSIAPAN[$i]=caridata($mysqli,"select status from tb_jadwal_tanam where bulan='$i' and idgolongan='$idgolongan' and jenis='Padi'");
}
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Jadwal Tanaman</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?php
				$idgolongan=$_GET['id'];
				$namagolongan=caridata($mysqli,"select namagolongan from tb_golongan where idgolongan='".$_GET['id']."'");
				?>
				<h6 class="card-title">Data Jadwal Tanaman [<?=$namagolongan?>]</h6>
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<td rowspan="2">Jenis Tanaman</td>
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
								<td>Padi</td>
								<?php for ($i=1;$i<=24;$i++) { 
									if($PERSIAPAN[$i]=='Persiapan'){
										echo "<td><span class='badge badge-primary'>Persiapan</span></td>";
									}else{
									?>
									<td><?=$KOEFISIEN_PADI[$i]?></td>
								<?php }}?>
							</tr>
							<tr>
								<td>palawija</td>
								<?php for ($i=1;$i<=24;$i++) { 
									if($PERSIAPAN[$i]=='Persiapan'){
										echo "<td><span class='badge badge-primary'>Persiapan</span></td>";
									}else{
									?>
									<td><?=$KOEFISIEN_PAlAWIJA[$i]?></td>
								<?php }}?>
							</tr>

						</tbody>
					</table>

					<?=_edit("?hal=jadwal/olah&id=$idgolongan")?>
				</div>
			</div>
		</div>
	</div>
</div>
