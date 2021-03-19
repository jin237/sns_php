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
}