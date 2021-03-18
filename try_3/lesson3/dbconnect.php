<?php
require_once 'env.php';
// エラー内容の表示（なくてもタイプミスなら、出力される）
ini_set('display_errors', true);

function connect()
{
    // 変数として、DBの各要素
    $host = DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    // どこにおくのか、名前は何か、文字はどれか
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    // DBへの接続
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        ]);
        // 成功したら表示
        // echo 'Connect Succeess!';
        return $pdo;
    } catch(PDOExeption $e) {
        // 失敗したら表示
        echo 'Connect Failued.'. $e->getMessage();
        exit();
    }
}
