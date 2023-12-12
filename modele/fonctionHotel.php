<?php 
    class Hotel {
       private $id;
       private $typeHotel;
       private $Libelle;
       private $Adresse;
       private $CP;
       private $Ville;
       private $NbPlacesTotal;
       private $NbPlacesR;
       private $Prix;
       private $prixDejeuner;
   
       public function __construct(int $id=null, string $typeHotel ='',string $Libelle='', string $Adresse='', int $CP=null, string $Ville='', int $NbPlacesTotal=null, int $NbPlacesR=null, int $Prix=null, int $prixDejeuner=null) {
        if($id!=null){   
        $this->id = $id;
        }
           $this->typeHotel = $typeHotel;
           $this->Libelle = $Libelle;
           $this->Adresse = $Adresse;
           $this->CP = $CP;
           $this->Ville = $Ville;
           $this->NbPlacesTotal = $NbPlacesTotal;
           $this->NbPlacesR = $NbPlacesR;
           $this->Prix=$Prix;
           $this->prixDejeuner=$prixDejeuner;
       }

        // Getter for id
    public function getId(){
        return $this->id;
    }

    // Setter for id
    public function setId(int $id){
        $this->id = $id;
    }

    // Getter for typeHotel
    public function getTypeHotel(){
        return $this->typeHotel;
    }

    // Setter for typeHotel
    public function setTypeHotel(string $typeHotel){
        $this->typeHotel = $typeHotel;
    }

    // Getter for Libelle
    public function getLibelle(){
        return $this->Libelle;
    }

    // Setter for Libelle
    public function setLibelle(string $Libelle){
        $this->Libelle = $Libelle;
    }

    // Getter for Adresse
    public function getAdresse(){
        return $this->Adresse;
    }

    // Setter for Adresse
    public function setAdresse(string $Adresse){
        $this->Adresse = $Adresse;
    }

    // Getter for CP
    public function getCP(){
        return $this->CP;
    }

    // Setter for CP
    public function setCP(int $CP){
        $this->CP = $CP;
    }

    // Getter for Ville
    public function getVille(){
        return $this->Ville;
    }

    // Setter for Ville
    public function setVille(string $Ville){
        $this->Ville = $Ville;
    }

    // Getter for NbPlacesTotal
    public function getNbPlacesTotal(){
        return $this->NbPlacesTotal;
    }

    // Setter for NbPlacesTotal
    public function setNbPlacesTotal(int $NbPlacesTotal){
        $this->NbPlacesTotal = $NbPlacesTotal;
    }

    // Getter for NbPlacesR
    public function getNbPlacesR(){
        return $this->NbPlacesR;
    }

    // Setter for NbPlacesR
    public function setNbPlacesR(int $NbPlacesR){
        $this->NbPlacesR = $NbPlacesR;
    }

    // Getter for Prix
    public function getPrix(){
        return $this->Prix;
    }

    // Setter for Prix
    public function setPrix(int $Prix){
        $this->Prix = $Prix;
    }

    public function getPrixDejeuner(){
        return $this->prixDejeuner;
    }

        public function setPrixDejeuner(bool $prixDejeuner){
            $this->prixDejeuner = $prixDejeuner;
        }
    
    

    public function addHotel(){
        include_once "./bdd/bd_connexion.php";
        $sql="INSERT INTO hotel VALUES(null,?,?,?,?,?,?,?,?,?) ";
        $stmt=$conn->prepare($sql);
        $stmt->bindValue(1, $this->typeHotel);
        $stmt->bindValue(2, $this->Libelle);
        $stmt->bindValue(3, $this->Adresse);
        $stmt->bindValue(4, $this->CP);
        $stmt->bindValue(5, $this->Ville);
        $stmt->bindValue(6, $this->NbPlacesTotal);
        $stmt->bindValue(7, $this->NbPlacesR);
        $stmt->bindValue(8, $this->Prix);
        $stmt->bindValue(9, $this->prixDejeuner);
        $stmt->execute();
    }
    
    public function getLesHotels(){
        include "./bdd/bd_connexion.php";

        $sql2="SELECT * FROM hotel";
        $stmt=$conn->prepare($sql2);
        $stmt->execute();
        $resultat=$stmt->fetchALL(PDO::FETCH_OBJ);
        return $resultat;
    }
    public function getHotelAsOption() {
        include "./bdd/bd_connexion.php";
        $sql = "SELECT * FROM hotel";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }

    public function modifierHotel($id, $type, $libelle, $adresse, $cp, $ville, $prix, $nbplacestotal, $nbplacesr, $prixDejeuner){
        include "./bdd/bd_connexion.php";
        $sql4 = "UPDATE hotel SET typeHotel=?, Libelle=?, Adresse=?, CP=?, Ville=?, NbPlacesTotal=?, NbPlacesR=?, Prix=?, prixDejeuner=? WHERE id=?";
        $stmt = $conn->prepare($sql4);
        $stmt->bindValue(1, $type);
        $stmt->bindValue(2, $libelle);
        $stmt->bindValue(3, $adresse);
        $stmt->bindValue(4, $cp);
        $stmt->bindValue(5, $ville);
        $stmt->bindValue(6, $nbplacestotal);
        $stmt->bindValue(7, $nbplacesr);
        $stmt->bindValue(8, $prix);
        $stmt->bindValue(9, $prixDejeuner);
        $stmt->bindValue(10, $id);
        $stmt->execute();
    }
    
    
    


    public function supprimerHotel($supprimerHotelID){
        include "./bdd/bd_connexion.php";
        $sql3="DELETE FROM hotel WHERE id=?";
        $stmt=$conn->prepare($sql3);
        $stmt->bindValue(1, $supprimerHotelID);
        return $stmt->execute();

    }

    //fonction qui affiche les Hotels par l'étoile choisie
    public function getHotelByEtoile($etoileSouhaitee){
        include "./bdd/bd_connexion.php";
        $sql = "SELECT * FROM hotel WHERE typeHotel = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $etoileSouhaitee);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }

   }
?>
