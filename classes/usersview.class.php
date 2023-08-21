<?php

class UsersView extends Users{
    public function showUsers($name){
        $results = $this->getUser($name);
        echo $results[0]['firstName'] . " " . $results[0]['lastName'] . "<br>";
    }
}