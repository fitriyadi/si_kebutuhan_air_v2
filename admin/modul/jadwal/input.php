<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Input Jadwal Tanam</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Input Jadwal Tanam</h6>

				<form class="forms-sample" action="?hal=jadwal/proses" method="POST">
					<?php
					$namagolongan=caridata($mysqli,"select namagolongan from tb_golongan where idgolongan='".$_GET['id']."'");
					?>

					<input type="hidden" name="idgolongan" value="<?=$_GET['id']?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Golongan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="namagolongan"  value="<?=@$namagolongan?>" readonly>
						</div>
					</div>

					<div class="table-responsive">
						<table id="" class="table">
							<thead>
								<tr>
									<th>Bulan</th>
									<th>Minggu</th>
									<th>Ket Persiapan</th>
									<th>Masa Tanam</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=0;
								$sql="SELECT * FROM tb_tanaman";
								for ($i=1;$i<=12;$i++) { 
									for ($j=1;$j<=2;$j++) {
										?>
										<tr>
											<td><?=$_BULAN[$i]?></td>
											<td><?=$j?></td>
											<td>
												<select name="bulan[<?=$no+=1?>]" class="form-control">
													<option value="Persiapan">Persiapan</option>
													<option value="-">-</option>
												</select>
											</td>
											<td>
												<select name="mt[<?=$no?>]" class="form-control">
													<option value="mt1">Masa Tanam 1</option>
													<option value="mt2">Masa Tanam 2</option>
													<option value="mt3">Masa Tanam 3</option>
												</select>
											</td>
										</tr>
									<?php } } ?>

								</tbody>
							</table>
						</div>

						<div class="form-group row ">
							<div class="col-sm-9">
								<button type="submit" class="btn btn-primary mr-2" name="tambah">Simpan</button>
								<a class="btn btn-light" href="?hal=jadwal/data&id=<?=$_GET['id']?>">Batal</a>
							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
