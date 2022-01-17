# WordPressサイト開発環境

## 実行環境

### Node.js(v14.18.0)
Gulp.jsに使用

### Gulp.js
タスクランナー

#### タスク
- sassコンパイル
- javascriptコードチェック
- javascriptコンパイル
- javascriptバンドル
- javascript圧縮（バンドル）
- ejsコンパイル
- 静的ファイル出力（画像圧縮）
- ローカルサーバー
- ビルドファイル削除
- ファイル監視

### Docker
WordPressのローカル構築

## セットアップ

### Node.js

#### 1. nodebrewをインストール
```
$ curl -L git.io/nodebrew | perl - setup
$ echo 'export PATH=$HOME/.nodebrew/current/bin:$PATH' >> ~/.bash_profile
```

#### 2. Node.jsをインストール
```
$ nodebrew install v14.18.0
```

#### 3. Node.jsのバージョンを選択
```
$ nodebrew use v14.18.0
```

※パッケージ版は[公式サイト](https://nodejs.org/ja/download/)からインストール

### Docker
[公式サイト](https://www.docker.com/get-started)からインストール

## コマンド
1. Dockerの「コンテナ起動コマンド」を実行
1. Gulp.jsの「開発コマンド」を実行

### Docker

#### コンテナ起動
```
$ docker-compose up
```

#### コンテナ停止
```
$ docker-compose stop
```

### Gulp.js

#### 開発（自動ビルド + ローカルサーバー）
```
$ npm run dev
```

#### 開発（自動ビルド）
```
$ npm run watch
```

#### リリース（ビルド + ソース圧縮）
```
$ npm run prod
```