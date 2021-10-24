<?php 
ob_start();
define('HOST','localhost');
define('PORT','3306');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','mvc_db');
//Cho phép hiển thị lỗi truy vấn
define('OPTION',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
?>