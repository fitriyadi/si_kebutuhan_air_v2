<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Pola Tanam</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Pilih Pola Tanam</h6>

				<form class="forms-sample" action="?hal=polatanam/hasil" method="POST">
					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Masa Tanam 1</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="mt1">
								<?php
								$sql="SELECT * FROM tb_tanaman";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
									extract($value);
									?>
									<option value="<?=$idtanaman?>"><?=$nama?></option>
								<?php } ?> 
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Masa Tanam 2</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="mt2">
								<?php
								$sql="SELECT * FROM tb_tanaman";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
									extract($value);
									?>
									<option value="<?=$idtanaman?>"><?=$nama?></option>
								<?php } ?> 
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Masa Tanam 3</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="mt3">
								<?php
								$sql="SELECT * FROM tb_tanaman";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
									extract($value);
									?>
									<option value="<?=$idtanaman?>"><?=$nama?></option>
								<?php } ?> 
							</select>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="pola">Lihat</button>
							<a class="btn btn-light" href="?hal=dashboard">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>