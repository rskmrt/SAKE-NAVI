## アプリケーション名  
SAKE-NAVI  


## 概要
カクテルの情報サイトです。  
「カクテルの一覧を表示・検索」、「カクテルをお気に入り」、「自分の持っている材料から作れるカクテルの表示」、「オリジナルカクテルの登録」ができるwebサイトです。


## 工夫した点  


## 苦労した点  


## サイトURL  
一般　　http://www.sake-navi.jp  
管理者　http://www.sake-navi.jp/admin


## テスト用アカウント
一般ユーザー
メールアドレス | パスワード
-|-
test1@test | 12345678
test2@test | 12345678
test3@test | 12345678

管理者
メールアドレス | パスワード
-|-
admin@test | 12345678


## 使用技術
- フロンドエンド  
 HTML/CSS  
 bootstrap

- バックエンド  
PHP 7.4.29  
Laravel Framework 6.20.44

- DB  
 mysql

- その他使用技術  
 git(gitHub) / Visual Studio Code / Tera Term


## 機能一覧
- 一般ユーザー
-ユーザー登録  
-ログイン  
-ログアウト  
-カクテル一覧表示  
-カクテル詳細表示  
-カクテル検索  
-カクテルをお気に入りに追加/削除  
-自分の持っている材料の登録  
-登録した材料から作れるカクテルを一覧表示  
-オリジナルカクテルの登録/編集/削除  

- 管理者  
-全体で表示するカクテルの登録/編集/削除  
-ベースの一覧表示/登録/編集/削除  
-材料の一覧表示/登録/編集/削除  
-ユーザーの一覧表示/編集/削除  


## データベース設計
![Database ER diagram (crow's foot)](https://user-images.githubusercontent.com/87703969/169865277-59ff4f1a-8337-42f7-a055-718a52a5f72e.svg)





## 利用方法
#### 一般ユーザー
- 一覧/詳細表示
![一覧表示](https://user-images.githubusercontent.com/87703969/169858020-2d3998b5-faf1-4e65-ae9c-c1ef006f3006.gif)  

- 検索
![検索](https://user-images.githubusercontent.com/87703969/169859204-661961af-e440-4a33-8669-9ae9ec0f9c4e.gif)  

- ログイン・ログアウト
![ログイン・ログアウト](https://user-images.githubusercontent.com/87703969/169859911-1a9f220d-61b9-4c50-af53-5a6207bcbc12.gif)  

- オリジナルカクテル
![オリジナル](https://user-images.githubusercontent.com/87703969/169860334-9ac10ec7-b27c-4230-abd0-1d48a31125c4.gif)  

- お気に入り
![お気に入り](https://user-images.githubusercontent.com/87703969/169861393-37eaa12a-1ad3-41fc-a017-7706f244f870.gif)  

- 作れるカクテル
![作れるカクテル](https://user-images.githubusercontent.com/87703969/169861844-2190815e-a7d0-45c5-be1b-eeb7714bd797.gif)  

#### 管理者
- ログイン/ログアウト
![ログイン](https://user-images.githubusercontent.com/87703969/169964239-95a8916c-4996-4726-9df9-1ab309b57a13.gif)  

- カクテル登録
![カクテル登録](https://user-images.githubusercontent.com/87703969/169964704-a35b96e8-d905-4a94-b053-469f319b5ae3.gif)

- ベース/材料管理
![ベース・材料管理](https://user-images.githubusercontent.com/87703969/169964751-5f0ab005-6825-4b48-806d-2f324d790a46.gif)

- ユーザー管理
![ユーザー管理](https://user-images.githubusercontent.com/87703969/169964807-d5c6ef2b-85f3-4551-a8e8-27bcf592b064.gif)


