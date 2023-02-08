<?php
$servername = "mysql.ct8.pl";
$username = "m23523_otgcdb";
$password = "pl*J+F03DW7TERvZXI'#zZjodTh2tA";
$dbname = "m23523_otgcdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT avatar, name, status, description FROM lead";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["avatar"]. " - Name: " . $row["name"]. " " . $row["status"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>