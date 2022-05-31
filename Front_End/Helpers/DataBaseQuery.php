<?php

    class DataBaseQuery {

        /* Query To Connection Data Base*/
        public static function conDataBase($serverHost="localhost",$userName="root",$password="",$dataBaseName = "land_of_legend"){

            try{
            $con = new PDO("mysql:host=$serverHost;dbname=$dataBaseName",$userName,$password);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $con;
            }catch(Exception $e){
                echo "Your Connect Failed " . $e->getMessage();
                return $con;
            }



        }


        /* Query To Select Info in Data Base*/
        public  static function selectOneQuery($rowSelected,$table,$condition=null,$values=null){
            
            $con = DataBaseQuery::conDataBase();
            $sql = "SELECT $rowSelected FROM $table $condition";
            $stmt = $con->prepare($sql);
            $stmt->execute($values);
            $info = $stmt->fetch();

            return $info;
        }

        public static function selectQuery($rowSelected,$table,$condition=null,$limit=null){
            
            $con = DataBaseQuery::conDataBase();
            $sql = "SELECT $rowSelected FROM $table $condition $limit";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $info = $stmt->fetchAll();


            return $info;
        }


        /* Query To Check if Info in Data Base*/
        public static function rowSelected($rowSelected,$table,$condition=null,$values=null){
            
            $con = DataBaseQuery::conDataBase();
            $sql = "SELECT $rowSelected FROM $table $condition";
            $stmt = $con->prepare($sql);
            $stmt->execute($values);
            $row = $stmt->rowCount();


            return $row;
        }


        /* Query To Update Info in Data Base */

        public static function updateQuery($table,$infoUpdate,$condition=null,$values=null){

            $con = DataBaseQuery::conDataBase();

            $sql = "UPDATE $table SET $infoUpdate $condition";
            $stmt = $con->prepare($sql);
            $stmt->execute($values);
            $row = $stmt->rowCount();

            return $row;
        }


        /* Query To Insert Info in Data Base */

        public static function insertQuery($table,$rowVariables,$Q,$condition=null,$limit=null,$values){
            
            $con = DataBaseQuery::conDataBase();

            $sql = "INSERT INTO $table ($rowVariables) VALUES ($Q) $condition $limit";
            $stmt = $con->prepare($sql);
            $stmt->execute($values);
            $row = $stmt->rowCount();

            return $row;
        }


        /* Query To Delete Info in Data Base*/ 

        public static function deleteQuery($table,$condition=null,$values=null){
        
            $con = DataBaseQuery::conDataBase();

            $sql = "DELETE FROM $table $condition";
            $stmt = $con->prepare($sql);
            $stmt->execute($values);
            $row = $stmt->rowCount();

            return $row;
        }


    }