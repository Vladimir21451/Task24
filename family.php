<?php
class Family {
    public $peaplecount;
    public $name;
    public $yearcreation;
    public $state = "Россия";
    public function holdMeeting($date){
        echo "Встреча семьи состоится" . " ". $date;
    }
}
?>