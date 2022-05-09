<?php

    $servername= "local host";
    $dbUsername= "Wittera3";
    $dbPassword= "Aggienation31!";
    $dbName = "Wittera3_final_project";
        try{
    $dsn = 'mysql:host-localhost;dbname-final_project';
    $db = new PDO($dsn, "Wittera3", "Aggienation31!");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch(PDOExcwption $e){
    echo"Connection failed: " . $e->getMessage();
}
//Create clessses to function efficiently
    class DB {

        public static function connect(){
            try{
                $dsn = 'mysql:host=localhost;dbname=Wittera3_final_project';
                $db = new PDO($dsn, "Witter3", "Aggienation31!");
                $db->setAttribute(PDO::ATTR_ERRMODE< PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
            //returns the connection as $db
            return $db;        
        }
        public static function query($query, $params=array()){
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if(explode('', $query)[0] == 'SELECT'){

                $data = $statement->fetchAll();
                return $data;
            }
        }
    }
