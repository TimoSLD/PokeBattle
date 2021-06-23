<?php

class Superhero {
    public $name;
    public $gender;
    public $team;
    public $oneline;

    function __toString() {
        return json_encode($this);
    }
 
}

function _construct($name, $gender, $team, $oneliner) {
    $this->name = $name;
    $this->gender = $gender;
    $this->team = $team;
    $this->oneliner = $oneliner;
}


?>