<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>BBS</title>
    </head>
    <body>
        <h1>BBS</h1>
        <form action="bbs.php" method="post">
            名前:　<input type="text" name="name" /><br>
            内容:　<input type="text" name="comment" size="60" /><br>
            <input type="submit" name="submit" value="送信" />
        </form>
    </body>
    <?php
            //coonect to DB
            $mysql = mysqli_connect('localhost', 'root', 'root', 'fp_bbs');
            if (!$mysql) {
                exit('DB接続エラー');
            } 

            // connect situation check
            if (!$mysql) {
                printf('Connect failed: %s\n'. mysqli_connect_errno());
                exit();
            }

            printf("Initial character set: %s\n", mysqli_character_set_name($mysql));

            // change to charset utf8
            if (!mysqli_set_charset($mysql, "utf8")) {
                printf("Error loading character set utf8: %s\n", mysqli_error($mysql));
                exit();
            } else {
                printf("Current character set: %s\n", mysqli_character_set_name($mysql));
            }

            // mysqli_set_charset($mysql, 'utf8');

            //select DB
            $result = mysqli_select_db($mysql, 'fp_bbs');
            if (!$result) {
                exit('DB選択エラー');
            } 
            $errors = array();
    ?>
</html>
