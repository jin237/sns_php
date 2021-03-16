<?php
ini_set('display_errors', true);
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
    <form action="register.php" method="POST"></form>
    <p>
        <label for="username"> Please enter "User name":&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
        <input type="text" name="username">
    </p>
    <p>
        <label for="email">  Please enter "E-mail":&thinsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="password">  Please enter "Password":&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
        <input type="password" name="password">
    </p>
    <p>
        <label for="password_conf">  Please enter "Password (again)":&ensp;</label>
        <input type="password" name="password_conf">
    </p>
    <p>
        <input type="submit" value="新規登録">
    </p>
</body>
</html>