# Vue + Vue Router + Vuex + Laravelで写真共有アプリを作ろう

## 機能一覧
- 写真の一覧を表示する
- 写真を投稿する（会員のみ）
- 写真にいいねを付ける（会員のみ）
- 写真からいいねを外す（会員のみ）
- 写真にコメントを追加する（会員のみ）
- 写真に付けられたいいねの数を表示する
- 写真に付けられたコメントを表示する
- 会員登録する
- ログインする
- ログアウトする（会員のみ）



# Memo
### Dockerfileの作成(terminal)
1. 作成するところまでのパスまで開く
2. `$ vi Dockerfile`
3. 
```
FROM php:7.4.1-fpm

COPY install-composer.sh /
RUN apt-get update \
  && apt-get install -y wget git unzip libpq-dev \
  && : 'Install Node.js' \
  &&  curl -sL https://deb.nodesource.com/setup_12.x | bash - \
  && apt-get install -y nodejs \
  && : 'Install PHP Extensions' \
  && docker-php-ext-install -j$(nproc) pdo_pgsql \
  && : 'Install Composer' \
  && chmod 755 /install-composer.sh \
  && /install-composer.sh \
  && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html/vuesplash
```
を入力

4. Shift + q で抜け出し
5. `$ exit`

