<?php
class Lamp{
    public $glass = "on";
    public $label = "PROOF THAT TONY STARK HAS A HEART";
    public $light = "off";
    public $cable = "unplugged";
    public $pedestal = "stainless steel";

    public function setLamp($action){
        $this->glass = $action;
        $this->label = $action;
        $this->light = $action;
        $this->cable = $action;
        $this->pedestal = $action;
    }

    public function getLamp(){
        return $this->glass;
        return $this->label;
        return $this->light;
        return $this->cable;
        return $this->pedestal;
    }
}
?>