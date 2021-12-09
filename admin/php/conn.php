<?php

class dataAccess
{
    // this function open Connection with database 
    static function Connection()
    {
        try {
            //code...

            $con =  new PDO('mysql:host=localhost;dbname=jardin_assilah;charset=utf8', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (EXCEPTION $e) {
            print("error : " . $e->getMessage());
        }
    }

    // this function updates database data ;
    static function update($query)
    {

        try {
            //code...
            $con = dataAccess::Connection();
            $update = $con->exec($query);
            return $update;
        } catch (EXCEPTION $e) {
            print("error : " . $e->getMessage());
        }
        $con = null;
    }

    // this function inserers database data ;
    static function inserer($query)
    {

        try {
            //code...
            $con = dataAccess::Connection();
            $inserer = $con->exec($query);
            return $inserer;
        } catch (EXCEPTION $e) {
            print("error : " . $e->getMessage());
        }
        $con = null;
    }


    // this function display data from database
    static function desplaydata($query)
    {
        try {
            //code...
            $con = dataAccess::Connection();
            $select = $con->query($query);
            $select->execute();
            return $select;
        } catch (EXCEPTION $e) {
            print("error : " . $e->getMessage());
        }
        $con = null;
    }


    // this function test client  is exist or not
    static function ClientLogin($login, $password)
    {

        try {
            $query = "SELECT  nom ,prenom,email FROM utilisateur WHERE email='$login' and MotDePasse='$password'";
            $desplaydata = dataAccess::desplaydata($query);
            return $desplaydata;
        } catch (EXCEPTION $e) {
            print("error : " . $e->getMessage());
        }
    }
}