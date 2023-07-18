<?php

class database
{
    public static $conn = null;

    public static function getConnection()
    {

        if(database::$conn == null)
        {
            $servername = "localhost";
            $username ="sanjaik";
            $password ="sanjaik";
            $dbname = "meatshop";

            $connection = new mysqli($servername, $username, $password, $dbname);

            if ($connection->connect_error)
            {
               die("Connection failed");
            }else {
                
                database::$conn = $connection;
    
                return database::$conn;
            
        }

        }else{
            
            return database::$conn;
        }
        
    }





}

