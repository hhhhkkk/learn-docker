<?php
    $dbhost = "mysql:host=mysqldb;";
    $dbname = "dbname=test;";
    $dbport = "port=3306;";
    $user   = "root";
    $pwd    = "123456";
    try{

        $pdo = new PDO($dbhost . $dbname . $dbport, $user, $pwd);
	$sql = "select name from test limit 1";
	$stmt = $pdo->query($sql);
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	var_dump($list);
    } catch (PDOException $e) {
	echo $e->getMessage();die;
    }
    $res = $pdo->exec('set names utf8mb4');
