<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header("Location: login.html");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['user']['username']; ?> </h1>
</body>
</html>