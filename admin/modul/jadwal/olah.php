<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Data Jadwal</a></li>
		<li class="breadcrumb-item" aria-current="page">Tambah</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Tambah Jadwal Tanam</h6>

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

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jadwal Masa Tanam 1</label>
						<div class="col-sm-9">
							<select name="jadwal" class="form-control" required>
								<option value="1">November I</option>
								<option value="2">November II</option>
								<option value="3">Desember I</option>
								<option value="4">Desember II</option>
								<option value="5">Januari I</option>
								<option value="6">Januari II</option>
								<option value="7">Febrari I</option>
								<option value="8">Februari II</option>
								<option value="9">Maret I</option>
								<option value="10">Maret II</option>
								<option value="11">April  I</option>
								<option value="12">April II</option>
								<option value="13">Mei I</option>
								<option value="13">Mei II</option>
								<option value="15">Juni I</option>
								<option value="16">Juni II</option>
								<option value="17">Juli I</option>
								<option value="18">Juli II</option>
								<option value="19">Agustus I</option>
								<option value="20">Agustus II</option>
								<option value="21">September I</option>
								<option value="22">September II</option>
								<option value="23">Oktober I</option>
								<option value="24">Oktober II</option>
							</select>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="tambah">Simpan</button>
							<a class="btn btn-light" href="?hal=jadwal/data&id=<?=$_GET['id']?>">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>