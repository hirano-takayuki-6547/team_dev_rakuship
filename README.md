## 使用技術一覧

<!-- シールド一覧 -->
<p style="display: inline">
  <!-- バックエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Laravel-ffffff.svg?logo=Laravel&style=for-the-badge">
  <!-- バックエンドの言語一覧 -->
  <img src="https://img.shields.io/badge/PHP-ccc.svg?logo=php&style=for-the-badge">
  <!-- ミドルウェア一覧 -->
  <img src="https://img.shields.io/badge/-Apache-D22128.svg?logo=apache&style=for-the-badge">
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  
</p>

## 目次

1. [プロジェクトについて](#プロジェクトについて)
2. [環境](#環境)
3. [ディレクトリ構成](#ディレクトリ構成)
4. [開発環境構築](#開発環境構築)
5. [トラブルシューティング](#トラブルシューティング)

<!-- プロジェクト名を記載 -->

## プロジェクト名

Rakuship

<!-- プロジェクトについて -->

## プロジェクトについて

Rakushipは、忙しい人や物を断捨離したい人向けのフリマアプリです。
従来のフリマアプリは出品のために商品の写真撮影や梱包、郵送の作業まで個人が行う必要がありました。
しかしRakushipでは、ほとんどの作業（商品の集荷から、梱包、発送まで）を会社が受け持ちます。
ですので、ユーザーは値段の設定など最低限の設定をするだけです。
また、商品が売れないと思ったらユーザーは商品を捨てることもできます。
ユーザーの、「物を捨てたい、でも捨てるのが面倒だ、どうせならお金になったらいいのに。」という悩みを解決する、
それがRakushipです。

## 環境

<!-- 言語、フレームワーク、ミドルウェア、インフラの一覧とバージョンを記載 -->

| 言語・フレームワーク  | バージョン |
| --------------------- | ---------- |
| PHP                | ^8.0.2     |
| Laravel                | 9.52.16      |
| MySQL                 | 15.1        |
| Apache               | 2.4.56    |

その他のパッケージのバージョンは composer.json と package.json を参照してください

<p align="right">(<a href="#top">トップへ</a>)</p>

## ディレクトリ構成

<!-- Treeコマンドを使ってディレクトリ構成を記載 -->

```
tree
```

treeコマンドで確認してください。


<p align="right">(<a href="#top">トップへ</a>)</p>

## 開発環境構築

<!-- xampp上での環境構築の方法を記載 -->

.env ファイルを[環境変数の一覧](#環境変数の一覧)を元に作成

## パッケージインストール
```
npm i
```

<br>

```
composer install
```

を実行。

### 動作確認
xampp上でapacheとMySQLが起動していることを確認後、

```
php artisan serve
```

```
npm run dev
```

を実行。
http://127.0.0.1:8000 にアクセスできるか確認
アクセスできたら成功

### 環境変数の一覧

| 変数名                 | 役割                                      | デフォルト値                       | DEV 環境での値                           |
| ---------------------- | ----------------------------------------- | ---------------------------------- | ---------------------------------------- |
| DB_CONNECTION    | 接続するDB名（MySQLを使用） |   mysql                             |                                   |
| DB_DATABASE         | MySQL のデータベース名   | laravel                          |                                          |
| DB_USERNAME             | MySQL のユーザ名         | root                            |                                          |
| DB_PASSWORD         | MySQL のパスワード       |                              |                                          |
| DB_HOST             | MySQL のホスト名         | 127.0.0.1                                |                                          |
| MYSQL_PORT             | MySQL のポート番号       | 3306                               |                                          |
| APP_DEBUG                  | デバッグモードの切り替え                  | True                               | False                                    |
| PAYJP_PUBLIC_KEY        | pay.jpで取得するAPIの公開鍵                   |                    |                                          |
| PAYJP_SECRET_KEY | pay.jpで取得するAPIの秘密鍵   |              |                      |

## トラブルシューティング

### Vite manifest not found at

ルートディレクトリでnpm run devしてください。
