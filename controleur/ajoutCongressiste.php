<?php
require "./modele/fonctionCongressiste.php";
require "./modele/fonctionHotel.php";

include "./vue/entete.php";
$hotel = new Hotel();
$resultat = $hotel->getHotelAsOption();
include "./vue/vueAjoutCongressiste.php";
include "./vue/pied.php"

?>