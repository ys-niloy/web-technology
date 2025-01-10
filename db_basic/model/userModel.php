<?php
    function getConnection(){
        $conn = mysqli_connect('localhost', 'root', '', 'quiz_two');
        return $conn;
    }

    function addUser($n, $e, $p){
        $conn = getConnection();
        $sql = "insert into user_info VALUES('{$n}', '{$e}', '{$p}')";

        if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else{
            return false;
        }
            
    }

    function showAllUser(){
        $conn = getConnection();
        $sql = "select * from user_info";

        $result = mysqli_query($conn, $sql);

        return $result;
    }


?>