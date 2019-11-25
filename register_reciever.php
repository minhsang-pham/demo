<?php  

    $username = $_POST['username'];
    $password = $_POST['password'];

    $dbhost = "localhost"; // 127.0.0.1
    $dbuser = "root";
    $dbpass = "";
    $db = "test";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

    $stringQuery = "INSERT INTO dangnhap(username, password) VALUES('$username', '$password')";

    if ($conn->query($stringQuery) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Đăng ký thất bại!";
    }

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["madangnhap"]. " - username: " . $row["username"]. "- password " . $row["password"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    $conn->close();


?>