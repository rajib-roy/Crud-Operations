<?php 
include 'connect.php';
if(isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];
  $sql = "DELETE FROM crud WHERE id = $id";
  $result = mysqli_query($con, $sql);
  if($result) {
    header("location: display.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}

?>