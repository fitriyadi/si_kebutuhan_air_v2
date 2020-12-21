<?php
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_golongan","idgolongan='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=golongan/data">Data Golongan</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Golongan</h6>

				<form class="forms-sample" action="?hal=golongan/proses" method="POST">
					
					<input type="hidden" name="idgolongan" value="<?=@$idgolongan?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Golongan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama" value="<?=@$namagolongan?>" placeholder="Inputkan Nama Golongan" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Efisiensi</label>
						<div class="col-sm-9">
							<input type="number" min="1" max="100" class="form-control" name="efisiensi" value="<?=@$efisiensi?>" placeholder="Inputkan Efisiensi" required>
						</div>
					</div>
					
					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=golongan/data">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>