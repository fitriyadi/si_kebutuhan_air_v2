<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Ketersediaan Air</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Ketersediaan Air</h6>
				
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Bulan</th>
								<th>Andalan 80%</th>
								<th>Andalan 70%</th>
								<th>Andalan 10%</th>
								<th>Qintake</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_ketersedian_air";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
								extract($value);
								?>
								<tr>
									<td><?=$no+=1;?></td>
									<td><?=$bulan_nama." - ".$bulan_ket?></td>
									<td><?=$q80?></td>
									<td><?=$q70?></td>
									<td><?=$q10?></td>
									<th><?=$qintake?></th>
									<td>
										<?=_edit("?hal=intake/olah&id=$id")?>
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
