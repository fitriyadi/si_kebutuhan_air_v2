<?php
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_tanaman","idtanaman='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=tanaman/data">Data Koefisien Tanaman</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Koefisien Tanaman</h6>

				<form class="forms-sample" action="?hal=tanaman/proses_koefisien" method="POST">
					
					<input type="hidden" name="idtanaman" value="<?=@$idtanaman?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Tanaman</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama" value="<?=@$nama?>" placeholder="Inputkan Nama Tanaman" readonly>
						</div>
					</div>

					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="jenis"  value="<?=@$jenis?>" placeholder="Inputkan Jenis" readonly>
						</div>
					</div>

					<?php for ($i=1;$i<=6;$i++) { ?>
						<div class="form-group row">
							<label for="input" class="col-sm-3 col-form-label">Koefisien (Kc) Minggu Ke- <?=$i?></label>
							<div class="col-sm-9">
								<input type="number" step="0.01" class="form-control" name="minggu[<?=$i;?>]"  value="<?=lihatnilai($mysqli,$idtanaman,$i);?>" placeholder="Inputkan Nilai Koefisien" required>
							</div>
						</div>
					<?php } ?>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="ubah">Simpan</button>
							<a class="btn btn-light" href="?hal=tanaman/koefisien">Batal</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>


<?php 
	function lihatnilai($mysqli,$idtanaman,$minggu){
		@$nilai=caridata($mysqli,"select nilai from tb_koefisien where idtanaman='$idtanaman' and minggu='$minggu'");

		if($nilai==null){
			$nilai="";
		}
		return $nilai;
	}
?>