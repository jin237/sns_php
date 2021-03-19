<?php

require_once'../classes/UserLogic.php';

session_start();
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
    header ('Location: login.php');
    return;
}
// login success 
echo 'Login Success.';

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
    <a href="./login.php">Back</a>
</body>
</html>

