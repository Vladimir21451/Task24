<?php
include_once "family.php";
class Father extends Family{
    public $name;
    public $wifeName;
    public $age;
    public function takeBath(){
        echo "Я принимаю ванну";
    }
}?>


<!--<form method = "post" action ="index.php?formPHP">
<input type = "submit" name = "button1" value = "Назад">
<form>-->

