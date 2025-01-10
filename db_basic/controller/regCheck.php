<?php
    // session_start();
    require_once '../model/userModel.php';

    if (isset($_REQUEST['submit'])) {
        $name = trim($_REQUEST['name']);
        $email = trim($_REQUEST['email']);
        $password = trim($_REQUEST['password']);

        if ($name == null || $email == null || $password ==null) {
            echo "Please fillup all the fields";
        }else {

            $status = addUser($name, $email, $password);

            if($status){
                header("Location: ../view/home.php");
            }else {
                echo "Error registering";
            }
        }
    }
?>