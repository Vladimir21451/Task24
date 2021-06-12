<?php
include_once "father.php";
class Child extends Father{
    public $name;
    public $age;
    public $sex;
    public function toStudy($grader){
        echo "Я учусь в " . " " .$grader ." ". "классе.";
    }
}
?>