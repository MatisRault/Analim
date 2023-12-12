<h1>SUPPRESSION ET MODIFICATION DES ORGANISMES</h1>
<a class="button" href="?action=defaut">Revenir à l'accueil</a>

<?php
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    $organisme = new Organisme();
    $organisme->supprOrganisme($id);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $CP = $_POST['CP'];
    $type = $_POST['type'];

    
    $organisme = new Organisme();
    $organisme->modifUnOrganisme($id, $libelle, $adresse, $ville, $CP, $type);
}

$organisme = new Organisme();
$resultat = $organisme->getAllOrganismes();
?>
<table class="table-light">
<thead>
    <tr>
        <th>Libelle</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Code Postal</th>
        <th>Type</th>
    </tr>
</thead>
<tbody>
<?php

foreach ($resultat as $row){ ?>
            <form action="" method="post">
                <tr>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <td><input type="text" name="libelle" value="<?php echo $row['Libelle']; ?>"></td>
                    <td><input type="text" name="adresse" value="<?php echo $row['Adresse']; ?>"></td>
                    <td><input type="text" name="ville" value="<?php echo $row['Ville']; ?>"></td>
                    <td><input type="text" name="CP" value="<?php echo $row['CP']; ?>"></td>
                    <td><input type="text" name="type" value="<?php echo $row['type']; ?>"></td>
                    <td>
                        <button value="<?php echo $row['id']; ?>" name="modifier">Modifier</button>
                        <button value="<?php echo $row['id']; ?>" name="supprimer">Supprimer</button>
 
                    </td>
                </tr>
            </form>
<?php } ?>
</tbody>
</table>