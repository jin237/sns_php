<?php
session_start();
require_once '../classes/UserLogic.php' ;

// error message
$err = [];

$token = filter_input(INPUT_POST, 'csrf_token');
//トークンがない、もしくは一致しない場合、処理を中止
if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
    exit('不正なリクエスト');
}
unset($_SESSION['csrf_token']);

// validation
// = Input check, Data format check, Validity check
if (!$username = filter_input(INPUT_POST, 'username')) {
    $err[] = 'Please enter the Username'; 
}

if (!$email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'Please enter the e-mail'; 
}

$password = filter_input(INPUT_POST, 'password');

// regular expressions
if (!preg_match("/\A[a-z\d]{8,100}+\z/i",$password)) {
    $err[] = 'Please enter a password with at least 8 alphanumeric characters and no more than 100.';
}
$password_conf = filter_input(INPUT_POST, 'password_conf');
if ($password !== $password_conf) {
    $err[] = 'The password is different from the confirmation password.';
}


if (count($err) === 0) {
    // regist user 
    $hasCreated = UserLogic::createUser($_POST);

    if(!$hasCreated) {
        $err[] = 'You failured regist.';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User regist complete page</title>
</head>
<body>
    <?php if (count($err) > 0) : ?>
    <?php foreach($err as $e) : ?>
        <p><?php echo $e ?></p>
    <?php endforeach?>
    <?php else : ?>
        <p>You completed User Regist!</p>
    <?php endif ?>
    <a href="./signup_form.php">Back</a>
</body>
</html>

