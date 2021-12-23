<?php
try {
    // host=XXXの部分のXXXにはmysqlのサービス名を指定する
    $dsn = 'mysql:host=db;dbname=database;';
    $db = new PDO($dsn, 'docker', 'docker');

    $sql = 'SELECT * FROM sample_table;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
