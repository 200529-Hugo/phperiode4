<?php
abstract class figuur {
   protected $pi = 3.1415;
   protected $x = 0;
   protected $y =0;
   protected $r = 0;
   protected $h = 0;
   public $omschrijving ="";
  
   public function __construct($x, $y, $r, $h,$omschrijving){
      $this->x = $x;
      $this->y = $y;
      $this->r = $r;
      $this->h = $h;
      $this->omschrijving = $omschrijving;
   }
   public function getOmschrijving() {
      echo "Dit is een $this->omschrijving <br>";
   } 
   abstract public function berekenOppervlakte();
  }
?>