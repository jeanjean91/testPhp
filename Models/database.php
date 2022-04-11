
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
?>  

