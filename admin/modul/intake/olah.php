<?php
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_ketersedian_air","id='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=intake/data">Data Ketersediaan Air Intake</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Ketersediaan Air</h6>

				<form class="forms-sample" action="?hal=intake/proses" method="POST">
					
					<input type="hidden" name="id" value="<?=@$id?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Bulan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="bulan" value="<?=@$bulan_nama." - ".$bulan_ket?>" placeholder="Inputkan Nama Tanaman" readonly>
						</div>
					</div>

					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Andalan 80%</label>
						<div class="col-sm-9">
							<input type="number" step="0.01" class="form-control" name="q80"  value="<?=@$q80?>" placeholder="Inputkan Q80" required>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=intake/data">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>