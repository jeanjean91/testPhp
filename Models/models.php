
<?php

 

class Model {
                    
    public function getlogin() {       

                //verif champs du formulaire rampli 
        if(isset($_POST['username']) && isset($_POST['password'])) 

        {
             

             include("database.php"); 
          
                //stock ds variable données envoyer par login form 
            $username=$_POST['username'];  
            $password=$_POST['password']; 


                //  recup user name ds la session
            $_SESSION["USERNAME"] = "$username"; 
            
            
                    
                //requette pour verifier si le username corespon avec le password 
            $verif_user="select * from users WHERE username='$username' AND password='$password'";   
             $run=mysqli_query($dbcon,$check_user); 

                    //condition daccess si la requette est ok
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