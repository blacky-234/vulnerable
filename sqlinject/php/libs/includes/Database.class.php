<?php

class Database
{
    private static $conn = null;

    public static function getConnection()
    {
        if(self::$conn === null){
            $servername = config_json('db_Host');
            $username = config_json('db_Username');
            $password = config_json('db_Passwd');
            $dbname = config_json('db_Name');

            self::$conn = new mysqli($servername, $username, $password, $dbname);

            if(self::$conn->connect_error){
                die("Connection failed: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}