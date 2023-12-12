<?php

Class Organisme{
    private string $libelle;
    private string $adresse;
    private string $ville;
    private string $CP;
    private string $type;

    public function __construct(string $libelle = '', string $adresse = '', string $ville = '', string $CP = '', string $type = '') {
        $this->libelle = $libelle;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->CP = $CP;
        $this->type = $type;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function setLibelle(string $libelle) {
        $this->libelle = $libelle;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }
    public function getVille() {
        return $this->ville;
    }
    public function setVille(string $ville) {
        $this->ville = $ville;
    }
    public function getCP() {
        return $this->CP;
    }
    public function setCP(string $CP) {
        $this->CP = $CP;
    }
    public function getType() {
        return $this->type;
    }
    public function setType(string $type) {
        $this->type = $type;
    }

    public function addUnOrganisme(){
        include "./bdd/bd_connexion.php";
        $sql = "INSERT INTO organisme (libelle, adresse, ville, CP, type) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->libelle);
        $stmt->bindValue(2, $this->adresse);
        $stmt->bindValue(3, $this->ville);
        $stmt->bindValue(4, $this->CP);
        $stmt->bindValue(5, $this->type);
        $stmt->execute();
    }
    public function getAllOrganismes(){
        include "./bdd/bd_connexion.php";
        $sql = "SELECT * FROM organisme";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
    public function supprOrganisme($id){
        include "./bdd/bd_connexion.php";
        $sql = "DELETE FROM organisme WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
    public function modifUnOrganisme($id, $libelle, $adresse, $ville, $CP, $type){
        include "./bdd/bd_connexion.php";
        $sql = "UPDATE organisme SET libelle = ?, adresse = ?, ville = ?, CP = ?, type = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $libelle);
        $stmt->bindValue(2, $adresse);
        $stmt->bindValue(3, $ville);
        $stmt->bindValue(4, $CP);
        $stmt->bindValue(5, $type);
        $stmt->bindValue(6, $id);
        $stmt->execute();
    }
}