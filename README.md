# google-assistant-cli-php

PHP製のGoogle Assistantのコマンドラインツール。PHPからGoogle Assistant SDKを利用するサンプルとして公開します。

# セットアップ

## grpc拡張をインストール

```
$ pecl install grpc
```

## composer

```
$ composer install
```

# 使い方

## Oauth認証

## 環境変数セット

```
export GOOGLE_APPLICATION_CREDENTIALS=$HOME/.assistant-credentials.json
```

# 実行例

```
$ ./okgoogle.php 何か面白いこと言って
すごい靴下を発掘した👣💮
```
