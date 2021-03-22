<?php
session_start();

$err  = $_SESSION;

// valid session
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login page</title>
</head>
<body>
    <h2>USER LOGIN FORM</h2>
    <?php if (isset($err['msg'])) : ?>
        <p><?php echo $err['msg']; ?></p>
    <?php endif; ?>
    <form action="top.php" method="POST">
    <p>
        <label for="email">  Please enter "E-mail":</label>
        <input type="email" name="email">
        <?php if (isset($err['email'])) : ?>
            <p><?php echo $err['email']; ?></p>
        <?php endif; ?>
    </p>
    <p>
        <label for="password">  Please enter "Password":</label>
        <input type="password" name="password">
        <?php if (isset($err['password'])) : ?>
            <p><?php echo $err['password']; ?></p>
        <?php endif; ?>
    </p>
    <input type="submit" value="LOGIN">
    </form>
    <a href="signup_form.php">New registeration!</a>
</body>
</html>