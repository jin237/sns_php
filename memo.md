# 大枠リファレンス
[PHPでSNSを作成する](https://itport.cloud/?p=7914)

# ターミナル
### リファレンス
[【初心者向け入門】PHPからMySQLを利用する](https://qiita.com/ab-boy_ringo/items/8274c66b6692966fdc55)

### DBの作成
ターミナル上で、MAMP上でのDBの作成を行う。

```
cd /applications/mamp/library/bin

./mysql -u root -p

pass:'root'

CREATE DATABASE `fp_bbs` DEFAULT CHARACTER SET utf8;

CREATE TABLE fp_bbs.post (id INT NOT NULL AUTO_INCREMENT,name VARCHAR(40),created_day DATETIME, comment VARCHAR(200),PRIMARY KEY(id)) ENGINE = INNODB;
```

# ちょっと実行
実行コード
https://github.com/jin237/sns_php/blob/main/index.php

```
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
                exit('DB connect error');
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
    ?>
</html>
```
