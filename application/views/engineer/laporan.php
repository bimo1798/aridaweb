<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table-data{
			width: 100%;
			border-collapse: collapse;
		}
		.table-data tr th,
		.table-data tr td{
			border: 1px solid black;
			font-size: 10pt;
		}

	</style>
</head>
<body>
	<h3>Laporan <?= $wa['shift'] .' '. $wa['name'] ?></h3>
	<br>
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Start Time</th>
				<th>Respon Time</th>
				<th>Activity Shift</th>
				<th>Priority</th>
				<th>Information</th>
			</tr>
		</thead>
		<thead>
			<?php $no =1; ?>
			<?php foreach ($work_activity as $r) : ?>
				<tr>
					<td><?= $no ?></td>
					<td><?=$r['time_start']; ?></td>
					<td><?=$r['respon_time']; ?></td>
					<td><?=$r['activity_shift']; ?></td>
					<td><?=$r['priority']; ?></td>
					<td><?=$r['information']; ?></td>
				</tr>
			<?php endforeach; ?>

		</thead>
	</table>

</body>
</html>