
<?php
if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    $activite = new Activite();
    $activite->SupprUneActivite($id);
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $horaire = $_POST['horaire'];
    $date = $_POST['date'];
    $prix = $_POST['prix'];


    
    $activite = new Activite();
    $activite->ModifUneActivite($id, $libelle, $horaire, $date, $prix);
}

$activite = new Activite();
$resultat = $activite->getAllActivite();
?>
<div class="tabCard">
    <div class="tabCardbg">

<table class="table-css">
<thead>
    <tr>
        <th>Libelle</th>
        <th>Horaire</th>
        <th>Date</th>
        <th>Prix</th>
        <th>Modifier</th>
        <th>Supprimer</th>
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
                        <button value="<?php echo $row['id']; ?>" name="modifier"><lord-icon
    src="https://cdn.lordicon.com/pflszboa.json"
    trigger="hover"
    style="width:20px;height:20px">
</lord-icon></button>
                        
                    </td>
                    <td><button value="<?php echo $row['id']; ?>" name="supprimer">
<lord-icon
    src="https://cdn.lordicon.com/wpyrrmcq.json"
    trigger="hover"
    style="width:20px;height:20px">

</lord-icon></button></td>
                </tr>
            </form>
<?php } ?>
</tbody>
</table>
</div>
</div>