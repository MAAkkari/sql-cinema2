<?php 

namespace Model; 
abstract class Connect{ 
    const HOST = 'localhost';
    Const DB = 'sql_cinema';
    const USER = 'root';
    const PASS = 'Zizo200719995060.';

    public static function seConnecter (){
        try {
            return new \PDO( 
                "mysql:host =" . self::HOST . ";dbname=" . self::DB . ";charset=utf8", self ::USER, self::PASS);
        } catch (\PDOException $ex) {
            return $ex->getMessage();
        } 
    }
}
