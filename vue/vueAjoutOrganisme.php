<h1>CRÉATION D'UN ORGANISME</h1>
<a class="button" href="?action=listeOrganisme">Liste des organismes</a>

<form action="" method="post">
    <input type="text" name="libelle" placeholder="Nom de l'organisme" required>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <input type="text" name="ville" placeholder="Ville" required>
    <input type="text" name="CP" placeholder="Code Postal" required>
    <input type="text" name="type" placeholder="Type" required>

    <input type="submit" value="Créer l'organisme">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $libelle = $_POST["libelle"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $CP = $_POST["CP"];
    $type = $_POST["type"];

    $organisme = new Organisme($libelle, $adresse, $ville, $CP, $type);

    $resultat = $organisme->addUnOrganisme();

}   
?>