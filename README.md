# SNS作成のための学習記録リポジトリ
このリポジトリでは、PHP（MAMP,MySQLを含む）の学習を行った記録をする。
<br>
- [x] [try_1](https://github.com/jin237/sns_php/tree/main/try_1)　=>　https://github.com/jin237/sns_php/tree/main/try_1
- [ ] [try_2](https://github.com/jin237/sns_php/tree/main/try_2)　=>　https://github.com/jin237/sns_php/tree/main/try_2

(作業リポジトリ：　[try_2(Vue+Vue Router+Vuex+Laravelで写真共有アプリを作ろう)](https://github.com/jin237/try_2/tree/main/vuesplash))

- [x] [try_3](https://github.com/jin237/sns_php/tree/main/try_3)　=>　https://github.com/jin237/sns_php/tree/main/try_3
- [ ] [try_4](https://github.com/jin237/sns_php/tree/main/try_4)　=>　https://github.com/jin237/sns_php/tree/main/try_4
<br>

## 参考及び関連記事
### Docker, Laravel関連
- Docker環境構築リポジトリ -> [docker_try (My GitHub Repository)](https://github.com/jin237/docker_try)にて、Dockerの操作・コマンドのまとめを行った
- Laravel環境構築（Docker上） -> [「【超入門】20分でLaravel開発環境を爆速構築するDockerハンズオン」](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4) writing by [@ucan-lab](https://qiita.com/ucan-lab)
- Laravel + Nginx + MySQLのDocker開発環境 -> [Laravel + Nginx + MySQLのDocker開発環境を共有します](https://www.suzu6.net/posts/254-laravel-docker-compose/)

### Sea-Whaleへの活用
#### twitterに似たタイムラインの作成の記事
- [A Twitter clone built with Vue.js](https://vuejsexamples.com/a-twitter-clone-built-with-vue-js/)
- [TwitterのタイムラインをVueで作ったWebページに埋め込むメモ](https://www.nogawanogawa.work/entry/twitter_embed)
- [Laravel(+Vue.js)でSNS風Webサービスを作ろう！(要課金 ¥2,980）](https://www.techpit.jp/courses/11)


## try_1
[「【初心者向け入門】PHPからMySQLを利用する」](https://qiita.com/ab-boy_ringo/items/8274c66b6692966fdc55)を見本として、PHPの概要・枠の理解をする。
結構、問題や雑な部分が多いので注意。
<br>

## try_2
[「Vue + Vue Router + Vuex + Laravelで写真共有アプリを作ろう」](https://www.hypertextcandy.com/vue-laravel-tutorial-introduction)を実装してみる。
先に、[try_3](https://github.com/jin237/sns_php/tree/main/try_3)を行うと、PHPの入門ができてその上で、Docker、Linuxの学習が必要となるので、最後。

- [01. イントロダクション](https://www.hypertextcandy.com/vue-laravel-tutorial-introduction/)
- [02. アプリケーションの設計](https://www.hypertextcandy.com/vue-laravel-tutorial-application-design/)
- [03. SPA開発環境とVue Router](https://www.hypertextcandy.com/vue-laravel-tutorial-setting-up-spa-project/)
- [04. 認証API](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication/)
- [05. 認証ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-2/)
- [06. 認証機能とVuex](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-3/)
- [07. 認証機能とVuex Part.2](https://www.hypertextcandy.com/vue-laravel-tutorial-authentication-part-4/)
- [08. エラーハンドリング](https://www.hypertextcandy.com/vue-laravel-tutorial-error-handling/)
- [09. 写真投稿API](https://www.hypertextcandy.com/vue-laravel-tutorial-submit-photo/)
- [10. 写真投稿フォーム](https://www.hypertextcandy.com/vue-laravel-tutorial-submit-photo-part-2/)
- [11. 写真一覧取得API](https://www.hypertextcandy.com/vue-laravel-tutorial-list-photos/)
- [12. 写真一覧ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-list-photos-part-2/)
- [13. 写真詳細ページ](https://www.hypertextcandy.com/vue-laravel-tutorial-photo-detail/)
- [14. コメント投稿機能](https://www.hypertextcandy.com/vue-laravel-tutorial-add-comment/)
- [15. いいね機能](https://www.hypertextcandy.com/vue-laravel-tutorial-likes/)
- [16. エラーハンドリング Part.2](https://www.hypertextcandy.com/vue-laravel-tutorial-error-handling-part-2/)

## try_3
<br>

[「【PHP初級】Playlist(YouTube links)」](https://www.youtube.com/playlist?list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C)を実装してみて、ログイン昨日の作成を行う。
 全部で8回で簡潔。入力フォームの作成、入力判定処理、ログアウト管理まで行う。
 
- [【PHP初級】ログイン機能作成手順とユーザテーブル作成 \~ログイン機能をつくろう！~ #01](https://www.youtube.com/watch?v=uCvPMe5wsNk&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=2)
- [【PHP初級】ユーザ登録機能作成とバリデーション \~ログイン機能をつくろう！~ #02](https://www.youtube.com/watch?v=Ud_Inw3O_D4&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=2)
- [【PHP初級】ユーザ登録機能作成とPHPDoc \~ログイン機能をつくろう！~ #03](https://www.youtube.com/watch?v=cf4appMVoFM&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=3)
- [【PHP初級】ログイン機能作成①セッションとキャッシュ \~ログイン機能をつくろう！~ #04](https://www.youtube.com/watch?v=k8N3Vj561Do&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=4)
- [【PHP初級】ログイン機能完成とセッションハイジャック対策 \~ログイン機能をつくろう！~ #05](https://www.youtube.com/watch?v=dqBXX_vH19s&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=5)
- [【PHP初級】最低限のセキュリティ対策をしよう！ \~ログイン機能をつくろう！~ #06](https://www.youtube.com/watch?v=L-Eo2AEm3VE&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=6)
- [【PHP初級】マイページ画面・ログインチェック機能の実装 \~ログイン機能をつくろう！~ #07](https://www.youtube.com/watch?v=YDuuT850dYU&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=7)
- [【PHP初級】ログアウト機能の実装！ \~ログイン機能完成~ #08](https://www.youtube.com/watch?v=k8QcB9LqeWQ&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=8)



## try_4

#### Vue.js 入門
以下のページを元にして、Vueについての基本を勉強していく。

- [【第1回】Vue.js 入門 〜Hello World編〜](https://rightcode.co.jp/blog/information-technology/vue-js-introduction-hello-world)
- [【第2回】Vue.js 入門 〜ディレクティブ編〜](https://rightcode.co.jp/blog/information-technology/vue-js-introduction-directive)

以下、分岐。
- [【第3回】Vue.js 入門 〜オプション編〜](https://rightcode.co.jp/blog/information-technology/vue-js-introduction-option-el-data-methods-computed-watch)
- [【第3回】Vue.js 入門 〜ディレクティブ編〜](https://rightcode.co.jp/blog/information-technology/vue-js-introduction-directive-v-if-v-show-v-for-v-once)


