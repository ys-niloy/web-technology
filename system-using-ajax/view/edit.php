<?php
    session_start();
    require_once('../model/userModel.php');

    if(!isset($_COOKIE['status'])){
        header('location: login.html'); 
    }

    if (isset($_REQUEST['id'])){
        echo $_REQUEST['id'];
    }

    $conn = getConnection();

    if (!$conn) {
        die("Connection failed: ");
    }


    $id = $_REQUEST['id'];          //retrieving id from userlist page

    $sql = "SELECT id, username, email, password FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        
        $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
    }


?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit User</h2>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>logout </a>
        <br>
        <form method="post" action="../controller/update.php" enctype="">
            <input type="hidden" name="id" value="<?=$id?>">            
            Username <input type="text" name="username" value="<?=$username?>" /> <br>
            Password <input type="password" name="password" value="<?=$password?>" /> <br>
            Email <input type="email" name="email" value="<?=$email?>" /> <br>
            <input type="submit" name="submit" value="Update" />
        </form>
</body>
</html>
