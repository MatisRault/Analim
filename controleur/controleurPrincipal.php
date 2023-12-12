<?php
function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";

    $lesActions["ajoutCongressiste"] = "ajoutCongressiste.php";
    $lesActions["listeCongressiste"] = "listeCongressiste.php";
    $lesActions["gestionCongressiste"] = "gestionCongressiste.php";

    $lesActions["ajoutHotel"] = "ajoutHotel.php";
    $lesActions["listeHotel"] = "listeHotel.php";
    $lesActions["gestionHotel"] = "gestionHotel.php";

    $lesActions["ajoutActivite"] = "ajoutActivite.php";
    $lesActions["listeActivite"] = "listeActivite.php";
    $lesActions["gestionActivite"] = "gestionActivite.php";

    $lesActions["ajoutSession"] = "ajoutSession.php";
    $lesActions["listeSession"] = "listeSession.php";
    $lesActions["gestionSession"] = "gestionSession.php";

    $lesActions["ajoutOrganisme"] = "ajoutOrganisme.php";
    $lesActions["listeOrganisme"] = "listeOrganisme.php";
    $lesActions["gestionOrganisme"] = "gestionOrganisme.php";
    
    $lesActions["ajoutFacture"] = "ajoutFacture.php";
    $lesActions["listeFacture"] = "listeFacture.php";
    $lesActions["gestionFacture"] = "gestionFacture.php";

    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>