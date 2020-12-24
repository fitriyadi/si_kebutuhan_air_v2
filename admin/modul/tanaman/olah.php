<?php
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_tanaman","idtanaman='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=tanaman/data">Data Tanaman</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Tanaman</h6>

				<form class="forms-sample" action="?hal=tanaman/proses" method="POST">
					
					<input type="hidden" name="idtanaman" value="<?=@$idtanaman?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Tanaman</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama" value="<?=@$nama?>" placeholder="Inputkan Nama Tanaman" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="jenis">
								<option value="Padi">Padi</option>
								<option value="Palawija">Palawija</option>
							</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Perkolasi</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" name="perkolasi"  value="<?=@$perkolasi?>" placeholder="Inputkan Nilai Perkolasi" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Hujan Efektif</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" name="hujanefektif"  value="<?=@$hujanefektif?>" placeholder="Inputkan Nilai Hujan Efektif" required>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=tanaman/data">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>