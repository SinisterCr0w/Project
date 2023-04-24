<?php
class Dbh{

    protected function connect() {
        try{
            $host ="localhost";  // changer quand sera en ligne
            $dbName ="project";
            $user ="root";
            $pwd ="";
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
            $pdo = new PDO($dsn, $user, $pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
        catch (PDOException $e){
            print "Message : ".$e->getMessage(). "<br/>";
            die();
        }
    }
}
?>