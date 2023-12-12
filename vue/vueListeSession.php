<h1>LISTE DES SESSIONS</h1>
<a class="button" href="?action=?defaut">Revenir a l'accueil</a>
<a class="button" href="?action=supprSession">Modifier la liste des sessions</a>

<?php 

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
$session = new Session();
$session = $session->getAllSessions();

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