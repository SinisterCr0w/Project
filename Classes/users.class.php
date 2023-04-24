<?php

class Users extends Dbh{

    public function getUsers(){
        $sql = "SELECT * FROM Users";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetch()){
            return $row;
        }
    }

    public function getUser(){
        $sql = "SELECT * FROM Users WHERE userId = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        while ($row = $stmt->fetch()){
            echo $row['userFirstName'] . '</br>';
        }
    }


}