<?php
$conn = mysqli_connect("172.18.0.2","root","root", "trucorp-db");
if (!$conn){
echo "Connection fail" . PHP_EOL;
exit;
}
echo "Host Information: " . mysqli_get_host_info($conn) . PHP_EOL;
$query = "SELECT * FROM users";
$temp = 0;
$hasil = mysqli_query($conn, $query);

if (mysqli_num_rows($hasil) > 0) {
  while($row = mysqli_fetch_assoc($hasil)) {
   	$temp = $temp + 1;
    	echo "<br>id: " . $row["ID"]. "<br>" .  "Name: " . $row["Nama"]. "<br>" . "Kantor: " . 		$row["Kantor"]. "<br><br>";
}

mysqli_close($conn);
?>
