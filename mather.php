<?php
include_once "family.php";
class Mather extends Family{
    public $name;
    public $husbandName;
    public $age;
    public function takeBath(){
        echo "Я принимаю ванну";
    }
}
?>