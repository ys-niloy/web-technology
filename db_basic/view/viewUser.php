<?php
    require_once "../model/userModel.php";

    $result = showAllUser();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <h1>Here are all the registered users:</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
        </tr>

        <?php
            }
        }
       
        ?>
        

    </table>
</body>
</html>