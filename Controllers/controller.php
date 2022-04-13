
<?php

    require_once('models/models.php');
    class Controller
    {
        public $model;
        
        public function __construct()
        {
            $this->models= new Model();// instance model
        }
        
        public function log()
        {
            $reslt = $this->models->getlogin();
            
               // verif que le model return login
            if($reslt == 'login')
            { // le controller choisi la page a envoyer
                include 'views/home.php';
            }
            else
            {
                include 'views/login.php';
            }
        }
    }
?>