<h1>SUPPRESSION ET MODIFICATION DES ACTIVITÉS</h1>
<a class="button" href="?action=defaut">Revenir à l'accueil</a>

<?php
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    $session = new Session();
    $session->SupprUneSession($id);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $horaire = $_POST['horaire'];
    $date = $_POST['date'];
    $prix = $_POST['prix'];


    
    $session = new Session();
    $session->ModifUneSession($id, $libelle, $horaire, $date, $prix);
}

$session = new Session();
$resultat = $session->getAllSessions();
?>
<table class="table-light">
<thead>
    <tr>
        <th>Libelle</th>
        <th>Horaire</th>
        <th>Date</th>
        <th>Prix</th>
    </tr>
</thead>
<tbody>
<?php

foreach ($resultat as $row){ ?>
            <form action="" method="post">
                <tr>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <td><input type="text" name="libelle" value="<?php echo $row['Libelle']; ?>"></td>
                    <td><input type="text" name="horaire" value="<?php echo $row['Horaire']; ?>"></td>
                    <td><input type="text" name="date" value="<?php echo $row['Date']; ?>"></td>
                    <td><input type="text" name="prix" value="<?php echo $row['Prix']; ?>"></td>
                    <td>
                        <button value="<?php echo $row['id']; ?>" name="modifier">Modifier</button>
                        <button value="<?php echo $row['id']; ?>" name="supprimer">Supprimer</button>
 
                    </td>
                </tr>
            </form>
<?php } ?>
</tbody>
</table>