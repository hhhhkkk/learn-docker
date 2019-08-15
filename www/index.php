<?php
    ini_set('dispaly_error', 'On');
    $dbhost = "mysql:host=mysqldb;";
    $dbname = "dbname=test;";
    $dbport = "port=3306;";
    $user   = "root";
    $pwd    = "123456";
    try{

        $pdo = new PDO($dbhost . $dbname . $dbport, $user, $pwd);
	$sql_has = 'SHOW TABELS LIKE “%test%”';
	$sql_res = $pdo->exec($sql_has);
	if ($sql_res) {
	    $sql = "select name from test limit 1";
	    $stmt = $pdo->query($sql);
	    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    var_dump($list);
	} else {
	    echo '表不存在';die;
	}
    } catch (PDOException $e) {
	echo $e->getMessage();die;
    }
