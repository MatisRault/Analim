<?php
    ///// Ajout d'un hotel /////
 
    if(isset($_POST['ajouter'])){
        $type = $_POST['type'];
        $libelle = $_POST['libelle'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $prix = $_POST['prix'];
        $nbplacestotal = $_POST['nbplacestotal'];
        $nbplacesr = $_POST['nbplacesr'];
        $prixDejeuner = $_POST['prixDejeuner'];
        $nouvelHotel = new Hotel(null, $type, $libelle, $adresse, $cp, $ville, $prix, $nbplacestotal, $nbplacesr, $prixDejeuner);
        $nouvelHotel->addHotel();
    }
    ///// Fin ajout d'un hotel /////  
?> <div class="AllCard">
 
<div class="card">
<form action="" class="contenu" method="POST">
    <p>Ajouter un Hôtel</p>
<div class="etoile">
<select name="listeDeroulante" id="listeDeroulante">
   <option value="1">⭐</option>
   <option value="2">⭐⭐</option>
   <option value="3">⭐⭐⭐</option>
   <option value="4">⭐⭐⭐⭐</option>
   <option value="5">⭐⭐⭐⭐⭐</option>
</div>
</input>
 
    <input type="text" name="type" id="type" placeholder="Type d'hôtel">
    <input type="text" name="libelle" id="libelle" placeholder="Libellé">
    <input type="text" name="adresse" id="adresse" placeholder="Adresse">
    <input type="text" name="cp" id="cp" placeholder="Code postal">
    <input type="text" name="ville" id="ville" placeholder="Ville">
    <input type="text" name="nbplacestotal" id="nbplacestotal" placeholder="Nombre de places total">
    <input type="text" name="nbplacesr" id="nbplacesr" placeholder="Nombre de places réservées">
    <input type="text" name="prix" id="prix" placeholder="Prix">
    <input type="text" name="prixDejeuner" id="prixDejeuner" placeholder="Prix du petit déjeuner">
    <button type="submit" name="ajouter">Ajouter</button>
</form>
</div>
</div>
 