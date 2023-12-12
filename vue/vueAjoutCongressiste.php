<div class="AllCard">
    <div class="card">
    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $cp = $_POST["cp"];
    $ville = $_POST["ville"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $etoileSouhaitee = intval($_POST["etoileSouhaitee"]);
    $petitDejeuner = isset($_POST['petitDejeuner']) ? 1 : 0; // If the checkbox is checked, set $petitDejeuner to 1, otherwise to 0
    $congressiste = new Congressiste($nom, $prenom, $mail, $adresse, $ville, $cp, $tel, $petitDejeuner, $etoileSouhaitee);

    $resultat = $congressiste->addUnCongressiste();
}
?>



<form class="contenu" method="POST">
    <p>Ajouter un Congressiste</p>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <input type="text" name="cp" placeholder="Code postal" required>
    <input type="text" name="ville" placeholder="Ville" required>
    <input type="text" name="tel" placeholder="Téléphone" required>
    <input type="text" name="mail" placeholder="Mail" required>
    <div class="etoile">
    <select class="listeDeroulante" name="etoileSouhaitee" id="etoileSouhaitee">
   <option value="1">⭐</option>
   <option value="2">⭐⭐</option>
   <option value="3">⭐⭐⭐</option>
   <option value="4">⭐⭐⭐⭐</option>
   <option value="5">⭐⭐⭐⭐⭐</option>
    </div>
</select><br>
<input type="checkbox" name="petitDejeuner" value="1">

    <input type="submit" value="S'inscrire">
</form> <p>test</p>

</div>
</div>


