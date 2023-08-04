<?php

class Patient{
    private $id;
    private $fullname;
    private $address;
    private $salary;


    public function __construct($id, $fullname, $address, $salary){
        $this->id = $id;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getId(){
        return $this->id;
    }
    public function getFullname(){
        return $this->fullname;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getSalary(){
        return $this->salary;
    }

    public function setFullname($fullname){
        $this->fullname = $fullname;
    }
}