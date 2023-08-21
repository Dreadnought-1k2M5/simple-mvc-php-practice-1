<?php

class Test extends Dbh{
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['firstName'] . "<br>";
        }
    }
    public function getUsersStmt($fName, $lName){
        $sql = "SELECT * FROM users WHERE firstName= ? AND lastName = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName, $lName]);
        $names = $stmt->fetchAll();
        foreach($names as $name){
            echo $name['firstName'] . ' ' . $name['lastName'] . ' ' . $name['dateOfBirth'] . ' ' . "<br>";

        }
    }
    public function setUsersStmt($fName, $lName, $date){
        $sql = "INSERT INTO users(firstName, lastName, dateOfBirth) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName, $lName, $date]);

    }
}