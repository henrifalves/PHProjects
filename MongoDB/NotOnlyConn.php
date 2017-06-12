<?php
    class MongoConexao
    {
        public static $m;
        public static $db;
        public static $collection;

        static function mongonnect($mongoDB, $mongoCollection)
        {   
            self::$m = new MongoClient("mongodb://localhost:27017");
            self::$db = self::$m->selectDB($mongoDB);
            self::$collection = new MongoCollection(self::$db, $mongoCollection);

            return self::$collection;
        }
    }
    
?>