
<?php
require_once('models/models.php');

class Model {
                    
    public function getlogin() {       

            //verif champs rampli
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) 

        {

            // include("/database.php");  

            $username=$_REQUEST['username'];  
            $password=$_REQUEST['password']; 
            
            $_SESSION["USERNAME"] = "$username"; 
            
            
               // connexion db 
            $dbcon = mysqli_connect('localhost', 'root', 'root', 'myPhpTest');
                    
                    //requette
            $verif_user="select * from users WHERE username='$username' AND password='$password'";   
             $run=mysqli_query($dbcon,$check_user); 

                    //condition daccess
             if(mysqli_num_rows(mysqli_query($dbcon,$verif_user)))
            
            {
                return 'login';
            }
            
            else  
            {  
                echo "<script>alert('username ou password  incorrect!')</script>";   
            }  
        }                                                                           
    }                                                                               
} 
?>