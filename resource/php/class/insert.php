<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/specord/resource/php/class/core/init.php';
require_once 'config.php';

class insert extends config{

    public $filename;
    function __construct($filename = null){
        $this->filename = $filename;
    }
        public function insertDiff(){
            $config = new config;
            $con = $config->con();
            $sql = "INSERT INTO formn(`fname`) VALUES('$this->filename')";
            $data = $con-> prepare($sql);
            $data ->execute();
        }


}
