<?php
if(isset($_GET['saluran']))
	extract(_dataGetId($mysqli,"tb_saluran","idsaluran='".$_GET['saluran']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=golongan/data">Data Golongan</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Saluran</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?php
				$namagolongan=caridata($mysqli,"select namagolongan from tb_golongan where idgolongan='".$_GET['id']."'");
				?>
				<h6 class="card-title"><?=(isset($_GET['saluran']) ? 'Ubah':'Tambah')?> Data Saluran [<?=$namagolongan?>]</h6>

				<form class="forms-sample" action="?hal=golongan/prosessaluran" method="POST">
					
					<input type="hidden" name="idgolongan" value="<?=$_GET['id']?>">
					<input type="hidden" name="idsaluran" value="<?=$_GET['saluran']?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Saluran</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama" value="<?=@$nama?>" placeholder="Inputkan Nama Saluran" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Luas (Ha)</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="luas" value="<?=@$luas?>" placeholder="Inputkan Luas Saluran" required>
						</div>
					</div>
					
					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['saluran']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=golongan/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Saluran</h6>
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<th>Nama Saluran</th>
								<th>Luas</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$total=0;
							$sql="SELECT * FROM tb_saluran where idgolongan='".$_GET['id']."'";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
								extract($value);
								$total+=$luas;
								?>
								<tr>
									<td><?=$nama?></td>
									<td><?=$luas." Ha"?></td>
									<td>
										<?=_edit("?hal=golongan/detail&id=$idgolongan&saluran=$idsaluran")?>
										<?=_hapus("?hal=golongan/prosessaluran&hapus=$idsaluran")?>
									</td>
								</tr>
							<?php } ?>
							<tr>
								<th>Total</th>
								<th colspan="2"><?=$total." Ha"?></th>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>