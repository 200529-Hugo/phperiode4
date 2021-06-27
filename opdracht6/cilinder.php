<?php

class cilinder extends figuur{
  public function berekenOppervlakte(){
      echo "Bovenste en onderste cirkel = " . $oppervlakteTweeCirkels = 2 * $this->pi * $this->r * $this->r, "</br>";
      echo "Oppervlakte buis = " . $oppervlakteBuis        = 2 * $this->pi * $this->r * $this->h, "</br>";
      $oppervlakteCilinder    = $oppervlakteTweeCirkels + $oppervlakteBuis;
      echo "Oppervlakte cillinder is dan " . $oppervlakteCilinder . "<br>";
  }
}
?>
