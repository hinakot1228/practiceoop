<?php

    class Human {
        public $name;

        function greeting($greeting) {
            echo $this->name . 'の' . $greeting;
        }

        function setName($namae){
            $this->name = $namae;
        }

    }

    $human = new Human();
    $human->setName('比奈子');
    $human->greeting('こんにちは');
    $human1 = new Human();
    $human1->setName('ひなこ');
    $human1->greeting('こんばんは');
    // $human->greeting('おはようございます');
    // $human->greeting('こんばんは');