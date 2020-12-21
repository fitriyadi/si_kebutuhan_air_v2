<?php
$query="SELECT * FROM tb_grafik";

$result=$mysqli->query($query);
$num_result=$result->num_rows;
$rows = array();
if ($num_result > 0 ) { 
	while ($data=mysqli_fetch_assoc($result)) {
		extract($data);

		$arrayFramework[] = "'".$bulan."'";
		$arraykebutuhan[] = round($total_kebutuhan,2);
		$arrayketersediaan[] = round($total_ketersediaan,2);
	}}

	//echo "<pre>";
	//print_r($arrayFramework);
	//echo "</pre>";

	?>
	<script src="jquery.min.js"></script>
	<script src="highcharts.js"></script>
	<script type="text/javascript">
		$(function(){
			var chart = new Highcharts.Chart({
				chart: {
					renderTo: 'mygraph',
					type: 'line',
				},
				title: {
					text: 'Grafik Pola Tanam'
				},
				xAxis: {
					categories: [<?= join($arrayFramework, ',') ?>],
					title: {
						text: null
					}
				},
				yAxis: {
					min: 0,
					title: {
						text: 'Debit (M<sup>3</sup>/s)',
						align: 'high'
					},
					labels: {
						overflow: 'justify'
					}
				},
				tooltip: {
					valueSuffix: ' Nilai'
				},
				plotOptions: {
					bar: {
						dataLabels: {
							enabled: true
						}
					}
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'top',
					x: -40,
					y: 80,
					floating: true,
					borderWidth: 1,
					backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
					shadow: true
				},
				credits: {
					enabled: false
				},
				series: [{
					name: 'Ketersediaan',
					data: [<?= join($arrayketersediaan, ',') ?>],
					color: '#0000FF',
				},
				{
					name: 'Kebutuhan',
					data: [<?= join($arraykebutuhan, ',') ?>],
					color: '#7FFF00',
				}]
			});
		});
	</script>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Grafik Pola Tanam</h6>
					<div id ="mygraph"></div>
					<div class="row">
						<div class="col-sm-4">
							<btn class="btn btn-primary" style="float:left;margin-left: 30px;">November</btn>
						</div>
						<div class="col-sm-4 mt-5">
							<p align="center">Minggu</p>
						</div>
						<div class="col-sm-4">
							<btn class="btn btn-primary" style="float:right;">Oktober</btn>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


