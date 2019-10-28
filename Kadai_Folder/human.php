<?php
require_once 'thinkable.php';
require_once 'animal.php';

class human extends animal {
    use thinkable;
    public $hobby ='';
    
    function __construct($name, $age, $hobby) {
        $this->hobby = $hobby;
        parent::__construct($name, $age);
    }
}
?>