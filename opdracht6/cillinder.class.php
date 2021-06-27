<?php 

$h = 10;
$r = 3;

class cilinderp{
    public $inhoudcilinder; 
    protected $oppervlaktevlak;
    protected $oppervlaktewanden;
    protected $r; 
    protected $h; 

    public function _construct2( $r, $h) {  
        $this -> r = $r; 
        $this -> h = $h; 
        $this -> oppervlaktevlak = 2 * pi() * $r  * $r; 
        $this -> opppervlaktewanden = 2 * pi() * $r * $h;
        $this -> inhoudcilinder = $this->oppervlaktevlak + $oppervlaktewanden;
    }
}

?>