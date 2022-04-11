
<?php
SESSION_START();





require_once("Controllers/controller.php");

$controllers = new Controller(); 
$controllers->log();



$mysqli = new mysqli("localhost","root","root","myPhpTest");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// if ($result = $mysqli -> query("SELECT * FROM user")) {
//   echo "Returned rows are: " . $result -> num_rows;
  
//   $result -> free_result();
// }

// $sql = "SELECT * FROM user ";
// $result = $mysqli -> query($sql);


// $row = $result -> fetch_array(MYSQLI_NUM);
// printf ("%s (%s)\n", $row[0], $row[1]);

// $row = $result -> fetch_array(MYSQLI_ASSOC);
// printf ("%s (%s)\n", $row["username"],$row["password"]);

// $result -> free_result();

// $mysqli -> close();




?>

