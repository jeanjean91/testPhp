
<?php
require_once('models/models.php');

class Model {
                    
    public function getlogin() {       


        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) 

        {

            // include("/database.php");  

            $username=$_REQUEST['username'];  
            $password=$_REQUEST['password']; 
            
            $_SESSION["USERNAME"] = "$username"; 
            
            

            $dbcon = mysqli_connect('localhost', 'root', 'root', 'myPhpTest');
                    
            $verif_user="select * from users WHERE username='$username' AND password='$password'";   
             $run=mysqli_query($dbcon,$check_user); 

             if(mysqli_num_rows(mysqli_query($dbcon,$verif_user)))
            
            {
                return 'login';
            }
            
            else  
            {  
                echo "<script>alert('Email or password is incorrect!')</script>";  // 
            }  
        }                                                                           
    }                                                                               //
} 
?>