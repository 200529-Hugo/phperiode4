<?php
class prop {
  private $name;
  private $light;
  private $stand;
  private $plug;
  private $label;
  private $material;
  private $case;
  public function __construct($name, $light, $stand, $plug, $label, $material, $case) {
    $this->name = $name;
    $this->light = $light;
    $this->stand = $stand;
    $this->plug = $plug;
    $this->label = $label;
    $this->material = $material;
    $this->case = $case;
  }

  public function intro() {
    echo "This prop is a {$this->name}. The light is currently {$this->light}. <br>
          The {$this->name} stands on a {$this->stand} stand and is {$this->plug}. <br>
          It has the label {$this->label} on it and the material is {$this->material}.<br>
          It has a {$this->case} case around it.";
  }
}

class lamp extends prop {
  public function message() {
    echo "Is this a lamp or a statue?<br>";
  }
}
$lamp = new lamp("lamp", "off", "cylinder", "plugged in", "&ldquo;PROOF THAT TONY STARK HAS A HEART&rdquo;", "stainless steel", "glass");
$lamp->message();
$lamp->intro();
?>