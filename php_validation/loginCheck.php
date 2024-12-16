<?php
    
    session_start();

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($username == null || $password == null || $confirmPassword == null){
            echo "Please input all the fields";
        }else if(!strpos($username, "_")){
            
            echo "There must be an underscore in your username";

        }else if($password == $confirmPassword){

            // valid user
            setcookie('status', 'true', time()+120, '/');
            $userInfo = ['username'=>$username, 'password'=> $password, 'confirmPassword'=> $confirmPassword];
            $_SESSION['user'] = $userInfo;
            header("Location: home.php");
        }else{
            echo "Passwords do not match";
        }
    }
?>