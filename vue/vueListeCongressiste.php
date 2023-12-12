    <?php 

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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultat as $row): ?>
            <tr>
                <td><?php echo $row->nom; ?></td>
                <td><?php echo $row->prenom; ?></td>
                <td><?php echo $row->adresse; ?></td>
                <td><?php echo $row->CP; ?></td>
                <td><?php echo $row->ville; ?></td>
                <td><?php echo $row->tel; ?></td>
                <td><?php echo $row->mail; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
    </div>
