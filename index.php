<link rel="stylesheet" href="css/style.css">
<?php
include "controleur/controleurPrincipal.php";
 
if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}
 
$fichier = controleurPrincipal($action);
include "controleur/$fichier";
 
?>

