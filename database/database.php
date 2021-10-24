<?php
class database{
    protected $pdo,$sql,$statement;
    function __construct()
    {
        try{
            //new PDO('mysql:host=localhost;port=3306;dbname=dbname,USERNAME,PASSWORD,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION])
        //Tạo chuổi kết nối
        $this->pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DBNAME,USERNAME,PASSWORD,OPTION);
        //Set bộ ngôn ngữ database
        $this->pdo->query('set names utf8mb4');
        }catch(PDOException $e)
        {
            exit('Không kết nối được ('.$e->getMessage().')');
        }
    }

    function setQuery($sql)
    {
        $this->sql = $sql;
        return $this;
    }

    //Trả về là 1 dòng dữ liệu
    function loadRow($params = [])
    {
        try{
            $this->statement = $this->pdo->prepare($this->sql);
            return $this->statement->execute($params);
        }catch(PDOException $e){
            exit('Thực thi xãy ra lỗi: '.$e->getMessage());
        }
    }

    //Trả về là 1 bảng dữ liệu
    function loadRows($params = []){
        try{
            $this->statement = $this->pdo->prepare($this->sql);
            $this->statement->execute($params);
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            exit('Thực thi xãy ra lỗi: '.$e->getMessage());
        }
    }

    function disconnect(){
        $this->pdo = null;
        $this->statement = null;
    }
}
