<?php

    class Lamp{
        public $glass = "on";
        public $label = "PROOF THAT TONY STARK HAS A HEART";
        public $lamp = "off";
        public $cable = "unplugged";
        public $pedestal = "stainless steel";

        public function __construct($label, $lamp, $cable, $pedestal){
            $this->label = $label;
            $this->lamp = $lamp;
            $this->cable = $cable;
            $this->pedestal = $pedestal;
        }

        public function setGlass($action){
            $this->glass = $action;
        }

        public function getGlass(){
            return $this->glass;
        }

        public function setContent($value){
            $this->content = $value;
        }

        public function getContent(){
            return $this->content;
        }
    }

    echo "<pre>";
    $theLamp = new lamp("label", "lamp", "cable", "pedestal");

    $theLamp->setContent(100);

    echo $theLamp->getContent();

    echo "<br>---------<br>";

    var_dump($theLamp);

?>