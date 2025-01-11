<?php
    session_start();
    require_once('../model/userModel.php');

    if (isset($_POST['userData'])) {
        $user = $_POST['userData'];
        $data = json_decode($user, true); // Decode as associative array

        if (isset($data['name'], $data['password'], $data['email'])) {
            $status = addUser($data['name'], $data['password'], $data['email']);
            echo "User {$data['name']} registered successfully";
        } else {
            echo "Invalid user data.";
        }
    } else {
        echo "No user data received.";
    }


    // for sending data to the ajax function in the javascript file
    // $user = ['id'=> 1, 'username'=> 'alamin', 'email'=> 'alamin@aiub.edu'];
    // $data = json_encode($user);
    // echo $data;
?>
