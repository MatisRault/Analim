<h1>LISTE DES ACTIVITÉS</h1>
<a class="button" href="?action=?activite">Revenir à l'accueil</a>
<a class="button" href="?action=supprActivite">Modifier la liste des activités</a>

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
$activite = new Activite();
$resultat = $activite->getAllActivite();

foreach ($resultat as $row){ ?>
    <tr>
        <td><?php echo $row['Libelle']; ?></td>
        <td><?php echo $row['Horaire']; ?></td>
        <td><?php echo $row['Date']; ?></td>
        <td><?php echo $row['Prix']; ?></td>
    </tr>
<?php } ?>
</tbody>
</table>


<?php /*<h1>LISTE DES ACTIVITÉS</h1>
<form action="../modele/fonctionActivite.php" method="post">
    <ul>
        <?php
        require_once "./modele/fonctionActivite.php";

        $activite = new Activite();
        $resultat = $activite->getAllActivite();

        foreach ($resultat as $row): ?>
            <li>
                Libellé: <?php echo $row['libelle']; ?> -
                Horaire: <?php echo $row['horaire']; ?> -
                Date: <?php echo $row['date']; ?> -
                Prix: <?php echo $row['prix']; ?>
                <input type="submit" name="modifier" value="Modifier">
                <input type="submit" name="supprimer" value="Supprimer">
            </li>
        <?php endforeach; ?>
    </ul>
</form> */
?>