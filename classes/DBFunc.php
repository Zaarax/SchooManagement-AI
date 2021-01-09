<?php
class DBFunc extends DBCon
{
    private $_pdo,
        $_error,
        $_qurey,
        $_insertID = 0,
        $_results;

    private static $_instance = null;

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            # code...
            self::$_instance = new DBFunc;
        }
        return self::$_instance;
    }

    public function __construct()
    {
        try {
            $Connection = DBCon::getInstance()->con;

            $this->_pdo = $Connection;
        } catch (Exception $ex) {
            //throw $th;
            die($ex->getMessage());
        }
    }

    public function Insertdata($table, $fields = array(), $type = 0)
    {
        $this->_error = false;
        $return = false;
        $keys = array_keys($fields);
        $values = null;
        $x = 1;
        foreach ($fields as $field) {
            # code...
            $values .= "?";
            if ($x < count($fields)) {
                $values .= ",";
            }
            $x++;
        }

        $qurey = "INSERT INTO {$table} (" . implode(',', $keys) . ") VALUES ($values)";

        if ($this->_qurey = $this->_pdo->prepare($qurey)) {
            if (count($fields)) {
                $x = 1;
                foreach ($fields as $param) {
                    # code...
                    $this->_qurey->bindvalue($x, $param);
                    $x++;
                }
            }
            if ($this->_qurey->execute()) {
                if ($type == 1) {
                    $this->_insertID = $this->_pdo->lastInsertID();
                    $return = true;
                }
                $return = true;
            }
        } else {
            $this->_error = true;
            $return = false;
        }
        return $return;
    }
    public function getDAta($script,$type = 1)
    {

        $this->_error = false;

        if ($this->_query = $this->_pdo->prepare($script)) {

            if ($this->_query->execute()) {
                # code...
                switch ($type) {
                    case '1':
                        $this->_results = $this->_query->fetchAll(PDO::FETCH_ASSOC);
                        break;
                    case '2':
                        
                        break;
                    
                    default:
                        # code...
                        break;
                }
                
            } else {
                # code...
                $this->_error = true;
            }
        } else {
            # code...
            $this->_error = true;
        }

        return $this;
    }
    public function getResult()
    {
        return $this->_results;
    }
    public function getInsertID()
    {
        return $this->_insertID;
    }
    public function getError()
    {
        return $this->_error;
    }
}