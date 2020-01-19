<?php 
include('adminnavber.php');
include('database.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM train WHERE id=$id");

		 // if(count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$Train_name = $n['Train_name'];
			$t_from = $n['t_from'];
		    $t_to = $n['t_to'];
		    $t_date = $n['t_date'];
		    $t_time = $n['t_time'];
		    $s_class = $n['s_class'];
		    $s_number = $n['s_number'];
		    $s_price = $n['s_price'];
		 // }

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Train insert </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>


<?php $results = mysqli_query($conn, "SELECT * FROM train"); ?>
<div class="container">
<div class="header">
  	<h2> EDIT TRAIN INFORMATION</h2>
  </div>
	


<form method="post" action="TrainUpdateSuccess.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="form-group col-md-6">
		<label>Train Name</label>
		<input type="text" class="form-control" name="Train_name" value="<?php echo $Train_name; ?>" placeholder="Enter Train Name">
	</div>
	<div class="form-group col-md-6">
		<label>Form</label>
		<input type="text" class="form-control" name="t_from" value="<?php echo $t_from; ?>" placeholder="Enter Train Form">
	</div>
	<div class="form-group col-md-6">
		<label>To</label>
		<br>
		<input type="text" class="form-control" name="t_to" value="<?php echo $t_to; ?>" placeholder="Enter Train Form">
	</div>

	<div class="form-group col-md-6">
		<label>Date</label>
		<input type="Date" class="form-control" name="t_date" value="<?php echo $t_date; ?>" placeholder="Enter Train Date">
	</div>
	<div class="form-group col-md-6">
		<label>Time</label>
		<input type="text" class="form-control" name="t_time" value="<?php echo $t_time; ?>" placeholder="Enter Train Time">
	</div>
	 <input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
    <div class="form-group col-md-6">
      <label>Seat Class  </label>
       <input type="text" class="form-control" name="s_class" value="<?php echo $s_class; ?>" placeholder="Enter Seat class">
    </div>
    <div class="form-group col-md-6">
      <label>Seat Number </label>
      <input type="text" class="form-control" name="s_number" value="<?php echo $s_number; ?>" placeholder="Enter Seat Number">
    </div>
    <div class="form-group col-md-6">
      <label>Price</label>
      <input type="text" class="form-control" name="s_price" value="<?php echo $s_price; ?>" placeholder="Enter Price">
    </div>


	<div class="form-group col-md-6">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
	</div>
</form>
</body>
</html>