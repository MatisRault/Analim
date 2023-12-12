<center>
    <div class="card">
        <div class="allCard">
            <form method="post" action="">
                <?php  
                    $congressiste = new Congressiste();
                    $resultatCongressistes = $congressiste->recupUnCongressisteSansHotel();
                    $hotelInstance = new Hotel(); // Instance de la classe Hotel

                    foreach ($resultatCongressistes as $unCongressiste) {
                        echo "<p>Congressiste : $unCongressiste->nom $unCongressiste->prenom</p>";
                        $etoileSouhaitee = $unCongressiste->etoileSouhaitee;
                        
                        // Récupérer les hôtels correspondant à l'étoile souhaitée du congressiste
                        $hotels = $hotelInstance->getHotelByEtoile($etoileSouhaitee);
                        
                        echo "<select name='hotel_$unCongressiste->id'>"; // Création de la liste déroulante avec un identifiant unique pour chaque congressiste
                        foreach ($hotels as $singleHotel) {
                            echo "<option value='$singleHotel->id'>$singleHotel->Libelle</option>"; // Créer une option pour chaque hôtel
                        }
                        echo "</select> <br>";
                    }
                ?>
                <br>
                <input type="submit" value="Sélectionner l'hôtel">
            </form>
        </div>
    </div>
</center>