<?php
    class MongoConexao
    {
        public static $m;
        public static $db;
        public static $collection;

        static function mongonnect()
        {   
            self::$m = new MongoClient("mongodb://localhost:27017");
            self::$db = self::$m->selectDB('test');
            self::$collection = new MongoCollection(self::$db, 'about');

            return self::$collection;
        }
    }
    
?>