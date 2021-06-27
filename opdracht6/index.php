<?php
include('vierkant.php');
include('cilinder.php');


echo "<pre>";
$vierkant = new vierkant(5,5,0,0,"vierkant");
$vierkant->getOmschrijving();
$vierkant->berekenOppervlakte();
var_dump($vierkant);
echo "<br>---------<br>";

echo "<pre>";
$cilinder = new cilinder(0,0,3,10,"cilinder");
$cilinder->getOmschrijving();
$cilinder->berekenOppervlakte();
var_dump($cilinder);
echo "<br>---------<br>";

?>