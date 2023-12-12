<?php

Class Session{

    private int $prix;  
    private string $libelle;
    private DateTime $date;
    private string $horaire;

    public function __construct(int $prix = 0 , string $libelle = '', DateTime $date = null, string $horaire = '') {
        $this->prix = $prix;
        $this->libelle = $libelle;
        $this->date = $date ?: new DateTime();
        $this->horaire = $horaire;
    }

    public function getPrix() {
        return $this->prix;
    }
    public function setPrix(int $prix) {
        $this->prix = $prix;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function setLibelle(string $libelle) {
        $this->libelle = $libelle;
    }
    public function getDate() {
        return $this->date;
    }
    public function setDate(DateTime $date) {
        $this->date = $date;
    }
    public function getHoraire() {
        return $this->horaire;
    }
    public function setHoraire(string $horaire) {
        $this->horaire = $horaire;
    }

    public function addSession(){
        include "./bdd/bd_connexion.php";
        $sql = "INSERT INTO session (prix, libelle, date, horaire) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->prix);
        $stmt->bindValue(2, $this->libelle);
        $stmt->bindValue(3, $this->date->format('Y-m-d H:i:s'));
        $stmt->bindValue(4, $this->horaire);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllSessions(){
        include "./bdd/bd_connexion.php";
        $sql = "SELECT * FROM session";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function SupprUneSession($id){
        include "./bdd/bd_connexion.php";
        $sql = "DELETE FROM session WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();   
    }

    public function ModifUneSession($id, $libelle, $horaire, $date, $prix) {
        include "./bdd/bd_connexion.php";
        $sql = "UPDATE session SET libelle = ?, horaire = ?, date = ?, prix = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $libelle);
        $stmt->bindValue(2, $horaire);
        $stmt->bindValue(3, $date);
        $stmt->bindValue(4, $prix);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }
}