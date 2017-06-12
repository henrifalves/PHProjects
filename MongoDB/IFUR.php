<?php
    require_once("NotOnlyConn.php");
    /**
     * CRUD para o banco de dados não relacional MONGODB
     */
    class IFUR
    {
        static $cursor;

        function insert(array $obj, $colletion)
        {
            self::$cursor = $colletion->insert($obj);
        }

        function find(array $obj, $colletion)
        {
            self::$cursor = $colletion->find($obj);
            return self::$cursor;
        }

        function update(array $obj, $colletion)
        {
            self::$cursor = $colletion->update($obj);
        }

        function remove(array $obj, $colletion)
        {
            self::$cursor = $colletion->update($obj);
        }
    }
    
?>