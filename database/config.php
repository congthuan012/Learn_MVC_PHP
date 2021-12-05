<?php 
ob_start();
define('HOST','localhost');
define('PORT','3306');
define('USERNAME','root');
define('PASSWORD','123456');
define('DBNAME','learn_mvc_php');
//Cho phép hiển thị lỗi truy vấn
define('OPTION',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
?>