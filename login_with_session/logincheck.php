<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        

        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);
        

        if($username == null || empty($password)){
            echo "Null username/password!";

        }else if ($username == $password) {
            
            $_SESSION['status'] = true;
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        
    }

?>