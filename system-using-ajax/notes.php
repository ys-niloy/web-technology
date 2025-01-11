<?php

    session_start();
    require_once('../model/userModel.php');

    if (!isset($_COOKIE['status'])) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
        exit();
    }

    $conn = getConnection();

    if (!$conn) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
        exit();
    }

    $sql = "SELECT id, username, email, password FROM users";
    $result = mysqli_query($conn, $sql);

    $userList = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userList[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'data' => $userList]);

    $conn->close();
?>
