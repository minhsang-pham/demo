<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Register Page</title>
</head>
<body>
    <div class="form-action">
        <h1>Sign in</h1>
        <form action="register_reciever.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" placeholder="Enter username"/>
            <br>
            <br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter password"/>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>