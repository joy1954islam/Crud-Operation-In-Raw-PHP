<?php
include('database.php');
?>
<?php

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($conn, "DELETE FROM train WHERE id=$id");
  
  header('location: AddTrainView.php');
}


  $results = mysqli_query($conn, "SELECT * FROM train");


?>