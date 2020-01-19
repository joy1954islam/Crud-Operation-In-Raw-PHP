
 <?php 
include('adminnavber.php');
include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<title>Train View</title>
</head>
<body>
<?php $results = mysqli_query($conn, "SELECT * FROM train"); ?>

<table>
	<h1 style="text-align: center; color: green">Train View</h1>
	<thead>
		<tr>
			<th>Train Name</th>
			<th>Form</th>
			<th>To</th>
			<th>Date</th>
			<th>Time</th>
			<th>Seat Class</th>
			<th>Seat Number</th>
			<th>Seat Price</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['Train_name']; ?></td>
			<td><?php echo $row['t_from']; ?></td>
			<td><?php echo $row['t_to']; ?></td>
			<td><?php echo $row['t_date']; ?></td>
			<td><?php echo $row['t_time']; ?></td>
			<td><?php echo $row['s_class']; ?></td>
			<td><?php echo $row['s_number']; ?></td>
			<td><?php echo $row['s_price']; ?></td>
			<td>
				<a href="TrainUpdate.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<!-- <a href="TrainDelete.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a> -->
				<a href="TrainDelete.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a> 
			</td>
		</tr>
	<?php } ?>
</table>
	
</body>
</html>