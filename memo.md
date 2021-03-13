# 大枠リファレンス
[PHPでSNSを作成する]https://itport.cloud/?p=7914

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
