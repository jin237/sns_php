<?php
session_start();

require_once '../classes/UserLogic.php';

// error message
$err = [];

// validation
// = Input check, Data format check, Validity check
if (!$email = filter_input(INPUT_POST, 'email')) {
    $err['email'] = 'Please enter the e-mail'; 
}

if (!$password = filter_input(INPUT_POST, 'password')){
    $err['password'] = 'Please enter the password';
};

if (count($err) > 0) {
    // if error exist
    $_SESSION = $err;
    header ('Location: login_form.php');
    return;
}
// login success 
$result = UserLogic::login($email, $password);

// login failure
if (!$result) {
    header ('Location: login_form.php');
    return;    
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Completed</title>
</head>
<body>
    <h2>Login Completed!</h2>
    <p>You completed Login!</p>
    <a href="./mypage.php">to My page!</a>
</body>
</html>

