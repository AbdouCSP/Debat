<?php

require_once '../../entity/User.php';
require_once '../../model/UserManager.php';
//require_once '../../model/UserRepository.php';

class UserController
{
    public function validationForm()
    {
        if(isset($_POST['submit'])) {   
    
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
        
            if(empty($uname) || empty($pwd)) {
                
                echo "<br><div class='text-danger'>Veuillez remplire tous les champs SVP !!!</div>";
        
            } 
            else 
            { 
                $user = new User();
                $user->setUname($uname)->setPwd($pwd);
                
                $manager = new UserManager();
                $manager->create($user);
                $_POST = null; 
                echo "<br><div class='text-success'>Success !!</div>";
                echo '<meta http-equiv="refresh" content="1;url=inscription.php">';
            }
        }
    }

}

