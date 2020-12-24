<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Koefisien Tanaman</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Koefisien Tanaman (Kc)</h6>
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<th rowspan="2">Nama Tanaman</th>
								<th rowspan="2">Jenis</th>
								<td colspan="6" align="center">Umur (Minggu Ke-)</td>
								<th rowspan="2">#</th>
							</tr>
							<tr>
								<th>1</th>
								<th>2</th>
								<th>3</th>
								<th>4</th>
								<th>5</th>
								<th>6</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql="SELECT * FROM tb_tanaman";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
								extract($value);
								?>
								<tr>
									<td><?=$nama?></td>
									<td><?=$jenis?></td>
									<?php for ($i=1;$i<=6;$i++){ ?>
										<td><?=lihatnilai($mysqli,$idtanaman,$i)?></td>
									<?php } ?>
									<td>
										<?=_edit("?hal=tanaman/olah_koefisien&id=$idtanaman")?>
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
	function lihatnilai($mysqli,$idtanaman,$minggu){
		@$nilai=caridata($mysqli,"select nilai from tb_koefisien where idtanaman='$idtanaman' and minggu='$minggu'");

		if($nilai==null){
			$nilai="";
		}
		return $nilai;
	}
?>


