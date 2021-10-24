<?php
class Model extends database{
    protected $table;
    function __construct()
    {
        parent::__construct();
    }

    function get(){
        return $this->setQuery('SELECT * FROM `'.$this->table.'` WHERE deleted_at is null')->loadRows();
    }
}
?>