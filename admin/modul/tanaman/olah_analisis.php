<?php
for ($i=1;$i<=24;$i++){
	$db_r80[$i]=caridata($mysqli,"select nilai_hujan from tb_setting_analisa where bulan='$i'");
	$db_eto[$i]=caridata($mysqli,"select nilai_hujan from tb_setting_analisa where bulan='$i'");
}
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Setting Analisis</li>
	</ol>
</nav>

<form class="forms-sample" action="?hal=tanaman/proses_analisis" method="POST">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">November - Februari</h6>
					<div class="table-responsive">
						<table id="" class="table">
							<thead>
								<tr>
									<th width="5%">Label</th>
									<th>Satuan</th>
									<th>Nov I</th>
									<th>Nov II</th>
									<th>Des I</th>
									<th>Des II</th>
									<th>Jan I</th>
									<th>Jan II</th>
									<th>Feb I</th>
									<th>Feb II</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="5%">Hujan (R80)</td>
									<td>mm/hari</td>
									<?php  for ($i=1;$i<=8;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="r80[<?=$i?>]" value="<?=$db_r80[$i]?>" step="0.01" required > 
										</td>
									<?php } ?>
								</tr>
								<tr>
									<td>Nilai Evapotranspirasi (Eto)</td>
									<td>mm/hari</td>
									<?php  for ($i=1;$i<=8;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="eto[<?=$i?>]" value="<?=$_ETO[$i]?>" step="0.01" required > 
										</td>
									<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Maret - Juni</h6>
					<div class="table-responsive">
						<table id="" class="table">
							<thead>
								<tr>
									<th>Label</th>
									<th>Satuan</th>
									<th>Mar I</th>
									<th>Mar II</th>
									<th>Apr I</th>
									<th>Apr II</th>
									<th>Mei I</th>
									<th>Mei II</th>
									<th>Juni I</th>
									<th>Juni II</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Hujan (R80)</td>
									<td>mm/hari</td>
									<?php  for ($i=9;$i<=16;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="r80[<?=$i?>]" value="<?=$db_r80[$i]?>" step="0.01" required > 
										</td>
									<?php }?>
								</tr>
								<tr>
									<td>Nilai Evapotranspirasi (Eto)</td>
									<td>mm/hari</td>
									<?php  for ($i=9;$i<=16;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="eto[<?=$i?>]" value="<?=$_ETO[$i]?>" step="0.01" required > 
										</td>
									<?php }?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Juli - Oktober </h6>
					<div class="table-responsive">
						<table id="" class="table">
							<thead>
								<tr>
									<th>Label</th>
									<th>Satuan</th>
									<th>Juli I</th>
									<th>Juli II</th>
									<th>Agt I</th>
									<th>Agt II</th>
									<th>Sep I</th>
									<th>Sep II</th>
									<th>Okt I</th>
									<th>Okt II</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Hujan (R80)</td>
									<td>mm/hari</td>
									<?php  for ($i=17;$i<=24;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="r80[<?=$i?>]" value="<?=$db_r80[$i]?>" step="0.01" required > 
										</td>
									<?php }?>
								</tr>
								<tr>
									<td>Nilai Evapotranspirasi (Eto)</td>
									<td>mm/hari</td>
									<?php  for ($i=17;$i<=24;$i++){ ?> 
										<td>
											<input type="number" class="form-control" name="eto[<?=$i?>]" value="<?=$_ETO[$i]?>" step="0.01" required > 
										</td>
									<?php }?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group row ">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary mr-2" name="ubah">Simpan</button>
			<a class="btn btn-light" href="?hal=dashboard">Batal</a>
		</div>
	</div>
</form>