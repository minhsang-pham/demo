<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = null;

    $dbhost = "localhost"; // 127.0.0.1
    $dbuser = "root";
    $dbpass = "";
    $db = "test";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

    $stringQuery = "SELECT username, password FROM dangnhap WHERE username = '$username' AND password = '$password'";

    if($conn->query($stringQuery)->num_rows > 0)
    {
        $id = $conn->query($stringQuery)->fetch_assoc()['username'];
        session_start();
        $_SESSION['username'] = $id;
        header("Location: index.php");
    }
    else 
    {
        echo "Đăng nhập thất bại!";
    }
?>