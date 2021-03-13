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
                exit('DB connect erro');
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
                exit('DB select error');
            } 
            $errors = array();

            //名前のチェック
            $name = null;
            //名前がnullでないことをチェック
            if(!isset($_POST['name']) || !strlen($_POST['name'])) {
                $errors['name'] = '名前を入力してください';
            } else if (strlen($_POST['name']) > 40) {
                $errors['name'] = '名前は40文字以内で入力してください';
            } else {
                $name = $_POST['name'];
            }

            //コメントのチェック
            $comment = null;
            //名前がnullでないことをチェック
            if(!isset($_POST['comment']) || !strlen($_POST['comment'])) {
                $errors['comment'] = 'コメントを入力してください';
            } else if (strlen($_POST['comment']) > 200) {
                $errors['comment'] = 'コメントは200文字以内で入力してください';
            } else {
                $comment = $_POST['comment'];
            }

            //エラーがなければ保存
            if (count($errors) === 0) {
                //保存するためのSQL分を作成
                $sql ='INSERT INTO post(Pname, comment, created_day)VALUES("'
                    .mysqli_real_escape_string($mysql, $name).'" ,"'
                    .mysqli_real_escape_string($mysql, $comment).'",\''
                    .date('Y-m-d H:i:s').'\')';

                //保存する
                mysqli_query($mysql, $sql);
                }
    ?>
</html>