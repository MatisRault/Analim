<?php
require "./modele/fonctionHotel.php";
require "./modele/fonctionCongressiste.php";

include "./vue/entete.php";
include "./vue/vueAssignerHotel.php";
include "./vue/pied.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $congressiste = new Congressiste();
    
    // Parcourir chaque congressiste et mettre à jour son hôtel si une valeur a été sélectionnée dans le formulaire
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'hotel_') !== false) {
            $congressisteId = str_replace('hotel_', '', $key); // Récupérer l'ID du congressiste
            $hotelId = $value; // Récupérer l'ID de l'hôtel sélectionné
            
            // Mettre à jour l'hôtel du congressiste dans la base de données
            $congressiste->updateHotelForCongressiste($congressisteId, $hotelId);
        }
    }
}
?>
