<?php
$idgolongan=$_GET['id'];


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
							<?php
							$sql="SELECT * FROM tb_tanaman";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
								extract($value);
								$KOF=lihatnilai($mysqli,$idtanaman,$idgolongan);
								$PER=lihatper($mysqli,$idtanaman,$idgolongan);;
								?>
								<tr>
									<td><?=$nama?></td>
									<?php for ($i=1;$i<=24;$i++) { 
										if(@$PER[$i]=='Persiapan'){
											echo "<td><span class='badge badge-primary'>Persiapan</span></td>";
										}else{
											?>
											<td><?=@$KOF[$i]?></td>
										<?php }}?>
									</tr>
								<?php } ?>

							</tbody>
						</table>

						<?=_edit("?hal=jadwal/input&id=$idgolongan")?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php

	function lihatnilai($mysqli,$idtanaman,$idgolongan){
		$nilai=array();
		$no=0;
		$sql="SELECT * FROM tb_jadwal_tanam where idtanaman='$idtanaman' and idgolongan='$idgolongan' order by bulan asc";
		foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
			extract($value);
			$nilai[$no+=1]=$koefisien;
		}

		return $nilai;
	}

	function lihatper($mysqli,$idtanaman,$idgolongan){
		$nilai=array();
		$no=0;
		$sql="SELECT * FROM tb_jadwal_tanam where idtanaman='$idtanaman' and idgolongan='$idgolongan' order by bulan asc";
		foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
			extract($value);
			$nilai[$no+=1]=$status;
		}

		return $nilai;
	}


	// }

	// function lihatpersiapan($mysqli,$idtanaman,$bulan,$idgolongan){

	// }


	// function lihatnilai($mysqli,$idtanaman,$minggu){
	// 	@$nilai=caridata($mysqli,"select nilai from tb_koefisien where idtanaman='$idtanaman' and minggu='$minggu'");

	// 	if($nilai==null){
	// 		$nilai="";
	// 	}
	// 	return $nilai;
	// }
	?>
