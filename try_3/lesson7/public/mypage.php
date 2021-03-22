<?php
session_start();
require_once '../classes/UserLogic.php' ;
require_once'../functions.php';

//ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
    $_SESSION['login_err'] = ' Please login after User registration!';
    header ('Location: signup_form.php');
    return;
}

$login_user = $_SESSION['login_user']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My pgae</title>
</head>
<body>
    <h2>My pgae</h2>
    <p>Login User: <?php echo h($login_user['name']) ?></p>
    <p>Mail address: <?php echo h($login_user['email']) ?></p>
    <a href="./login.php">Logout</a>
</body>
</html>

