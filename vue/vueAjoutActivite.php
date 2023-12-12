
<div class="AllCard">
    <div class="card">

<form class="contenu" method="POST">
    <p>Creation d'une activité</p>
    <input type="text" name="libelle" placeholder="Nom de l'activité" required>
    <input type="text" name="horaire" placeholder="Horaire de l'activité" required>
    <input type="date" name="date" placeholder="Date de l'activité" required>
    <input type="text" name="prix" placeholder="Prix de l'activité" required>

    <input type="submit" value="Créer l'activité">
</form> 

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $libelle = $_POST["libelle"];
    $horaire = $_POST["horaire"];
    $date = $_POST["date"];
    $prix = $_POST["prix"];

    $activite = new Activite($libelle, $horaire, new DateTime($date), $prix);

    $resultat = $activite->addActivite();

}   
?>
</div></div>