<?php
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    $congressiste = new Congressiste();
    $congressiste->SupprUnCongressiste($id);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];    
    $CP = $_POST['CP'];
    $tel = $_POST['tel'];
    $petitDejeuner = isset($_POST['petitDejeuner']) ? $_POST['petitDejeuner'] : 0;


    
    $congressiste = new Congressiste($nom, $prenom, $mail, $adresse, $ville, $CP, $tel, 1, 1, $petitDejeuner);
    $congressiste->ModifUnCongressite($id);
}

$congressiste = new Congressiste();
$resultat = $congressiste->getAllCongressistes();
?>
<div class="tabCard">
    <div class="tabCardbg">

    
<table class="table-css">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Petit Déjeuner</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultat as $row){ ?>
            <form action="" method="post">
                <tr>
                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                    <td><input type="text" name="nom" value="<?php echo $row->nom; ?>"></td>
                    <td><input type="text" name="prenom" value="<?php echo $row->prenom; ?>"></td>
                    <td><input type="text" name="adresse" value="<?php echo $row->adresse; ?>"></td>
                    <td><input type="text" name="CP" value="<?php echo $row->CP; ?>"></td>
                    <td><input type="text" name="ville" value="<?php echo $row->ville; ?>"></td>
                    <td><input type="text" name="tel" value="<?php echo $row->tel; ?>"></td>
                    <td><input type="text" name="mail" value="<?php echo $row->mail; ?>"></td>
                <td>
                    <input type="checkbox" name="petitDejeuner" value="1" <?php echo $row->petitDejeuner == 1 ? 'checked="checked"' : ''; ?>>
                </td>
                    <td>
                        <button value="<?php echo $row->id; ?>" name="modifier">Modifier</button>
                        <button value="<?php echo $row->id; ?>" name="supprimer">Supprimer</button>
                    </td>
                </tr>
            </form>
        <?php }?>
    </tbody>
</table>
</div>
</div>