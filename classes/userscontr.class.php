<?php

class UsersContr extends Users{
    public function createUser($firstName, $lastName, $date){
        $this->setUser($firstName, $lastName, $date);
    }
}