<?php

class Users extends Dbh{
    protected function getUser($name){
        $sql = "SELECT * FROM Users WHERE firstName=?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$name]);

        $results = $statement->fetchAll();
        return $results;
    }
    protected function setUser($firstName, $lastName, $date){
        $sql = "INSERT INTO users(firstName, lastName, dateOfBirth) VALUES (?, ?, ?);";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$firstName, $lastName,$date]);
    }
}