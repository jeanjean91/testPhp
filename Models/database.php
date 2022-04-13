
<?php  
try 
{
    $dbcon=mysqli_connect("localhost","root","root");  
    mysqli_select_db($dbcon,"myPhpTest");               
} 
catch (Exception $ex) 
{
    echo "echec connection ";
}

// $dbcon = new mysqli("localhost","root","root","myPhpTest");


// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
?>  

