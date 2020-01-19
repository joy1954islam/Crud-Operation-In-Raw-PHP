<?php

// include("server.php");
include('database.php');

echo "<br>";

if(isset($_POST['submit'])){
	$Train_name = mysqli_real_escape_string($conn, $_POST['Train_name']);
    $t_from =mysqli_real_escape_string($conn, $_POST['t_from']);
    $t_to = mysqli_real_escape_string($conn, $_POST['t_to']);
    $t_date = mysqli_real_escape_string($conn, $_POST['t_date']);
    $t_time = mysqli_real_escape_string($conn, $_POST['t_time']);
	$s_class=$_POST['s_class'];
	$s_number=$_POST['s_number'];
	$s_price=$_POST['s_price'];
	

	$query = "INSERT INTO train (Train_name,t_from,t_to,t_date,t_time,s_class,s_number,s_price) 
  			  VALUES('$Train_name', '$t_from', '$t_to', '$t_date', '$t_time','$s_class', '$s_number', '$s_price')";
  	$run = mysqli_query($conn, $query);
	if($run ==TRUE)
	{
		
		echo("successfull insert data");
		header('location: AddTrainView.php');
	}
	else
	{
		echo "error data insert";
	}
  	
	
	mysqli_close($db);
}

?>