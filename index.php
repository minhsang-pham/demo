<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome</h1>
    <?php 
        session_start();
        // if (isset($_GET['isLogout'])) {
        //     logout();}

        if(isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
            echo "$username <br><form action='logout.php' method='POST'>
            <button type='submit' name='isLogout' value='true'>Đăng xuất</button>
                </form>";
        }
        else if(!isset($_SESSION['username']))
        {
            echo "<button>Đăng nhập</button>";
        }

        // function logout()
        // {
        //     unset($_SESSION['username']);
        // }

    ?>
    
</body>
</html>