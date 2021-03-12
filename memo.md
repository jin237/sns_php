# refeerences
https://itport.cloud/?p=7914

CREATE DATABASE `fp_bbs` DEFAULT CHARACTER SET utf8;
CREATE TABLE fp_bbs.post (id INT NOT NULL AUTO_INCREMENT,name VARCHAR(40),created_day DATETIME, comment VARCHAR(200),PRIMARY KEY(id)) ENGINE = INNODB;
