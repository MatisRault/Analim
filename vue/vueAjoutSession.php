<div class="AllCard">
    <div class="card">

<form class="contenu" method="POST">
    <p>Creation d'une session</p>
    <input type="text" name="libelle" placeholder="Nom de l'activité" required>
    <input type="text" name="horaire" placeholder="Horaire de l'activité" required>
    <input type="date" name="date" placeholder="Date de l'activité" required>
    <input type="text" name="prix" placeholder="Prix de l'activité" required>

    <input type="submit" value="Créer l'activité">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prix = $_POST["prix"];
    $libelle = $_POST["libelle"];
    $date = $_POST["date"];
    $horaire = $_POST["horaire"];

    $session = new Session($prix, $libelle, new dateTime($date), $horaire);

    $resultat = $session->addSession();

}   
?>
</div></div>