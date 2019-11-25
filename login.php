<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h1>login page</h1>
    <form action="login_post.php" method="POST">
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
</body>
</html>