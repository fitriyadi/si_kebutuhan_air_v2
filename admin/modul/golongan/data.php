<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Golongan</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Golongan</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Golongan</th>
								<th>Saluran</th>
								<th>Efisiensi</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql="SELECT * FROM tb_golongan";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
								extract($value);
								?>
								<tr>
									<td><?=$namagolongan?></td>
									<td><?=getdatasaluran($mysqli,$idgolongan)?></td>
									<td><?=$efisiensi?></td>
									<td>
										<?=_tambah("?hal=golongan/detail&id=$idgolongan")?>
										<?=_edit("?hal=golongan/olah&id=$idgolongan")?>
										<?=_hapus("?hal=golongan/proses&hapus=$idgolongan")?>
									</td>
								</tr>
							<?php } ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

function getdatasaluran($mysqli,$idgolongan){
	$sql="SELECT * FROM tb_saluran where idgolongan='$idgolongan'";
	$tampil="";
	foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
		extract($value);
		$tampil=$tampil."<button type='button' class='btn btn-primary' style='margin:5px;'>$nama <span class='badge badge-light'>$luas Ha</span></button><br>";
	}

	return $tampil;
}

?>