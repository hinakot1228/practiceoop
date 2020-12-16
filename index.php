<?php

    class Human {
        private $name;

        // $this->nameのゲッター
        function greeting($greeting) {
            echo $this->name . 'の' . $greeting;
        }

        // セッター
        // function setName($namae){
        //     $this->name = $namae;
        // }

        // function getName(){
        //     return $this->name;  //return呼び出し元に返す
        // }

        // コンストラクタ（セッターの役割もしている）
        function __construct($namae){
            $this->name = $namae;
        }

    }

    $human = new Human('比奈子');
    // $human->name = 'ヒナコ';
    // $human->setName('比奈子');
    //echo $human->getName() . 'です';
    $human->greeting('こんにちは');


    $human1 = new Human('ひなこ');
    // $human1->setName('ひなこ');
    $human1->greeting('こんばんは');
    // $human->greeting('おはようございます');
    // $human->greeting('こんばんは');