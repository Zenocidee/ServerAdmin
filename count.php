<?php
$conn=mysqli_connect("172.18.0.2","root","root","database");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM users";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  mysqli_free_result($result);
  }

mysqli_close($conn);
?>
