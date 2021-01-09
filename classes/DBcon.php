<?php
class DBCon{
    protected $con;
     
    private static $_instance=null;

    public static function getInstance(){
        if (!isset(self::$_instance)) {
            # code...
            self::$_instance = new DBCon();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        try{
            $this->con = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
        
            $this->con->setAttribute(
                PDO::ATTR_EMULATE_PREPARES, 
                PDO::ERRMODE_EXCEPTION
            );
        
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
        
    }

}