# PHPintroduction

PHP学習用のDocker環境  
以下の書籍を想定しています。  
[PHP本格入門［上］](https://gihyo.jp/book/2020/978-4-297-11468-8)

## 初期構築

### PHP起動

```shell
touch ./docker/db/logs/{mysql-error.log,mysql-query.log,mysql-slow.log}
docker-compose build
docker-compose up
```

`http://localhost` でPHP8.0系の情報が見れること

### DB接続

```shell
docker-compose exec db sh
# パスワードはユーザー名と同じ
mysql -h localhost -uroot -p
use database;
# テーブルとデータがあることを確認する
SELECT * from sample_table;
```

`http://localhost/db.php` で `sample_table` のデータが取得して見れること
