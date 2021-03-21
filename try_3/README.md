# PHP 入門

# 参考資料・動画
- [【PHP初級】Playlist(YouTube links)](https://www.youtube.com/playlist?list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C)
  - [x] [【PHP初級】ログイン機能作成手順とユーザテーブル作成 \~ログイン機能をつくろう！~ #01](https://www.youtube.com/watch?v=uCvPMe5wsNk&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=2)
  - [x] [【PHP初級】ユーザ登録機能作成とバリデーション \~ログイン機能をつくろう！~ #02](https://www.youtube.com/watch?v=Ud_Inw3O_D4&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=2)
  - [x] [【PHP初級】ユーザ登録機能作成とPHPDoc \~ログイン機能をつくろう！~ #03](https://www.youtube.com/watch?v=cf4appMVoFM&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=3)
  - [x] [【PHP初級】ログイン機能作成①セッションとキャッシュ \~ログイン機能をつくろう！~ #04](https://www.youtube.com/watch?v=k8N3Vj561Do&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=4)
  - [x] [【PHP初級】ログイン機能完成とセッションハイジャック対策 \~ログイン機能をつくろう！~ #05](https://www.youtube.com/watch?v=dqBXX_vH19s&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=5)
  - [x] [【PHP初級】最低限のセキュリティ対策をしよう！ \~ログイン機能をつくろう！~ #06](https://www.youtube.com/watch?v=L-Eo2AEm3VE&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=6)
  - [ ] [【PHP初級】マイページ画面・ログインチェック機能の実装 \~ログイン機能をつくろう！~ #07](https://www.youtube.com/watch?v=YDuuT850dYU&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=7)
  - [ ] [【PHP初級】ログアウト機能の実装！ \~ログイン機能完成~ #08](https://www.youtube.com/watch?v=k8QcB9LqeWQ&list=PLCyDm9NTxdhKocC4K-CmdXVGEM-9a8U6C&index=8)

### 【PHP初級】ログイン機能作成手順とユーザテーブル作成 \~ログイン機能をつくろう！~ #01
Lesson1 folder
=>　https://github.com/jin237/sns_php/tree/main/try_3/lesson1



## Issue & Question
##### 1. エラー表示コードがなくても出てくる (lesson1)

```php
// エラー内容の表示
ini_set('display_errors', true);
```
このコードを入れなくても出てくる

##### 2. MySQLでのデータベース作成時に出てくるエラーを消したい (lesson1)

```terminal
Deprecation Notice in ./libraries/classes/Di/ReflectorItem.php#82
Method ReflectionParameter::getClass() is deprecated

Backtrace

./libraries/classes/Di/ReflectorItem.php#50: PhpMyAdmin\Di\ReflectorItem->_resolveArgs(
array,
array,
)
./libraries/classes/Di/FactoryItem.php#27: PhpMyAdmin\Di\ReflectorItem->invoke(array)
./libraries/classes/Di/Container.php#62: PhpMyAdmin\Di\FactoryItem->get(array)
./libraries/classes/Di/AliasItem.php#44: PhpMyAdmin\Di\Container->get(
string 'PhpMyAdmin\\Controllers\\Database\\DatabaseStructureController',
array,
)
./libraries/classes/Di/Container.php#62: PhpMyAdmin\Di\AliasItem->get(array)
./db_structure.php#35: PhpMyAdmin\Di\Container->get(
string 'DatabaseStructureController',
array,
)
```

##### 3. どうしても登録失敗になってしまっている (エラーメッセージも出てこない) (lesson3)
lesson3のソースコード　=> https://github.com/jin237/sns_php/tree/main/try_3

参考になりそうな動画 ： [【PHP・MySQL入門】プログラミング中にエラーが出た時の対処法！<tr>https://www.youtube.com/watch?v=x34nLDOEIBc](https://www.youtube.com/watch?v=x34nLDOEIBc)
  
この動画のようにやってもエラー表示すらすることができない
