<?php 
  session_start();
  include('database.php');
  // initialize variables
  $Train_name = "";
  $t_from = "";
  $t_to = "";
  $t_date = "";
  $t_time = "";
  $id = 0;
  $s_class = "";
  $s_number = "";
  $s_price = "";
  $update = false;
 if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $Train_name = $_POST['Train_name'];
    $t_from = $_POST['t_from'];
    $t_to = $_POST['t_to'];
    $t_date = $_POST['t_date'];
    $t_time = $_POST['t_time'];
    $s_class = $_POST['s_class'];
    $s_number = $_POST['s_number'];
    $s_price = $_POST['s_price'];

    mysqli_query($conn, "UPDATE train SET Train_name='$Train_name', t_from='$t_from', t_to='$t_to',t_date='$t_date',t_time='$t_time',s_class='$s_class', s_number='$s_number', s_price='$s_price' WHERE id=$id");
  
    header('location: AddTrainView.php');
  }
  ?>