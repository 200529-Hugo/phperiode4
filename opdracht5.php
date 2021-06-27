<?php
class prop {
  private $name;
  private $label;
  private $material;
  private $case;
  public function __construct($name, $label, $material, $case) {
    $this->name = $name;
    $this->label = $label;
    $this->material = $material;
    $this->case = $case;
  }

  public function intro() {
    echo "This prop is a {$this->name}. It has the label {$this->label} on it and the material is {$this->material}.<br>
          It has a {$this->case} case around it.";
  }
}

class lamp extends prop {
  public function message() {
    echo "Is this a lamp or a statue?<br>";
  }
}
$lamp = new lamp("lamp", "&ldquo;PROOF THAT TONY STARK HAS A HEART&rdquo;", "stainless steel", "glass");
$lamp->message();
$lamp->intro();
?>