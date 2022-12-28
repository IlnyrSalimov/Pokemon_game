<?php

class Connection
{
    private static $dbh;
    public static function connect($name, $user, $password): PDO {
        try {
            $dbh = new PDO("mysql:host=localhost;dbname=$name", $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return $dbh;
    }

//    public static function checkEmail($email): bool {
//        self::$dbh->query('SELECT email FROM users WHERE email = $email');
//        if (self::$dbh->fetch() != 0) return true;
//        else return false;
//    }
}