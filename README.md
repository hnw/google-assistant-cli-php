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

- [Configure a Developer Project and Account Settings](https://developers.google.com/assistant/sdk/guides/service/python/embed/config-dev-project-and-account) に従い、GCPプロジェクトを作ります（無料です）
- [Register the Device Model](https://developers.google.com/assistant/sdk/guides/service/python/embed/register-device) に従い、仮想的なデバイスを登録して、認証情報をダウンロードします。
- [Generate credentials](https://developers.google.com/assistant/sdk/guides/service/python/embed/install-sample#generate_credentials)に従いOAuth認証を行い、認証情報を含んだJSONファイルを生成します。

## ファイルの改変

前のステップで取得したJSONをエディタで開き、最初の`{`の後ろに`"type":"authorized_user",`を追加します。

このファイルは認証情報を含んでいるのでリポジトリに保存してはいけません。例えば`$HOME/`以下または`$HOME/config/`以下のドットファイルとして置いておくなどが良いでしょう。

以下の説明では`$HOME/.assistant-credentials.json`として保存したことにします。

## 環境変数セット

```
export GOOGLE_APPLICATION_CREDENTIALS=$HOME/.assistant-credentials.json
```

# 実行例

```
$ ./okgoogle.php 何か面白いこと言って
すごい靴下を発掘した👣💮
```

# 参考URL

- https://developers.google.com/assistant/sdk/overview
