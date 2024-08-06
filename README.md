# アプリケーション名
FashionablyLate問い合わせフォーム
## 環境構築
docker compose up -d --build <br>
※　docker-compose.ymlファイル1行目に記載するversionはWSL上ではWARNと表示されるため、削除してあります。Macで確認する場合はversionを記載してください。<br>
※　またwindows(WSL)の場合、vscodeにて編集する際に権限が無ければ編集(保存)することが出来ないので、sudo chown -R (権限のあるユーザー名)/(権限を与えるユーザー名)　(ファイル or ディレクトリ名)
をターミナルに打ち込んだ後、権限を付けた上で編集を行ってください。
## Laravel開発環境
1. docker-compose exec php bash
2. composer install
3. .env(環境変数を変更)
4. php artisan key:generate
5. php artisan migrate

## ER図
< - - - 作成したER図の画像 - - - >

## 使用技術
PHP　8.0
Laravel 10.0
MySQL 8.0

## URL
 開発環境：http://localhost/
 phpMyAdmin: http::localhost:8080/
