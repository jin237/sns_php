<?php
require_once '../functions.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user regist page</title>
</head>
<body>
    <h2>USER REGIST FORM</h2>
    <form action="register.php" method="POST">
    <p>
        <label for="username"> Please enter "User name":</label>
        <input type="text" name="username">
    </p>
    <p>
        <label for="email">  Please enter "E-mail":</label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="password">  Please enter "Password":</label>
        <input type="password" name="password">
    </p>
    <p>
        <label for="password_conf">  Please enter "Password (again)":</label>
        <input type="password" name="password_conf">
    </p>
    <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
    <p>
        <input type="submit" value="NEW REGISTRAION">
    </p>
    </form>
</body>
</html>