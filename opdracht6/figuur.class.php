<?php
abstract class figuur {
  public $x;
  public $r;
  public $h;
}

abstract public function _construct1($x){ 
  $this->x = $x;
}

abstract public function _construct2($r, $h){ 
  $this ->r = $r;
  $this ->h = $h;
}
  
abstract public function textholder(){ : string;
}

class vierkant extends figuur{ 
  public function textholder() : string { 
    return "dit is een vierkant, ik ben $this->x groot"
  }
  class cillinder extends figuur{ 
    public function textholder() : string { 
      return "dit is een cilinder, ik ben $this->r rond en zo $this->h hoog"
    }
  }
}
?>