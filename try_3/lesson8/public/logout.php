<?php
session_start();
require_once '../classes/UserLogic.php' ;

if (!$logout = filter_input(INPUT_POST, 'logout'))
{
    exit('不正なリクエストです。');
}

// ログインしているか判定し、
// セッションが切れていたらログウインしてくださいとメッセージを出す。
$result = UserLogic::checkLogin();

if (!$result) {
    exit('Your session has expired, please login again.');
}

// do logout 
UserLogic::logout();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
</head>
<body>
    <h2>Logout completed!</h2>
    <p>You done log out.</p>
    <a href="login_form.php">to login page!</a>
</body>
</html>

