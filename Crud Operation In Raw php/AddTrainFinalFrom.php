<?php include('adminnavber.php') ?>
<?php  include('database.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN INSERT</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="container">
    <div class="header">
    	<h2>ADD NEW TRAIN INFORMATION</h2>
    </div>
  	
  <form method="post" action="AddTrainInsert.php">
  	 <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="form-group col-md-6">
    <!-- <label>Train Name</label> -->
     <label for="Train_name">Train Name</label>
    <input type="text" class="form-control" name="Train_name" value="" placeholder="Enter Train Name">
  </div>
  <div class="form-group col-md-6">
    <label>Form</label>
    <input type="text" class="form-control" name="t_from" value="" placeholder="Enter Train Form">
  </div>
  
  <div class="form-group col-md-6">
    <label>To</label>
    
    <input type="text" class="form-control" name="t_to" value="" placeholder="Enter Train Form">
  </div>

  <div class="form-group col-md-6">
    <label>Date</label>
    <input type="Date" class="form-control" name="t_date" value="" placeholder="Enter Train Date">
  </div>
  <div class="form-group col-md-6">
    <label>Time</label>
    <input type="text" class="form-control" name="t_time" value="" placeholder="Enter Train Time">
  </div>
  	<div class="form-group col-md-6">
  	  <label>Seat Class  </label>
  	  <select name="s_class" class="form-control">
        <option value="">Select Seat Class...</option>
        <option>Ac</option>
        <option>Non_Ac</option>
        <option>Shovon</option>
        <option>Cabin</option>
        <option>Chair</option>
      </select>
  	</div>
  	<div class="form-group col-md-6">
  	  <label>Seat Number </label>
  	  <input type="text" class="form-control" name="s_number" value="" placeholder="Enter Seat Number">
  	</div>
  	<div class="form-group col-md-6">
  	  <label>Price</label>
  	  <input type="text" class="form-control" name="s_price" placeholder="Enter Price">
  	</div>
  	<div class="form-group col-md-6">
      <button class="btn btn-danger" type="submit" name="submit" >Save</button>
  </div>
</form>
</form>
  	  
</body>
</html>