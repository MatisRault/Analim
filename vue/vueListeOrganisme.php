<h1>LISTE DES ORGANISMES</h1>
<a class="button" href="?action=?defaut">Revenir a l'accueil</a>
<a class="button" href="?action=supprOrganisme">Modifier la liste des organismes</a>

<?php 

    $organisme = new Organisme();
    $resultat = $organisme->getAllOrganismes();
?>

<table class="table-light">
<thead>
    <tr>
        <th>Libelle</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>CP</th>
        <th>Type</th>
    </tr>
</thead>
<tbody>
<?php

foreach ($resultat as $row){ ?>
    <tr>
        <td><?php echo $row['Libelle']; ?></td>
        <td><?php echo $row['Adresse']; ?></td>
        <td><?php echo $row['Ville']; ?></td>
        <td><?php echo $row['CP']; ?></td>
        <td><?php echo $row['type']; ?></td>
    </tr>
<?php } ?>
</tbody>
</table>