<?php
    require_once('idex.php');

    class Bird extends Human{
        function fly(){
            
        }
    }

    $bird = new Bird();
    $bird->setName('インコ');
    $bird->greeting('やっほー');