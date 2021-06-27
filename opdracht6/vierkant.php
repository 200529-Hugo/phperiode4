<?php
include('figuur.php');

class vierkant extends figuur {
    public function berekenOppervlakte(){
        $oppervlakteVierkant = $this->x*$this->y;
        echo "De oppervlakte is $oppervlakteVierkant <br>";
    }
}
?>