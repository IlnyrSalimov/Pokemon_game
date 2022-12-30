<?php

class Connection
{
    public static function connect($name, $user, $password): PDO {

        return new PDO("mysql:host=localhost;dbname=$name; charset=utf8;", $user, $password);

//    public static function checkEmail($email): bool {
//        self::$dbh->query('SELECT email FROM users WHERE email = $email');
//        if (self::$dbh->fetch() != 0) return true;
//        else return false;
//    }
    }
}