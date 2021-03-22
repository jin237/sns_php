<?php

require_once('../dbconnect.php');

class UserLogic
{
    /**
     * regist user
     * @param array $userData  
     * @return bool $result
     */
    public static function createUser($userData)
    {
        $result = false;

        $sql = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';
        // return $result;

        // enter the user data to array
        $arr = [];
        $arr[] = $userData['username'];
        $arr[] = $userData['email'];
        // hash for password
        $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT);

        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            return $result;
        } catch (\Exception $e) {
            // output errors
            echo $e;
            // output error log
            error_log($e, 3, '../error.log');
            
            return $result;
        }
    }
    /**
     * login
     * @param string $email
     * @param string $password
     * @return bool $result
     */
    public static function login($email, $password)
    {
        //result
        $result = false;
        //get user by surching email
        $user =self::getUserByEmail($email);

        if(!$user) {
            $_SESSION['msg'] = ' Your e-mail is different.';
            return $result;
        }

        //var_dump($user);
        //return;

        //inquiry password
        if (password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['login_user'] = $user;
            $result = true;
            return $result;
        }

        $_SESSION['msg'] = 'Your password is different';
        return $result;
        
    }

    /**
     * get user from email
     * @param string $email
     * @return array|bool $user|false
     */
    public static function getUserByEmail($email)
    {
        // prepare SQL
        // run SQL
        //return result of SQL

        $sql = 'SELECT * FROM users WHERE email = ?';

        // enter the email data to array
        $arr = [];
        $arr[] = $email;

        try {
            $stmt = connect()->prepare($sql);
            $stmt->execute($arr);
            // return result of SQL
            $user = $stmt->fetch();
            return $user;
        } catch (\Exception $e) {
            // output errors
            echo $e;
            // output error log
            error_log($e, 3, '../error.log');
            
            return falset;
        }
    }

    /**
     * login check
     * @param void
     * @return bool $result
     */
    public static function checkLogin()
    {
        $result = false;

        // セッションにログインユーザが入っていなかったらfalse

        if (isset($_SESSION['login_user']) && $_SESSION['login_user']['id'] > 0) {
            return $result = true;
        }
        return $result;
    }

}