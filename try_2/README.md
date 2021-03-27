# Vue + Vue Router + Vuex + Laravelで写真共有アプリを作ろう
### 作業リポジトリ：　[try_2(Vue+Vue Router+Vuex+Laravelで写真共有アプリを作ろう)](https://github.com/jin237/try_2/tree/main/vuesplash)

- [x] [01. イントロダクション](https://www.hypertextcandy.com/vue-laravel-tutorial-introduction/)
- [x] [02. アプリケーションの設計](https://www.hypertextcandy.com/vue-laravel-tutorial-application-design/)
- [x] [03. SPA開発環境とVue Router](https://www.hypertextcandy.com/vue-laravel-tutorial-setting-up-spa-project/)
- [x] [04. 認証API](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication/)
- [x] [05. 認証ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-2/)
- [ ] [06. 認証機能とVuex](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-3/)
- [ ] [07. 認証機能とVuex Part.2](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-4/)
- [ ] [08. エラーハンドリング](https://www.hypertextcandy.com/vue-laravel-tutorial-error-handling/)
- [ ] [09. 写真投稿API](https://www.hypertextcandy.com/vue-laravel-tutorial-submit-photo/)
- [ ] [10. 写真投稿フォーム](https://www.hypertextcandy.com/vue-laravel-tutorial-submit-photo-part-2/)
- [ ] [11. 写真一覧取得API](https://www.hypertextcandy.com/vue-laravel-tutorial-list-photos/)
- [ ] [12. 写真一覧ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-list-photos-part-2/)
- [ ] [13. 写真詳細ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-photo-detail/)
- [ ] [14. コメント投稿機能](https://www.hypertextcandy.com/vue-laravel-tutorial-add-comment/)
- [ ] [15. いいね機能](https://www.hypertextcandy.com/vue-laravel-tutorial-likes/)
- [ ] [16. エラーハンドリング Part.2](https://www.hypertextcandy.com/vue-laravel-tutorial-error-handling-part-2/)

# 機能一覧
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
## Dockerfileの作成(terminal)
1. 作成するところまでのパスまで開く
2. `$ vi Dockerfile`
3. 設定を入れる
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


## Laravelプロジェクトの作成
```
composer create-project --prefer-dist laravel/laravel .
↓
composer create-project --prefer-dist "laravel/laravel=6.*" .
```
に変更。（バージョンに依存）

## Webpackとは

[webpackとは？使い方と導入するメリットをわかりやすく解説](https://goworkship.com/magazine/how-to-webpack/)


>webpackは、モジュールを束ねるツールです。
>
>モジュールとは、プログラム内のJavaScriptファイル（以下：jsファイル）やsassファイルなどのことです。webpackを使うことで、複数のjsファイルをひとつのjsファイルにまとめたり、複数のsassファイルをひとつのsassファイルにしたりできます。
>
>バンドル（bundle）は”束にする”という意味です。上の画像に「bundle  your style」とありますが、文字どおりwebpackはモジュールを”束にする”役割を担います。


## docker上で実行する時のコマンド
```
npm run watch
php artisan serve --host 0.0.0.0 --port 8081
```
これらを別のターミナルで同時にたてる必要がある。

## Vuexとは
Vue のために開発された状態管理ライブラリ。状態管理というと難しく聞こえますが、簡単にいうと「コンポーネントをまたいで参照したいデータを入れておく場所」。


